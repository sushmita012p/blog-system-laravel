<?php

namespace App\Repositories\Interfaces;

interface CommentRepositoryInterface
{
    public function createComment($data);
    public function findComment($id);
    public function deleteComment($id);
}
