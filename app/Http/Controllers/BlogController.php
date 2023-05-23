<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Category;

class BlogController extends Controller
{
    public function index(){
        $categories = Category::all();
        $post=Post::all();
        return view('blog', compact('post','categories'));
    }
    public function view($id){
        $post=Post::with('comments')->find($id);
        return view('view', compact('post'));
    }
    public function viewCategoryPost($id)
    {
        $categories = Category::findOrFail($id);
        $posts = $categories->posts;
    
        return view('index', compact('categories', 'posts'));
    }
}
