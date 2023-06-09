<?php

namespace App\Repositories;

use App\Repositories\Interfaces\PostRepositoryInterface;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostRepository implements PostRepositoryInterface
{
    public function allPosts($request)
    {
        $query = Post::query();

        if ($request->query('categories') && $request->query('categories') != 'all') {
            $query = $query->where('category_id', $request->query('categories'));
        }

        if ($request->query('search')) {
            $query = $query->where('name', 'like', '%' . $request->query('search') . '%')->orWhere('description', 'like', '%' . $request->query('search') . '%');
        }

        $posts = $query->paginate(3);
        return $posts;
    }

    public function storePost($data)
    {
        return Post::create($data);
    }

    public function findPost($id)
    {
        return Post::find($id);
    }

    public function updatePost($data, $id)
    {
        $post = $this->findPost($id);
        $post->update($data);
        return $post;
    }

    public function destroyPost($id)
    {
        return Post::find($id)->delete();
    }
}
