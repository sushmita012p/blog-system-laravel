@extends('layouts.admin')

@section('title', 'Edit Tag')
@section('content')
<div class="container">
    <h3 class="text-center"> Edit Tag </h3>
    <form action="{{ route('tags.update', $tag->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="formGroupExampleInput">Tag Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="{{$tag->name}}"
                placeholder="Enter name">
        </div>

        <div class="form-group">
            <button class="btn btn-primary mt-5 btn-sm">Update Tag</button>
        </div>

    </form>
</div>
@endsection