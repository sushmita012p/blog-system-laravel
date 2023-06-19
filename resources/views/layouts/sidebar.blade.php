<div class="sidebar" style="background-color: #5a5c69; color: #fff;">
    <h4 class="pt-5">Admin Dashboard</h4>
    <a href="{{ route('logout') }}" class="btn btn-danger btn-sm float-rightmt-5"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <br><br>
    <h5>Category</h5>
    <a href="{{ route('categories.create') }}" class="btn btn-primary btn-sm">Add Category</a>
    <a href="{{ url('admin/categories') }}" class="btn btn-primary btn-sm">View Category</a>
    <br><br>
    <h5>Post</h5>
    <a href="{{ route('blogs.create') }}" class="btn btn-primary btn-sm">Add Post</a>
    <a href="{{ url('admin/blogs') }}" class="btn btn-primary btn-sm">View Post</a>
    <br><br>
    <h5>Tags</h5>
    <a href="" class="btn btn-primary btn-sm">Add Tag</a>
    <a href="{{ route('tags.create') }}" class="btn btn-primary btn-sm">View Tag</a>
    <div class="mt-3">
        <h5>Statistics:</h5>
        <p>Total Blogs: {{ $postCount }}</p>
        <p>Total Comments: {{ $commentCount }}</p>
    </div>
</div>