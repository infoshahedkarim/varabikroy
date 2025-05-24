@extends('layouts.master')
@section('title')
    Category
@endsection
@section('page-title')
    Category
@endsection
@section('body')

    <body>
    @endsection
    @section('content')


    <div>
        <h1>Category List</h1>
    </div>

    
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Meta tag</th>
                <th>Icon</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->slug}}</td>
                <td>@if($category->img)
                    <img src="{{ asset('storage/' . $category->img) }}" alt="{{ $category->name }}" width="150">
                @else
                    <p>No Image Available</p>
                @endif
                </td>
                <td>
                    <a href="{{route('category.edit', $category->slug)}}">Edit</a>
                    <form action="{{ route('category.delete', $category->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    
    @endsection