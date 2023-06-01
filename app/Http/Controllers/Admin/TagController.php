<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;


class TagController extends Controller
{
    public function index(){
        $tag=Tag::all();
        return view('admin.tag.index',compact('tag'));
    }
    public function create(){

        return view('admin.tag.create');
    }
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
    ]);

    $data = $request->all();

    $tag = Tag::create($data);
    return redirect('admin/tag')->with('message', 'Tag Added Successfully');
}

    public function edit($id){
        $tag=Tag::find($id);
        return view('admin.tag.edit', compact('tag'));
    }
    public function update($id, Request $request){
        $tag=Tag::find($id);
        
        $tag->update($request->all());

        return redirect('admin/tag')->with('message','Tag Updated Successfully');
    }
    public function delete($id){
        $tag=Tag::find($id)->delete();
        return redirect('admin/tag')->with('message', 'Tag deleted successfully');
    }
    public function view($id){
        $tag=Tag::find($id);
        return view('admin.tag.view', compact('tag'));
    }

}
