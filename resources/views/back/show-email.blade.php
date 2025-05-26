@extends('layouts.master')
@section('title')
    Contact Messages
@endsection
@section('page-title')
    Contact Messages
@endsection
@section('body')

<body>
@endsection

@section('content')

<div>
    <h1>Contact Form Submissions</h1>
</div>


<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Category</th>
            <th>Message</th>
            <th>Submitted At</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($messages as $message)
        <tr>
            <td>{{ $message->id }}</td>
            <td>{{ $message->name }}</td>
            <td>{{ $message->phone }}</td>
            <td>{{ $message->email }}</td>
            <td>{{ $message->category }}</td>
            <td>{{ $message->msg }}</td>
            <td>{{ $message->created_at->format('d M Y, h:i A') }}</td>
            <td>
                <form action="{{ route('contact.delete', $message->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this message?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
