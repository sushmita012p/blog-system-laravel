@extends('layouts.admin')

@section('title', 'Dashboard')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h4 class="text-center">Admin Dashboard</h4>
            <a href="{{ route('logout') }}" class="btn btn-danger btn-sm float-right"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        <div class="card-body">
            <a href="{{ url('admin/category') }}" class="btn btn-primary btn-sm">View Category</a>
            <br>
            <a href="{{ url('admin/blogs') }}" class="btn btn-primary btn-sm mt-3">View Post</a>
            <br>
            <a href="{{ url('admin/tags') }}" class="btn btn-primary btn-sm mt-3">View Tag</a>

        </div>
    </div>

</div>
@endsection