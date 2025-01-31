<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:250',
            'price' => 'required|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'details' => 'nullable|string',
            'instructor_name' => 'required|string|max:250',
        ]);
    
        $course = Course::create($validated);
    
        return response()->json(['message' => 'Course created successfully', 'data' => $course], 201);
    }
    public function update(Request $request, Course $course)
{
    $this->authorize('update', $course);

    // Logic for updating the course
}

}
