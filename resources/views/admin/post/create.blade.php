<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Post</title>
</head>

<body>
  <div class="container">
    <h3 class="text-center"> <a href="{{route('blogs.create')}}"></a> </h3>

    <form action="{{route('blogs.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="formGroupExampleInput">category</label>
        <select class="form-control" name="category_id">
          @foreach($category as $item)
          <option value="{{$item->id}}">{{$item->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Post Name</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="Enter post">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Description</label>
        <textarea name="description" class="form-control" rows="4"></textarea>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Image</label>
        <input type="file" class="form-control" id="formGroupExampleInput3" name="image" placeholder="Enter image">
        <div class="form-group">
          <button class="btn btn-primary mt-5 btn-sm">Save Post</button>
        </div>
      </div>
    </form>
  </div>
</body>

</html>