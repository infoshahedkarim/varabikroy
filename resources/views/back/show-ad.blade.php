@extends('layouts.master')

@section('title')
    All ADs
@endsection

@section('page-title')
    All ADs
@endsection

@section('body')

<body>
@endsection

@section('content')

<div class="container">
    <h1 class="mb-4">All Ads</h1>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Subtitle</th>
                <th>Image</th>
                <th>Price</th>
                <th>Place</th>
                <th>Category</th>
                <th>Contact</th>
                <th>Premium</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ads as $index => $ad)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $ad->title }}</td>
                    <td>{{ $ad->slug }}</td>
                    <td>{{ $ad->subtitle }}</td>
                   <td>
    @if($ad->img)
        <img src="{{ asset('storage/' . $ad->img) }}" alt="Banner" width="60" class="me-1 mb-1">
    @endif

    @foreach($ad->images as $img)
        <img src="{{ asset($img->image_path) }}" alt="Extra Image" width="60" class="me-1 mb-1">
    @endforeach
</td>

                    <td>{{ $ad->price }}</td>
                    <td>{{ optional($places->find($ad->place_id))->name ?? 'N/A' }}</td>
                    <td>{{ optional($categories->find($ad->category_id))->name ?? 'N/A' }}</td>
                    <td>{{ $ad->contact }}</td>
                    <td>
    <form action="{{ route('ads.togglePremium', $ad->id) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('PATCH')
        <select name="premium_ads" onchange="this.form.submit()" class="form-select form-select-sm">
            <option value="1" {{ $ad->premium_ads ? 'selected' : '' }}>Yes</option>
            <option value="0" {{ !$ad->premium_ads ? 'selected' : '' }}>No</option>
        </select>
    </form>
</td>
<td>
                    <a href="{{route('ad.edit', $ad->slug)}}">Edit</a>
                    <form action="{{ route('ad.delete', $ad->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
