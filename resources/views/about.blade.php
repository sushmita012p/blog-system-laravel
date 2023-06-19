@extends('layouts.admin')

@section('title', 'About Me')

@section('content')
<div class="container">
    <div class="row mt-2">
        <div class="col-md-3">
            <h2>About Me</h2>
        </div>
        <div class="col-md-9">
            <p>Hello, I'm Sushmita Poudel. I have a passion for coding, traveling, exploring new things, and
                reading.
                I believe in continuously learning and expanding my horizons. I have a strong background in web
                development and have worked on various projects using the mentioned
                skills. I strive to create visually appealing and user-friendly websites.</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-3">
            <h2>Skills</h2>
        </div>
        <div class="col-md-9">
            <h6>HTML</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
            </div>
            <h6>CSS</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
            </div>
            <h6>JavaScript (ES6)</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
            </div>
            <h6>React</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
            </div>
            <h6>MySQL</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
            </div>
            <h6>Laravel</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-3">
            <h2>Interest</h2>
        </div>
        <div class="col-md-9">
            <ul>
                <li>coding</li>
                <li>Travelling</li>
                <li>Playing Chess</li>
                <li>Reading Books</li>
            </ul>
        </div>
    </div>
</div>

<style>
    .progress {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .progress-bar {
        margin-top: 3px;
        margin-bottom: 3px;
    }
</style>

@endsection