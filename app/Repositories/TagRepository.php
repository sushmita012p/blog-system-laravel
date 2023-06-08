<?php

namespace App\Repositories;

use App\Repositories\Interfaces\TagRepositoryInterface;
use App\Models\Tag;
use Illuminate\Http\Request;


class TagRepository implements TagRepositoryInterface
{

    public function allTags()
    {
        return Tag::all();
    }

    public function storeTag($data)
    {

        return Tag::create($data);
    }


    public function findTag($id)
    {
        return Tag::find($id);
    }

    public function updateTag($data, $id)
    {
        $tag = $this->findTag($id);
        $tag->update($data);
        return $tag;
    }

    public function destroyTag($id)
    {
        return Tag::find($id)->delete();
    }
}
