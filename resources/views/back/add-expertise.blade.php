@extends('layouts.master')
@section('title')
    Add Expertise
@endsection
@section('page-title')
    Add Expertise
@endsection
@section('body')

    <body>
    @endsection
    @section('content')


    
   <div>
        <h1>Expertise</h1>

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


        <form action="{{route('back.estore')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Title</label>
                <input type="text" id="title" placeholder="Title" name="title" required>
            </div>
            <div>
    <label for="service_id">Select Service</label>
    <select name="service_id" id="service_id" required>
        <option value="">-- Select a Service --</option>
        @foreach($services as $service)
            <option value="{{ $service->id }}">{{ $service->title }}</option>
        @endforeach
    </select>
</div>
            <div>
                <label>Sub Title</label>
                <input type="text" id="title" placeholder="Short Text" name="subtitle" required>
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label for="horizontal-firstname-input" class="col-form-label" for="image">Add Icon</label>
                <input type="file" name="icon" id="image" accept="image/*" onchange="previewImage(event)">
                <br>
                <img id="imagePreview" src="" alt="Image Preview"
                    style="max-width: 200px; margin-top: 10px; display: none;">
            </div>
            <div class="row mb-4" style="align-items: center;">
                <label for="horizontal-firstname-input" class="col-form-label">Add Description</label>
                <textarea id="detail" name="des" type="text" class="ckeditor form-control"
                    placeholder="Add a details"></textarea>
            </div>
            <div class="row mb-4" style="align-items: center;">
                <button type="submit" value="Save the data" class="btn btn-outline-success waves-effect waves-light">Save Changes</button>
            </div>

        </form>
    </div>

    <script src="/ckeditor/ckeditor.js"></script>

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


@endsection
 