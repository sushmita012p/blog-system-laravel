@extends('layouts.header')
@section('title', 'Sushmita Poudel')

@section('content')

<div class="container-fluid">

    <div class="background-image">
        <img src="{{ asset('storage/images/1687095603.jpg') }}" alt="Project 1" class="card-img-top">
    </div>

    <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-container">
            <h5 class="text-center mt-5">Hello</h5>
            <h5 class="text-center">It's me Sushmita Poudel</h5>
            <h5 class="text-center">I am into web development</h5>
            <div class="mt-3 d-flex justify-content-center">
                <button class="btn about">
                    <a href="{{route('about.index')}}">More About Me</a>
                </button>

            </div>

            <div class="social-icons-container">
                <a href="https://www.facebook.com/sushmita.poudel.musu" target="blank"><i
                        class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/sushmita_sr8/" target="blank"><i class="fab fa-instagram"></i></a>
                <a href="" target="blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="" target="blank"><i class="fab fa-twitter"></i></a>
                <a href="https://github.com/sushmita012p" target="blank"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </div>

</div>

<style>
    .background-image {
        width: 100%;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        z-index: -1;
    }

    .text-container {
        background-color: rgba(0, 123, 255, .25);
        padding: 100px;
        margin-top: 90px;
        border-radius: 50px;
        width: 80%;
        color: #fff;
    }

    .about {
        background-color: #268974;
    }

    .about a {
        color: #fff;
        text-decoration: none;
    }

    .about :hover {
        color: #ffd700;
    }

    .social-icons-container {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .social-icons-container a {
        margin: 0 10px;
        color: #fff;
        font-size: 24px;
    }

    .social-icons-container a:hover {
        color: #268974;
    }
</style>

@endsection