@extends('layouts.admin')

@section('title', 'Post')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h4>Posts:
                <a href="{{ route('blogs.create') }}" class="btn btn-primary float-right">Add Post</a>
            </h4>
        </div>
        <div class="card-body">
            @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Post Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>View</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->category->name }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->slug }}</td>
                        <td>{{ $data->description }}</td>
                        <td> <img src="{{ url('storage/images/' . $data->image) }}" width="50px" height="50px"
                                alt="images">

                        </td>
                        <td class="text-center"><a href="{{ route('posts.show', $data->slug)}}"
                                class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a></td>

                        <td class="text-center"><a href="{{ route('posts.edit', $data->slug) }}"
                                class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a></td>
                        <td class="text-center">
                            <form action="{{ route('blogs.destroy', ['id' => $data->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    onclick=" return confirm('Are you sure you want to delete this post?')"
                                    class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="mt-3 d-flex justify-content-center pagination">
        {{ $posts->links() }}
    </div>
    <a href="{{ url('admin/categories') }}" class="btn btn-primary mt-2">View Category</a>
    <a href="{{url('admin/tags')}}" class="btn btn-primary mt-2">View Tag</a>

    <a href="{{ url('admin/dashboard') }}" class="btn btn-warning mt-2">Back to Dashboard</a>
</div>

@endsection