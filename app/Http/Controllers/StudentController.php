<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:250',
            'price' => 'required|numeric|min:0',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'details' => 'nullable|string',
            'instructor_name' => 'required|string|max:250',
        ]);
    
        $student = Student::create($validated);
    
        return response()->json([
            'message' => 'Student created successfully',
            'data' => $student,
        ], 201);
    }
    public function update(Request $request, Student $student)
{
    $validated = $request->validate([
        'name' => 'sometimes|required|string|max:250',
        'price' => 'sometimes|required|numeric|min:0',
        'start_date' => 'sometimes|required|date',
        'end_date' => 'sometimes|required|date|after_or_equal:start_date',
        'details' => 'nullable|string',
        'instructor_name' => 'sometimes|required|string|max:250',
    ]);

    $student->update($validated);

    return response()->json([
        'message' => 'Student updated successfully',
        'data' => $student,
    ]);
}
public function show(Student $student)
{
    return response()->json([
        'data' => $student,
    ]);
}
public function destroy(Student $student)
{
    $student->delete();

    return response()->json([
        'message' => 'Student deleted successfully',
    ]);
}

}
