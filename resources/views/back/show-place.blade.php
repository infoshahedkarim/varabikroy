@extends('layouts.master')
@section('title')
    Place
@endsection
@section('page-title')
    Place
@endsection
@section('body')

    <body>
    @endsection
    @section('content')


    <div>
        <h1>place List</h1>
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
            @foreach($places as $place)
            <tr>
                <td>{{$place->id}}</td>
                <td>{{$place->name}}</td>
                <td>{{$place->slug}}</td>
                <td>@if($place->img)
                    <img src="{{ asset('storage/' . $place->img) }}" alt="{{ $place->name }}" width="150">
                @else
                    <p>No Image Available</p>
                @endif
                </td>
                <td>
                    <a href="{{route('place.edit', $place->slug)}}">Edit</a>
                    <form action="{{ route('place.delete', $place->id) }}" method="POST" style="display:inline;">
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