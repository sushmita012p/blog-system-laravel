<?php

namespace App\Repositories\Interfaces;


interface PostRepositoryInterface
{

    public function allPosts($request);
    public function storePost($data);
    public function findPost($id);
    public function updatePost($data, $id);
    public function destroyPost($id);
}
