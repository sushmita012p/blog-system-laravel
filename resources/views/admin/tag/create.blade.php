@extends('layouts.admin')

@section('title', 'Add Tag')
@section('content')
<div class="container">
    <h3 class="text-center"> Add Tag </h3>
    <form action="{{route('tags.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Tag Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="Enter name">
        </div>
        <button class="btn btn-primary btn-sm">Save Tag</button>
    </form>
</div>
@endsection