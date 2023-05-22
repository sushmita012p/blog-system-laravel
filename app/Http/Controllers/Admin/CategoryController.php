<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;


class CategoryController extends Controller
{
    public function index(){
        $category=Category::all();
        return view('admin.category.index',compact('category'));
    }
    public function create(){

        return view('admin.category.create');
    }
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $data = $request->all();

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('images', $imageName, 'public');
        $data['image'] = $imageName;
    }

    $category = Category::create($data);
    return redirect('admin/category')->with('message', 'Category Added Successfully');
}

    public function edit($id){
        $category=Category::find($id);
        return view('admin.category.edit', compact('category'));
    }
    public function update($id, Request $request){
        $category=Category::find($id);
        
        $category->update($request->all());

        return redirect('admin/category')->with('message','Category Updated Successfully');
    }
    public function delete($id){
        $category=Category::find($id)->delete();
        return redirect('admin/category')->with('message', 'category deleted successfully');
    }
    public function view($id){
        $category=Category::find($id);
        return view('admin.category.view', compact('category'));
    }
}
