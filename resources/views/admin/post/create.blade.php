@extends('layouts.admin')

@section('title', 'Add Post')
@section('content')
<h3 class="text-center"> Add Post <a href="{{route('blogs.create')}}"></a> </h3>

<form action="{{route('blogs.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="formGroupExampleInput">Category</label>
    <select class="form-control" name="category_id">
      @foreach($categories as $item)
      <option value="{{$item->id}}">{{$item->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Post Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="Enter post">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Description</label>
    <textarea name="description" class="form-control" rows="4"></textarea>
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput">Tags</label>
    <select class="form-control" name="tag_id[]" multiple="multiple" required>
      @foreach($tags as $tag)
      <option value="{{$tag->id}}">{{$tag->name}}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">Image</label>
    <input type="file" class="form-control" id="formGroupExampleInput3" name="image" placeholder="Enter image">
    <div class="form-group">
      <button class="btn btn-primary mt-5 btn-sm">Save Post</button>
    </div>
  </div>
</form>
@endsection