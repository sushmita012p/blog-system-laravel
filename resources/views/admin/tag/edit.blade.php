<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Tag</title>
</head>

<body>
    <div class="container">
        <h3 class="text-center"> Edit Tag </h3>
        <form action="{{ route('tags.update', $tag->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="formGroupExampleInput">Tag Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="{{$tag->name}}"
                    placeholder="Enter name">
            </div>

            <div class="form-group">
                <button class="btn btn-primary mt-5 btn-sm">Update Tag</button>
            </div>

        </form>
    </div>
</body>

</html>