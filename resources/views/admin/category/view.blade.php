<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>View Category</title>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h4 class="text-center">Category Details:</h4>
            </div>
            <div class="card-body">
                <h5>Category Name:</h5>
                <p>{{ $category->name }}</p>
                <h5>Category Description:</h5>
                <p>{{ $category->description }}</p>
                <h5>Image: </h5> <img src="{{ url('storage/images/' . $category->image) }}" width="50px" height="50px"
                    alt="image">
            </div>
        </div>
        <a href="{{url('admin/category')}}" class="btn btn-warning mt-2">Back to category List</a>
    </div>



</body>

</html>