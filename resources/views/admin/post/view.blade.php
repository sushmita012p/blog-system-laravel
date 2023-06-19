@extends('layouts.admin')

@section('title', 'Post')
@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h4 class="text-center">Blog Details:</h4>
        </div>
        <div class="card-body">
            <h5>Post Name:</h5>
            <p>{{ $post->name }}</p>
            <h5>Post Description:</h5>
            <p>{{ $post->description }}</p>
            <h5>Image: </h5> <img src="{{ url('storage/images/' . $post->image) }}" width="50px" height="50px"
                alt="image">
        </div>
    </div>
    <a href="{{ url('admin/blogs') }}" class="btn btn-warning mt-2">Back to Blog List</a>
</div>
@endsection