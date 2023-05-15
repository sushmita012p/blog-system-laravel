<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Post</title>
</head>
<body>
<div class="container">
<h3 class="text-center"> Edit Post </h3>
<form action="{{ route('blogs.update', $post->id) }}" method ="POST">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label for="formGroupExampleInput">Post Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="{{$post->name}}" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Description</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="description" value="{{$post->description}}" placeholder="Enter description">
  </div> <div class="form-group">
    <label for="formGroupExampleInput2">Image</label>
    <input type="file" class="form-control" id="formGroupExampleInput3" name="image" value="{{$post->image}}" placeholder="Enter image">
    <div class="form-group">
    <button class="btn btn-primary mt-5 btn-sm">Update Post</button>
</div>
  </div>
</form>
</div>
</body>
</html>