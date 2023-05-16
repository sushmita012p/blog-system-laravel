<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
        </div>
    </div>

    <div class="comment-desc mt-4">
        @if(session('message'))
            <h6 class="alert alert-warning">{{session('message')}}</h6>
        @endif
        <div class="card card-body">   
            <h4 class="card-title text-center">Leave a Comment:</h4>
            <form action="{{ route('comments.store') }}" method="POST">
                @csrf
                <input type="hidden" name="post_id" value="{{$post->id}}">
                
               <textarea class="form-control" name="comment" id="comment" rows="3" required></textarea>
               <button type="submit" class="btn btn-primary mt-3">Submit Comment</button>
            </form>
        </div>
        
    <div class="comment-details">
        <div class="card card-body mt-4">   
            <h6 class="card-title text-center">User One:  <span>Commented on DATE</span></h6>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum autem est nobis nostrum voluptatibus, modi necessitatibus, omnis, esse totam animi eveniet minima consequuntur minus voluptates nesciunt ducimus culpa rerum in.</p>
        </div>  
        <div> 
            <a href="" class="btn btn-success mt-3">Edit</a> 
            <a href="" class="btn btn-danger mt-3">Delete</a> 
        </div>
    </div>
</div>
</div>


</body>
</html>

