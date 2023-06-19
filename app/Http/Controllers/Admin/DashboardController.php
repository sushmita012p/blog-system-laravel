<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Comment;

class DashboardController extends Controller
{
    public function index()
    {

        $postCount = Post::count();
        $commentCount = Comment::count();

        $recentBlogs = Post::orderBy('created_at', 'desc')->take(2)->get();
        $recentComments = Comment::orderBy('created_at', 'desc')->take(2)->get();
        return view('admin.dashboard', compact('postCount', 'commentCount', 'recentBlogs', 'recentComments'));
    }
}
