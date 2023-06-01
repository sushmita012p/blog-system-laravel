<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Category;

class BlogController extends Controller
{
    public function index(Request $request){
        $categories = Category::all();
        $query = Post::query();

        if($request->query('categories') && $request->query('categories') != 'all'){
            $query = $query->where('category_id',$request->query('categories'));
        }
        $post = $query->get();
        return view('blog', compact('post','categories'));
    }
    public function view($id){
        $post = Post::with('comments')->find($id);
        $relatedBlogs = Post::where('category_id', $post->category_id)
                        ->where('id', '!=', $post->id)
                        ->take(3)
                        ->get();

    return view('view', compact('post', 'relatedBlogs'));
    }
  
}
