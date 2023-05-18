<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{
    public function store(Request $request)
    {
        //dd($request->all());
        if (Auth::check()) {
            //dd(Auth::user()->id);
            $request->validate([
                'comment' => 'required'
            ]);
            $data = $request->all();
            $data['user_id'] = Auth::user()->id;

            //dd($data['post_id']);
            try {
                Comment::create($data);
            } catch (\Exception $e) {
                dd($e->getMessage());
            }
            return redirect()->back()->with('message', 'Comment Added Successfully');
        } else {
            return redirect('/login')->with('message', 'Please Login First to comment');
        }

    }
    public function destroy($id)
    {
        $comment = Comment::find($id);

        if ($comment->user_id === auth()->id()) {
            $comment->delete();
            return redirect()->back()->with('message', 'Comment deleted successfully.');
        } else {
            return redirect()->back()->with('message', 'You are not authorized to delete this comment.');
        }
    }
}