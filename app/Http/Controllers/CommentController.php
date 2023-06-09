<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\CommentRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    private $commentRepository;

    public function __construct(CommentRepositoryInterface $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            $request->validate([
                'comment' => 'required'
            ]);

            $data = $request->all();
            $data['user_id'] = Auth::user()->id;

            try {
                $comment = $this->commentRepository->createComment($data);
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
        $comment = $this->commentRepository->findComment($id);

        if ($comment && $comment->user_id === auth()->id()) {
            $this->commentRepository->deleteComment($id);

            return response()->json([
                'status' => 'success',
                'message' => 'Comment deleted successfully.'
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong.'
            ], 500);
        }
    }
}
