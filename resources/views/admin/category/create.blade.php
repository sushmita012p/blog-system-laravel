@extends('layouts.admin')

@section('title', 'Add Category')
@section('content')
<div class="container">
  <h3 class="text-center"> Add Category </h3>
  <form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="formGroupExampleInput">Category Name</label>
      <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Description</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" name="description"
        placeholder="Enter description">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Image</label>
      <input type="file" class="form-control" id="formGroupExampleInput3" name="image" placeholder="Enter image">
      <div class="form-group">
        <button class="btn btn-primary mt-5 btn-sm">Save Category</button>
      </div>
    </div>
  </form>
</div>
@endsection