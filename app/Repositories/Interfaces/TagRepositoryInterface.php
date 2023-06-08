<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;

interface TagRepositoryInterface
{

    public function allTags();
    public function storeTag($data);
    public function findTag($id);
    public function updateTag($data, $id);
    public function destroyTag($id);
}
