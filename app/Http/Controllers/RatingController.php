<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function store(Request $request)
    {
  // Check if the user is authenticated
        if (Auth::check()) {
            // Validate the request
            $request->validate([
                'course_id' => 'required|exists:courses,id',
                'rating' => 'required|integer|min:1|max:5',
            ]);

            // Find the rating for the user and course
            $rating = Rating::where('user_id', Auth::id())
                            ->where('course_id', $request->input('course_id'))
                            ->first();

            if ($rating) {
                // Update the existing rating
                $rating->update(['rating' => $request->input('rating')]);
                $message = 'Rating updated successfully';
            } else {
                // Create a new rating
                $rating = Rating::create([
                    'rating' => $request->input('rating'),
                    'course_id' => $request->input('course_id'),
                    'user_id' => Auth::id(),
                ]);
                $message = 'Rating created successfully';
            }

            return response()->json([
                'success' => true,
                'message' => $message,
                'rating' => $rating,
            ]);
        } else {
            // Flash error message to the session and redirect
            return redirect()->back()->with('error', 'Login First to rate this course.');
        }
    }
}
