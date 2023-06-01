<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>View Tag</title>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h4 class="text-center">Tag Details:</h4>
            </div>
            <div class="card-body">
                <h5>Tag Name:</h5>
                <p>{{ $tag->name }}</p>

            </div>
        </div>
        <a href="{{url('admin/tag')}}" class="btn btn-warning mt-2">Back to tag List</a>
    </div>



</body>

</html>