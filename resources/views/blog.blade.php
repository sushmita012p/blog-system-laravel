@extends('layouts.admin')

@section('title', 'Blogs')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h4>Blogs</h4>
            <div class="mt-3">
                <form action="{{route('blogs.index')}}" method="GET">
                    <select class="form-control" style="width: 200px;" name="categories">
                        <option value="all">All Categories</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if(request()->query('categories') == $category->id)
                            selected
                            @endif>{{$category->name}}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-success mt-2">Filter</button>
                </form>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach ($post as $post)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img src="{{ url('storage/images/' . $post->image) }}" alt="image" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->name }}</h5>
                            <p class="card-text">{{ $post->description }}</p>
                            <a href="{{ route('blogs.show', ['id' => $post->id]) }}"
                                class="btn btn-info btn-sm">Visit</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <a href="{{ url('/') }}" class="btn btn-info mt-2">Back to Home</a>

    @auth
    <a href="{{ route('logout') }}" class="btn btn-danger mt-2"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    @endauth
</div>
@endsection