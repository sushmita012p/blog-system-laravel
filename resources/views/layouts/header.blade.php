<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <title>@yield('title', 'Laravel')</title>
    <style>
        .navbar {
            background-color: #268974;
        }

        .nav-link {
            color: #fff;
            padding: 25px;
            font-size: 16px;
        }

        .nav-link:hover {
            color: #ffd700;
        }
    </style>
</head>

<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link active" href="/">Home</a>
                        <a class="nav-item nav-link" href="{{route('about.index')}}">About</a>
                        <a class="nav-item nav-link" href="{{route('portfolio.index')}}">Portfolio</a>
                        <a class="nav-item nav-link" href="{{route('blogs.index')}}">Blogs</a>
                        <a class="nav-item nav-link" href="{{route('contact.index')}}">Contact</a>
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    @stack('js')

</body>

</html>