<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\CommentRepositoryInterface;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    private $commentRepository;

    public function __construct(CommentRepositoryInterface $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function store(CommentRequest $request)
    {

        $data = $request->all();

        try {
            $comment = $this->commentRepository->createComment($data);
            $created_at_diff = $comment->created_at->diffForHumans();

            $responseData = [
                'comment' => $comment,
                'created_at_diff' => $created_at_diff,
            ];

            return response()->json($responseData);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
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
