@extends('layouts.admin')

@section('title', 'Blog')
@section('content')


<style>
    .blog-image {
        width: 100%;
        height: auto;
    }
</style>

<div class="container-fluid">
    <div class="text-center">
        <img src="{{ url('storage/images/' . $post->image) }}" class="blog-image" alt="image">
    </div>
    <div class="mt-3">
        <h4>{{ $post->name }}</h4>
        <p>{{ $post->description }}</p>
    </div>

    @if (Auth::check())
    <div class="comment-desc mt-4">
        @if (session('message'))
        <h6 class="alert alert-warning">{{ session('message') }}</h6>
        @endif
        <div class="card card-body">
            <h4 class="card-title text-center">Leave a Comment:</h4>
            <form id="commentForm" action="{{ route('comments.store') }}" method="POST">
                @csrf
                <input type="hidden" name="post_id" value="{{ $post->id }}">

                <textarea class="form-control" name="comment" id="comment" rows="3" required></textarea>
                <button type="submit" id="submitComment" class="btn btn-primary mt-3">Submit Comment</button>
            </form>
        </div>
    </div>
    @endif

    <div class="comment-details">
        <h4 class="mt-3 comment-toggle">Comments:</h4>
        <div id="comment-container" class="card card-body">
            @foreach ($post->comments as $comment)

            <div id="comment{{$comment->id}}">
                <h6 class="card-title mt-2">{{ $comment->user->firstname }} {{ $comment->user->lastname }}
                    <small>Commented {{ $comment->created_at->diffForHumans() }}</small>
                </h6>

                <p>{{ $comment->comment }}</p>
                @if (Auth::check() && Auth::id() == $comment->user_id)
                <div>
                    <button type="submit" data-comment-id="{{$comment->id}}"
                        onclick="return confirm('Are you sure you want to delete this comment?')"
                        class="btn btn-danger btn-sm deleteComment"> <i class="fas fa-trash"></i></button>

                </div>
                @endif
            </div>
            @endforeach
        </div>
    </div>

    <div class="related-blogs mt-4">
        <h4>Related Blogs:</h4>
        <div class="row">
            @foreach ($relatedBlogs as $blog)
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="{{ url('storage/images/' . $blog->image) }}" alt="image" height="100px" width="100px"
                        class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog->name }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>

@push('js')
<script>
    $(document).ready(function(){

        $('#commentForm').on('submit', function(event) {
            event.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: formData,
                success: function(response) {
                    $('#comment').val('');
                    var newComment = '<div id="comment' + response.comment.id + '">' +
                        '<h6 class="card-title mt-2">' + response.comment.user.firstname + ' ' + response.comment.user.lastname +
                        '<small>Commented ' + response.created_at_diff + '</small>' +
                        '</h6>' +
                        '<p>' + response.comment.comment + '</p>' + 
                        '<div>' +
            '<button type="submit" data-comment-id="' + response.comment.id + '"' +
            'onclick="return confirm(\'Are you sure you want to delete this comment?\')" class="btn btn-danger btn-sm deleteComment"> <i class="fas fa-trash"></i></button>' +
        '</div>' +
                        '</div>' ; 
                        


                    $('#comment-container').append(newComment);
                },
                error: function(response) {
                    $('.waitlist-alert').removeClass('d-none').addClass('alert-danger');
                    $('.waitlist-alert p').html(response.message);
                }
            });
        });

        $(document).on('click','.deleteComment', function(){
            console.log('dsadasdsasda');
            var id = $(this).data('comment-id');
            console.log(id);
            console.log($('meta[name="csrf-token"]').attr('content'));

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:"delete",
                url: "{{route('comments.destroy', '')}}/" + id,

                success:function(response){
                    $('#comment'+id).hide();
                    
                },
                error: function(response){
                    $('.waitlist-alert').removeClass('d-none').addClass('alert-danger');
                    $('.waitlist-alert p').html(response.message);
                },
            });
        });
    });
    
</script>
@endpush

@endsection