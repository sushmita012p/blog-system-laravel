<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class BlogController extends Controller
{
    public function index(){
        $post=Post::all();
        return view('blog', compact('post'));
    }
    public function view($id){
        $post=Post::find($id);
        return view('view', compact('post'));
    }
}
