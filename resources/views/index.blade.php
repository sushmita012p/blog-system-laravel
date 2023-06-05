@extends('layouts.admin')

@section('title', 'Blogs')
@section('content')
<style>
    .blog-card {
        max-width: 400px;
        margin-bottom: 20px;
    }

    .blog-card .card-img-top {
        height: 200px;
        object-fit: cover;
    }
</style>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h4>{{ $categories->name }}</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($posts as $post)
                    <div class="col-md-4">
                        <div class="card blog-card">
                            <img src="{{ url('storage/images/' . $post->image) }}" class="card-img-top" alt="image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->name }}</h5>
                                <p class="card-text">{{ $post->description }}</p>
                                <a href="{{ route('users.show', ['id' => $post->id]) }}" class="btn btn-info">Visit</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <a href="{{ url('/blogs') }}" class="btn btn-info mt-2">Back to Blogs</a>
    </div>
    @endsection