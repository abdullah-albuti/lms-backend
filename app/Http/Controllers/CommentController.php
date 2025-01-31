<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $courseId)
    {
        $validated = $request->validate([
            'comment' => 'required|string|max:250',
        ]);
    
        $course = Course::findOrFail($courseId);
        $comment = $course->comments()->create([
            'comment' => $validated['comment'],
            'student_id' => auth()->id(),
        ]);
    
        return response()->json(['message' => 'Comment added successfully', 'data' => $comment], 201);
    }
    
}
