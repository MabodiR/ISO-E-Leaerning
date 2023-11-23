<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
  // Check if the user is authenticated
        if (Auth::check()) {
            // Validate the request
            $request->validate([
                'course_id' => 'required|exists:courses,id',
                'comment' => 'required',
                'title' => 'required',
            ]);

            // Find the comment for the user and course
            $comment = Comment::where('user_id', Auth::id())
                            ->where('course_id', $request->input('course_id'))
                            ->first();

            if ($comment) {
                // Update the existing comment
                $comment->update(['comment' => $request->input('comment'),'title'=>$request->input('title')]);
                $message = 'Comment updated successfully';
            } else {
                // Create a new comment
                $comment = Comment::create([
                    'title' => $request->input('title'),
                    'comment' => $request->input('comment'),
                    'course_id' => $request->input('course_id'),
                    'user_id' => Auth::id(),
                ]);
                $message = 'Comment created successfully';
            }

            return response()->json([
                'success' => true,
                'message' => $message,
                'comment' => $comment,
            ]);
        } else {
            // Flash error message to the session and redirect
            return redirect()->back()->with('error', 'Login First to rate this course.');
        }
    }
}
