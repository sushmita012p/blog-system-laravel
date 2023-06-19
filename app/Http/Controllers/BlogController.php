<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Category;
use App\Repositories\Interfaces\PostRepositoryInterface;

class BlogController extends Controller
{
    private $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index(Request $request)
    {
        $categories = Category::all();

        $posts = $this->postRepository->allPosts($request);
        return view('blog', compact('posts', 'categories'));
    }
    public function view($id)
    {
        $post = Post::with('comments')->find($id);
        $relatedBlogs = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->take(3)
            ->get();

        return view('view', compact('post', 'relatedBlogs'));
    }
}
