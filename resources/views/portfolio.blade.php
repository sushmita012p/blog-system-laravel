@extends('layouts.admin')
@section('title','Portfolio')
@section('content')

<div class="container mt-5">
    <h2 class="section-title text-center">My Projects</h2>
    <div class="row mt-3">
        <div class="col-md-4">
            <div class="card mb-3">
                <img src="{{ asset('storage/images/1687082180.jpg') }}" alt="Project 1" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Elextra Ecommerce</h5>
                    <p class="card-text">Developed a dynamic and user-friendly e-commerce website that allows users to
                        browse and purchase a wide range of products.</p>
                    <a href="https://github.com/sushmita012p/Elextra-Ecommerce" class="btn btn-primary"
                        target="blank">View Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <img src="{{ asset('storage/images/1686913492.jpg') }}" alt="Project 1" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Scissor Paper Rock</h5>
                    <p class="card-text">Developed using HTML, CSS, and JavaScript, this web-based game allows users to
                        compete against the computer in a classic showdown of wits and strategy.</p>
                    <a href="https://github.com/sushmita012p/ScissorPaperRock" class="btn btn-primary"
                        target="blank">View Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <img src="{{ asset('storage/images/1687082821.jpg') }}" alt="Project 1" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Random Quote Generator</h5>
                    <p class="card-text"> Designed and implemented a web application that generates random inspirational
                        quotes to inspire and motivate users. </p>
                    <a href="https://github.com/sushmita012p/Random-Quote-Generator" class="btn btn-primary"
                        target="blank">View
                        Details</a>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .card-img-top {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
</style>
@endsection