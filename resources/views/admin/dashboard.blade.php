@extends('layouts.admin')
@section('content')
<style>
    .sidebar {
        min-height: 100vh;
    }
</style>
<div class="container-fuid p-0">
    <div class="row">
        <div class="col-md-3">
            @include('layouts.sidebar')
        </div>

        <div class="col-md-9">
            <h5 class="mt-3">Recent Blogs:</h5>
            <ul>
                @foreach($recentBlogs as $post)
                <li>{{ $post->name }}</li>
                @endforeach
            </ul>

            <h5 class="mt-5">Recent Comments:</h5>
            <ul>
                @foreach($recentComments as $comment)
                <li>{{ $comment->comment }} Commented By {{ $comment->commented_by }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection