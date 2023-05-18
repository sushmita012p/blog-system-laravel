<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Blogs</title>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h4>Blogs</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Post Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($post as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->category->name }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->description }}</td>
                                <td>{{ $data->image }}</td>
                                <td class="text-center"><a href="{{ route('users.show', ['id' => $data->id]) }}"
                                        class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a></td>

                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
        <a href="{{ url('/') }}" class="btn btn-info mt-2">Back to Home</a>
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}" class=":text-white">Hello,
                    {{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}</a>
            @endauth
        @endif
        @auth
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endauth
    </div>

</body>

</html>
