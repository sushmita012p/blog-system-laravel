@extends('layouts.admin')
@section('title', 'Contact')
@section('content')
<style>
    .contact-section {
        background-color: #f8f9fa;
        padding: 80px 0;
    }

    .contact-form {
        max-width: 500px;
        margin: 0 auto;
    }

    .contact-form input,
    .contact-form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
    }

    .contact-form button {
        background-color: #268974;
        color: #fff;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
    }

    .contact-form button:hover {
        background-color: #000;
    }

    .social-box {
        text-align: center;
        margin-top: 30px;
    }

    .social-box a {
        margin: 0 10px;
        color: #000;
        font-size: 24px;
    }

    .social-box a:hover {
        color: #ccc;
    }
</style>

<section id="contact" class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5">
                <div class="social-box">
                    <h3>GET IN TOUCH: </h3>
                    <h6>ADDRESS : 44600 - Kathmandu, Nepal</h6>
                    <h6>+977 9843629746 </h6>
                    <h6>sushmitapoudel071@gmail.com</h6>
                    <a href="https://www.facebook.com/sushmita.poudel.musu" target="blank"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/sushmita_sr8/" target="blank"><i
                            class="fab fa-instagram"></i></a>
                    <a href="" target="blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="" target="blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://github.com/sushmita012p" target="blank"><i class="fab fa-github"></i></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-form">
                    <h3>Contact Me</h3>
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" name="message" placeholder="Your Message"
                                required></textarea>
                        </div>
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                    @if (session('message'))
                    <div class="alert alert-success mt-2">{{ session('message') }}</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>


@endsection