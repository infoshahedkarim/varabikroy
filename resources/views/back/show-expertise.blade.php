@extends('layouts.master')
@section('title')
    Expertise
@endsection
@section('page-title')
    Expertise
@endsection
@section('body')

    <body>
    @endsection
    @section('content')


<div class="container mt-4">
    <h1 class="mb-4">Expertise List</h1>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Sub Title</th>
                <th>Icon</th>
                <th>Descriptions</th>
                <th>Service ID</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($expertises as $expertise)
                <tr>
                    <td>{{ $expertise->id }}</td>
                    <td>{{ $expertise->title }}</td>
                    <td>{{ $expertise->subtitle }}</td>
                    <td>
                        @if($expertise->icon)
                            <img src="{{ asset('storage/' . $expertise->icon) }}" alt="{{ $expertise->title }}" width="100">
                        @else
                            <span>No Image</span>
                        @endif
                    </td>
                    <td>{!! $expertise->des !!}</td>
                    <td>{{ $expertise->service_id }}</td>
                    <td>
                        <a href="{{ route('expertise.edit', $expertise->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('expertise.delete', $expertise->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
