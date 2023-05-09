<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Admin Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
            <h4 class="text-center">Admin Dashboard</h4>
            <a href="/" class="float-right">Logout</a>  
            </div>
            <div class="card-body">
            <a href="{{url('admin/category')}}" class="btn btn-primary btn-sm">View Category</a>
            <br>
            <a href="{{url('admin/posts')}}" class="btn btn-primary btn-sm mt-3">View Post</a>

            </div>
        </div>  
         
    </div>
</body>
</html>
   