<?php

namespace App\Repositories;

use App\Models\Comment;
use App\Repositories\Interfaces\CommentRepositoryInterface;

class CommentRepository implements CommentRepositoryInterface
{
    public function createComment($data)
    {
        return Comment::create($data);
    }

    public function findComment($id)
    {
        return Comment::find($id);
    }

    public function deleteComment($id)
    {
        return Comment::destroy($id);
    }
}
