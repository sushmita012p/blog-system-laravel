<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Tag;
use App\Repositories\Interfaces\PostRepositoryInterface;

class PostController extends Controller
{
    private $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index(Request $request)
    {
        $posts = $this->postRepository->allPosts($request);
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
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

        $post = $this->postRepository->storePost($data);
        $post->tags()->sync($request->tag_id);

        return redirect('admin/blogs')->with('message', 'Post Added Successfully');
    }

    public function edit($id)
    {
        $post = $this->postRepository->findPost($id);
        return view('admin.post.edit', compact('post'));
    }

    public function update($id, Request $request)
    {
        $post = $this->postRepository->findPost($id);

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

        $this->postRepository->updatePost($data, $id);
        return redirect('admin/blogs')->with('message', 'Post Updated Successfully');
    }

    public function destroy($id)
    {
        $this->postRepository->destroyPost($id);
        return redirect('admin/blogs')->with('message', 'Post deleted successfully');
    }

    public function view($id)
    {
        $post = $this->postRepository->findPost($id);
        return view('admin.post.view', compact('post'));
    }
}
