<?php

namespace App\Repositories;

use App\Repositories\Interfaces\PostRepositoryInterface;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostRepository implements PostRepositoryInterface
{
    public function allPosts()
    {
        return Post::where('user_id', Auth::user()->id)->get();
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
