@extends('layouts.master')
@section('title')
    Add an AD
@endsection
@section('page-title')
    Add an AD
@endsection
@section('body')

    <body>
    @endsection
    @section('content')


    
   <div>
        <h1>Add an AD</h1>

        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
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


        <form action="{{route('back.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Title</label>
                <input type="text" id="title" placeholder="Name" name="title" onkeyup="generateSlug()" required>
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label for="horizontal-firstname-input" class="col-form-label">Meta Tag</label>
                <input id="slug" name="slug" type="text" class="form-control" placeholder="Add meta tag" readonly />
            </div>
            <div>
                <label>Address</label> 
                <!-- Sub title named as address -->
                <textarea type="text" id="title" placeholder="Short Text" name="subtitle" required></textarea>
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label for="horizontal-firstname-input" class="col-form-label" for="image">Add banner</label>
                <input type="file" name="img" id="image" accept="image/*" onchange="previewImage(event)">
                <br>
                <img id="imagePreview" src="" alt="Image Preview"
                    style="max-width: 200px; margin-top: 10px; display: none;">
            </div>
            <div class="row mb-4">
    <label for="images">Upload Additional Images</label>
    <input type="file" name="images[]" id="images" accept="image/*" multiple onchange="previewMultipleImages(event)">
<div id="imagePreviewContainer" style="margin-top: 10px;"></div>

</div>

            <div>
                <label>Price</label>
                <input type="text" id="title" placeholder="Price" name="price" required>
            </div>
            <div>
    <label for="place_id">Select Place</label>
    <select name="place_id" id="place_id" required>
        <option value="">-- Select a Place --</option>
        @foreach($places as $place)
            <option value="{{ $place->id }}">{{ $place->name }}</option>
        @endforeach
    </select>
</div>
            <div>
    <label for="category_id">Select Category</label>
    <select name="category_id" id="category_id" required>
        <option value="">-- Select a Category --</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</div>
            <div class="row mb-4" style="align-items: center;">
                <label for="horizontal-firstname-input" class="col-form-label">Add Description</label>
                <textarea id="detail" name="des" type="text" class="ckeditor form-control"
                    placeholder="Add a details"></textarea>
            </div>
            <div>
                <label>Contact</label>
                <input type="number" id="contact" placeholder="Contact" name="contact" required>
            </div>
             <div>
    <label for="premium_ads">Premium Ads</label>
    <select id="premium_ads" name="premium_ads" required>
        <option value="">Select</option>
        <option value="1">Yes</option>
        <option value="0">No</option>
    </select>
</div>


            <div class="row mb-4" style="align-items: center;">
                <button type="submit" value="Save the data" class="btn btn-outline-success waves-effect waves-light">Save Changes</button>
            </div>

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
                const response = await fetch(`{{ url('/ad-slug-check') }}/${slug}`);
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
    </script>

    <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('imagePreview');

            if (input.files && input.files[0]) {
                const file = input.files[0];
                const maxSize = 2 * 1024 * 1024; // 2MB in bytes

                if (file.size > maxSize) {
                    alert("Image too large! Maximum size allowed is 2MB.");
                    input.value = ""; // Reset the file input
                    preview.src = ""; // Remove preview
                    preview.style.display = "none";
                    return; // Prevent FileReader from executing
                }

                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = "block";
                };
                reader.readAsDataURL(file);
            }
        }

    </script>
    <script>
    function previewMultipleImages(event) {
        const input = event.target;
        const previewContainer = document.getElementById('imagePreviewContainer');
        previewContainer.innerHTML = ''; // Clear previous previews

        const maxSize = 2 * 1024 * 1024; // 2MB in bytes

        if (input.files) {
            for (let i = 0; i < input.files.length; i++) {
                const file = input.files[i];

                if (file.size > maxSize) {
                    alert(`Image "${file.name}" exceeds 2MB limit!`);
                    input.value = ""; // Reset all selected files
                    previewContainer.innerHTML = "";
                    return;
                }

                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.maxWidth = '200px';
                    img.style.margin = '5px';
                    previewContainer.appendChild(img);
                };
                reader.readAsDataURL(file);
            }
        }
    }
</script>



@endsection
 