<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  <title>Category</title>
</head>
<body>
    <div class="container">
    <div class="card">
        <div class="card-header">
            <h4>Categories:
                <a href="{{url('admin/add-category')}}" class="btn btn-primary float-right">Add Category</a>
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
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>View</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->description}}</td>
                        <td>{{$data->image}}</td>
                        <td class="text-center"><a href="{{url('admin/view-category/'.$data->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a></td>
                        <td class="text-center"><a href="{{url('admin/edit-category/'.$data->id)}}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a></td>
                        <td class="text-center"><a href="{{url('admin/delete-category/'.$data->id)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <a href="{{url('admin/posts')}}" class="btn btn-primary mt-2">View Post</a>
    <a href="{{url('admin/dashboard')}}" class="btn btn-warning mt-2">Back to Dashboard</a>

    </div>
</body>
</html>