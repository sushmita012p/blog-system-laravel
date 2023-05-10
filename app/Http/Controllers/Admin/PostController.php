<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index(){
        $post=Post::all();
        return view('admin.post.index',compact('post'));
    }
    public function create(){
        $category=Category::all();
        return view('admin.post.create',compact('category'));
    }
    public function store(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'description'=>'required',
                'image'=>'required',
            ]
            );
        $data=$request->all();
        $post = Post::create($data);

        return redirect('admin/posts')->with('message','Post Added Successfully');
    }
    public function edit($id){
        $post=Post::find($id);
        return view('admin.post.edit', compact('post'));
    }
    public function update($id, Request $request){
        $post=Post::find($id);
        
        $post->update($request->all());

        return redirect('admin/posts')->with('message','Post Updated Successfully');
    }
    public function delete($id){
        $post=Post::find($id)->delete();
        return redirect('admin/posts')->with('message', 'Post deleted successfully');
    }
    public function view($id){
        $post=Post::find($id);
        return view('admin.post.view', compact('post'));
    }
}
