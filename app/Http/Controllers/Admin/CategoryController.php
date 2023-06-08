<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterface;


class CategoryController extends Controller
{
    private $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $categories =  $this->categoryRepository->allCategories();
        return view('admin.category.index', compact('categories'));
    }
    public function create()
    {

        return view('admin.category.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();

            $file->storeAs('images', $filename, 'public');
            $data['image'] = $filename;
        }
        $this->categoryRepository->storeCategory($data);
        return redirect('admin/categories')->with('message', 'Category Added Successfully');
    }

    public function edit($id)
    {
        $category = $this->categoryRepository->findCategory($id);
        return view('admin.category.edit', compact('category'));
    }
    public function update($id, Request $request)
    {
        $category = $this->categoryRepository->findCategory($id);

        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();

            $file->storeAs('images', $filename, 'public');
            $data['image'] = $filename;
        }

        $this->categoryRepository->updateCategory($data, $id);
        return redirect('admin/categories')->with('message', 'Category Updated Successfully');
    }

    public function destroy($id)
    {
        $this->categoryRepository->destroyCategory($id);
        return redirect('admin/categories')->with('message', 'category deleted successfully');
    }
    public function view($id)
    {
        $category = Category::find($id);
        return view('admin.category.view', compact('category'));
    }
}
