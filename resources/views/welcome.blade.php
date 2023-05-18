<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blogs</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background-image: linear-gradient(to bottom, #f5f5f5, #e0e0e0);
        }

        .container {
            text-align: center;
        }

        .title {
            font-size: 36px;
            margin-bottom: 20px;
            color: #333;
        }

        .subtitle {
            font-size: 24px;
            margin-bottom: 50px;
            color: #666;
        }

        .buttons {
            margin-top: 50px;
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .buttons a {
            display: inline-block;
            text-decoration: none;
            background-color: #333;
            color: #fff;
            font-weight: bold;
            padding: 10px 20px;
            margin-right: 10px;
            border-radius: 3px;
        }

        .buttons a:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="title">Welcome to My Blog System</h1>
        <h2 class="subtitle">Explore and Discover Interesting Blogs</h2>

        <div class="buttons">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}">Hello, {{ Auth::user()->firstname }}{{ Auth::user()->lastname }}</a>
                @else
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                    <a href="{{ route('login') }}">Login</a>
                @endauth
            @endif
        </div>

        <a href="{{ url('/blogs') }}" class="btn btn-primary">Visit Blogs</a>
    </div>
</body>

</html>
