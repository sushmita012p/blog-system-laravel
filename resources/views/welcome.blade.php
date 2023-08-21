@extends('layouts.admin')
@section('title', 'Sushmita Poudel')

@section('content')

<div class="container-fluid">
    <div class="background-image">
        <img src="{{ asset('storage/images/1687095603.jpg') }}" alt="Background Image" class="card-img-top">
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="text-container text-center">
                <h2>Hello</h2>
                <h4>It's me, Sushmita Poudel</h4>
                <h4>I am into web development</h4>
                <div class="mt-3">
                    <a href="{{route('about.index')}}" class="btn btn-primary">More About Me</a>
                </div>

                <div class="social-icons-container mt-4">
                    <a href="https://www.facebook.com/sushmita.poudel.musu" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/sushmita_sr8/" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.instagram.com/sushmita_sr8/" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="https://www.instagram.com/sushmita_sr8/" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-6 text-center">
            <div class="text-container">
                <h4>Explore my Blogs</h4>
                <div class="mt-3">
                    <a href="{{route('blogs.index')}}" class="btn btn-primary">Explore</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 text-center">
            <div class="text-container">
                <h4>Explore my Portfolio</h4>
                <div class="mt-3">
                    <a href="{{route('portfolio.index')}}" class="btn btn-primary">Explore</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .background-image {
        position: fixed;
        top: 0;
        left: 0;
        z-index: -1;
        width: 100%;
        height: 100vh;
        filter: blur(3px);
    }

    .text-container {
        background-color: rgba(35, 57, 80, 0.7);
        padding: 40px;
        border-radius: 20px;
        color: #fff;
    }

    .btn-primary {
        background-color: #268974;
        border: none;
        color: #fff;
        border-radius: 30px;
        padding: 10px 20px;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #080807;
    }

    .social-icons-container a {
        color: #fff;
        font-size: 24px;
        margin: 0 10px;
        transition: color 0.3s ease;
    }

    .social-icons-container a:hover {
        color: #268974;
    }
</style>

@endsection