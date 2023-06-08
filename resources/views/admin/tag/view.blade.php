@extends('layouts.admin')

@section('title', 'Tag')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h4 class="text-center">Tag Details:</h4>
        </div>
        <div class="card-body">
            <h5>Tag Name:</h5>
            <p>{{ $tag->name }}</p>

        </div>
    </div>
    <a href="{{url('admin/tags')}}" class="btn btn-warning mt-2">Back to tag List</a>
</div>

@endsection