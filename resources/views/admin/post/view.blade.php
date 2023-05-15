<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>View Blog</title>
</head>
<body>
    <div class="container mt-5">
        <div class="card">  
            <div class="card-header">
                <h4 class="text-center">Blog Details:</h4>
            </div>
            <div class="card-body">
            <h5>Post Name:</h5> <p>{{ $post->name }}</p>
            <h5>Post Description:</h5><p>{{ $post->description }}</p>
            </div>
        </div>
            <a href="{{url('admin/blogs')}}" class="btn btn-warning mt-2">Back to Blog List</a>
        </div>   
</body>
</html>