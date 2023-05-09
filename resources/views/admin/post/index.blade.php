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
    <div class="card">
        <div class="card-header">
            <h4>Posts:
                <a href="{{url('admin/add-post')}}" class="btn btn-primary float-right">Add Post</a>
            </h4>
        </div>
        <div class="card-body">
        @if(session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Post Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($post as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->description}}</td>
                        <td>{{$data->image}}</td>
                        <td>
                            <a href="{{url('admin/edit-post/'.$data->id)}}" class="btn btn-success">Edit</a></td>
                            <td><a href="{{url('admin/delete-post/'.$data->id)}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <a href="{{url('admin/category')}}" class="btn btn-primary mt-2">View Category</a>
    <a href="{{url('admin/dashboard')}}" class="btn btn-warning mt-2">Back to Dashboard</a>
    </div>

</body>
</html>