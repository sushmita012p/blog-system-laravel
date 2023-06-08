<?php

namespace App\Repositories;

use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;


class CategoryRepository implements CategoryRepositoryInterface
{

    public function allCategories()
    {
        return Category::all();
    }

    public function storeCategory($data)
    {

        return Category::create($data);
    }


    public function findCategory($id)
    {
        return Category::find($id);
    }

    public function updateCategory($data, $id)
    {
        $category = $this->findCategory($id);
        $category->update($data);
        return $category;
    }

    public function destroyCategory($id)
    {
        $category = Category::find($id)->delete();
    }
}
