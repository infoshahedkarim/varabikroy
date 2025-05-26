@extends('layouts.master')

@section('title')
    Edit AD
@endsection

@section('page-title')
    Edit AD
@endsection

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Ad</h1>

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>There were some problems with your input:</strong>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form action="{{ route('ad.update', $ad->slug) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Title</label>
            <input type="text" id="title" name="title" class="form-control" placeholder="Title" value="{{ $ad->title }}" onkeyup="generateSlug()" required>
        </div>

        <div class="mb-3">
            <label>Meta Tag</label>
            <input id="slug" name="slug" type="text" class="form-control" value="{{ $ad->slug }}" placeholder="Add meta tag" />
        </div>

        <div class="mb-3">
            <label>Address</label>
            <!-- subtitle -->
            <textarea type="text" name="subtitle" class="form-control" value="{{ $ad->subtitle }}" required>{{$ad->subtitle}}</textarea>
        </div>

        <div class="mb-3">
            <label>Main Image</label>
            <input type="file" name="img" class="form-control">
            @if($ad->img)
                <img src="{{ asset('storage/' . $ad->img) }}" alt="Image" width="100" class="mt-2">
            @endif
        </div>

        <div class="mb-3">
            <label>Upload More Images</label>
            <input type="file" name="images[]" multiple accept="image/*" onchange="previewMultipleImages(event)">
            <div id="imagePreviewContainer" class="mt-2 d-flex flex-wrap gap-2"></div>

            @if($ad->images && $ad->images->count())
                <label class="form-label mt-3">Existing Uploaded Images:</label>
                <div class="d-flex flex-wrap gap-2">
                    @foreach ($ad->images as $img)
                        <div style="position: relative; display: inline-block;">
                            <img src="{{ asset($img->image_path) }}" alt="Image" width="80" class="mb-1" style="border: 1px solid #ccc; padding: 4px; border-radius: 4px;">
                            <button type="button"
                                onclick="deleteImage('{{ route('ads.deleteImage', $img->id) }}')"
                                style="position: absolute; top: -8px; right: -8px; background: red; color: white; border: none; border-radius: 50%; width: 20px; height: 20px; font-size: 12px; line-height: 0;">&times;
                            </button>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        <div class="mb-3">
            <label>Price</label>
            <input type="text" name="price" class="form-control" value="{{ $ad->price }}" required>
        </div>

        <div class="mb-3">
            <label>Select Place</label>
            <select name="place_id" class="form-select" required>
                <option value="">-- Select a Place --</option>
                @foreach($places as $place)
                    <option value="{{ $place->id }}" {{ $ad->place_id == $place->id ? 'selected' : '' }}>{{ $place->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Select Category</label>
            <select name="category_id" class="form-select" required>
                <option value="">-- Select a Category --</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $ad->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="des" class="form-control ckeditor">{{ $ad->des }}</textarea>
        </div>

        <div class="mb-3">
            <label>Contact</label>
            <input type="number" name="contact" class="form-control" value="{{ $ad->contact }}" required>
        </div>

        <div class="mb-3">
            <label>Premium Ads</label>
            <select name="premium_ads" class="form-select" required>
                <option value="1" {{ $ad->premium_ads ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ !$ad->premium_ads ? 'selected' : '' }}>No</option>
            </select>
        </div>

        <div class="mb-4">
            <button type="submit" class="btn btn-success">Update Ad</button>
        </div>
    </form>

    <!-- Hidden form for image delete -->
    <form id="delete-image-form" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>
</div>

<script src="/ckeditor/ckeditor.js"></script>

<script>
    let debounceTimer;

    function generateSlug() {
        const name = document.getElementById("title").value;
        let baseSlug = name.toLowerCase().replace(/[^a-z0-9\u0980-\u09FF]+/g, '-').replace(/^[-]+|[-]+$/g, '');


        clearTimeout(debounceTimer);

        if (baseSlug.length > 0) {
            debounceTimer = setTimeout(function () {
                checkSlug(baseSlug).then(finalSlug => {
                    document.getElementById("slug").value = finalSlug;
                });
            }, 500);
        } else {
            document.getElementById("slug").value = '';
        }
    }

    async function checkSlug(baseSlug) {
        let slug = baseSlug;
        let count = 0;
        let exists = true;

        while (exists) {
            const response = await fetch(`/ad-slug-check/${slug}`);
            const data = await response.json();
            exists = data.exists;

            if (exists) {
                count++;
                slug = `${baseSlug}-${count}`;
            }
        }

        if (slug !== baseSlug) {
            alert("Slug already exists. New unique slug generated.");
        }

        return slug;
    }

    function previewMultipleImages(event) {
        const input = event.target;
        const previewContainer = document.getElementById('imagePreviewContainer');
        previewContainer.innerHTML = '';

        const maxSize = 2 * 1024 * 1024;

        if (input.files) {
            for (let i = 0; i < input.files.length; i++) {
                const file = input.files[i];

                if (file.size > maxSize) {
                    alert(`Image "${file.name}" exceeds 2MB limit!`);
                    input.value = "";
                    previewContainer.innerHTML = "";
                    return;
                }

                const reader = new FileReader();
                reader.onload = function (e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.maxWidth = '80px';
                    img.style.margin = '5px';
                    previewContainer.appendChild(img);
                };
                reader.readAsDataURL(file);
            }
        }
    }

    function deleteImage(url) {
        if (confirm('Delete this image?')) {
            const form = document.getElementById('delete-image-form');
            form.action = url;
            form.submit();
        }
    }
</script>
@endsection
