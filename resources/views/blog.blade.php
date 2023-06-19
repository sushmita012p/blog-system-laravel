@extends('layouts.admin')

@section('title', 'Blogs')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <div class="row justify-content-between">
                <div class="col-auto">
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

                <div class="col-auto">
                    <form action="{{route('blogs.index')}}" method="GET" class="d-flex">
                        <input type="text" class="form-control mr-2" name="search" placeholder="Search">
                        <button class="btn btn-success">Search</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach ($posts as $post)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img src="{{ url('storage/images/' . $post->image) }}" alt="image" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->name }}</h5>
                            <p class="card-text post-desc">{{ $post->description }}</p>
                            <a href="{{ route('blogs.show', ['id' => $post->id]) }}"
                                class="btn btn-info btn-sm">Visit</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="mt-3 d-flex justify-content-center pagination">
        {{ $posts->links() }}
    </div>

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

<style>
    .post-desc {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .card-img-top {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .page-item .page-link {
        border: 1px solid #5f9267;
        padding: 5px 10px;
        color: #5f9267;
        background-color: azure;
        text-decoration: none;
    }

    .page-item.active .page-link {
        background-color: #5f9267;
        border-color: none;
        color: #fff;
    }
</style>
@endsection