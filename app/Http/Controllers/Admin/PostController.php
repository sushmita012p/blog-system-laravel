<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    public function index(){
        $post=Post::where('user_id', Auth::user()->id)->get();
        return view ('admin.post.index', compact('post'));
    }
    public function create(){
        $category=Category::all();
        return view('admin.post.create',compact('category'));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);
    
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
    
            $file->storeAs('images', $filename, 'public');
            $data['image'] = $filename;
        }
    
        $post = Post::create($data);
    
        return redirect('admin/blogs')->with('message', 'Post Added Successfully');
    }
    public function edit($id){
        $post=Post::find($id);
        return view('admin.post.edit', compact('post'));
    }
    public function update($id, Request $request)
{
    $post = Post::find($id);

    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif',
    ]);

    $data = $request->all();

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
    
        $file->storeAs('images', $filename, 'public');
        $data['image'] = $filename;

    }

    $post->update($data);
    return redirect('admin/blogs')->with('message', 'Post Updated Successfully');
}

    public function destroy($id){
        $post=Post::find($id)->delete();
        return redirect('admin/blogs')->with('message', 'Post deleted successfully');
    }
    public function view($id){
        $post=Post::find($id);
        return view('admin.post.view', compact('post'));
    }
}
