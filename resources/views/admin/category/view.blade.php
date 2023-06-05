@extends('layouts.admin')

@section('title', 'Category')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h4 class="text-center">Category Details:</h4>
        </div>
        <div class="card-body">
            <h5>Category Name:</h5>
            <p>{{ $category->name }}</p>
            <h5>Category Description:</h5>
            <p>{{ $category->description }}</p>
            <h5>Image: </h5> <img src="{{ url('storage/images/' . $category->image) }}" width="50px" height="50px"
                alt="image">
        </div>
    </div>
    <a href="{{url('admin/categories')}}" class="btn btn-warning mt-2">Back to category List</a>
</div>


@endsection