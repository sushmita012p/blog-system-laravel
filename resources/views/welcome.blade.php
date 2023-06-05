@extends('layouts.admin')

@section('title', 'Blog System')
@section('content')

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
    @endsection