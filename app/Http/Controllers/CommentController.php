<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{
    public function store(Request $request)
    {
        if (Auth::check()) {
            $request->validate([
                'comment' => 'required'
            ]);

            $data = $request->all();
            $data['user_id'] = Auth::user()->id;

            try {
                $comment = Comment::create($data);
                $comment->load('user');
                $created_at_diff = $comment->created_at->diffForHumans();

                $responseData = [
                    'comment' => $comment,
                    'created_at_diff' => $created_at_diff,
                ];

                return response()->json($responseData);
            } catch (\Exception $e) {
                return response()->json(['error' => $e->getMessage()], 500);
            }
        } else {
            return redirect('/login')->with('message', 'Please Login First to comment');
        }
    }
    public function destroy($id)
    {
        $comment = Comment::find($id);

        if ($comment->user_id === auth()->id()) {
            $comment->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'comment deleted successfully.'
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'something went wrong.'
            ], 500);
        }
    }
}
