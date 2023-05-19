<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <title>View Blogs</title>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h4 class="text-center">Blog Details:</h4>
            </div>
            <div class="card-body">
                <h5>Post Name:</h5>
                <p>{{ $post->name }}</p>
                <h5>Post Description:</h5>
                <p>{{ $post->description }}</p>
                <h5>Image: </h5> <img src="{{ asset('image/' . $post->image) }}" alt="profile Pic" height="200"
                    width="200">
            </div>
        </div>

        @if (Auth::check())
            <div class="comment-desc mt-4">
                @if (session('message'))
                    <h6 class="alert alert-warning">{{ session('message') }}</h6>
                @endif
                <div class="card card-body">
                    <h4 class="card-title text-center">Leave a Comment:</h4>
                    <form action="{{ route('comments.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="post_id" value="{{ $post->id }}">

                        <textarea class="form-control" name="comment" id="comment" rows="3" required></textarea>
                        <button type="submit" class="btn btn-primary mt-3">Submit Comment</button>
                    </form>
                </div>
            </div>
        @endif

        <div class="comment-details">
            <h4 class="mt-3">Comments: </h4>
            <div class="card card-body">
                @foreach ($post->comments as $comment)
                    <h6 class="card-title mt-2">{{ $comment->user->firstname }} {{ $comment->user->lastname }}
                        <small>Commented on {{ $comment->created_at }}</small>
                    </h6>

                    <p>{{ $comment->comment }}</p>
                    @if (Auth::check() && Auth::id() == $comment->user_id)
                        <div>
                            <form action="{{ route('comments.destroy', $comment->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    onclick=" return confirm('Are you sure you want to delete this comment?')"
                                    class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i></button>
                            </form>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <a href="{{ url('/blogs') }}" class="btn btn-info mt-2">Back to Blogs</a>
    </div>

</body>

</html>
