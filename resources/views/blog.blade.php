<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Blogs</title>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h4>Blogs</h4>
                <div class="mt-3">
                    <form action="{{route('users.index')}}" method="GET">
                        <select class="form-control" style="width: 200px;" name="categories">
                            <option value="{{ route('users.index') }}">All Categories</option>
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
                                <a href="{{ route('users.show', ['id' => $post->id]) }}"
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
</body>

</html>