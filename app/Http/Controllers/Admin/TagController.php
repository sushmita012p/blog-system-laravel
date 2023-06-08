<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Repositories\Interfaces\TagRepositoryInterface;


class TagController extends Controller
{
    private $tagRepository;

    public function __construct(TagRepositoryInterface $tagRepository)
    {
        $this->tagRepository = $tagRepository;
    }
    public function index()
    {

        $tags =  $this->tagRepository->allTags();
        return view('admin.tag.index', compact('tags'));
    }
    public function create()
    {

        return view('admin.tag.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $data = $request->only('name');

        $this->tagRepository->storeTag($data);
        return redirect('admin/tags')->with('message', 'Tag Added Successfully');
    }

    public function edit($id)
    {
        $tag = $this->tagRepository->findTag($id);
        return view('admin.tag.edit', compact('tag'));
    }
    public function update($id, Request $request)
    {

        $this->tagRepository->updateTag($request->all(), $id);

        return redirect('admin/tags')->with('message', 'Tag Updated Successfully');
    }
    public function destroy($id)
    {
        $this->tagRepository->destroyTag($id);


        return redirect('admin/tags')->with('message', 'Tag Deleted Succesfully');
    }
    public function view($id)
    {
        $tag = Tag::find($id);
        return view('admin.tag.view', compact('tag'));
    }
}
