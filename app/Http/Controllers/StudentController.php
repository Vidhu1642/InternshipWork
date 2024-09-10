<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        return Student::all(); // Return all students
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students',
            'mobile_number' => 'required|string',
            'enrollment_number' => 'required|string|unique:students',
            'parent_name' => 'required|string',
            'parent_email' => 'required|email',
            'parent_phone' => 'required|string',
        ]);

        $student = Student::create($validated);

        return response()->json($student, 201); // Return created student
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);
        return response()->json($student); // Return specific student
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'string|max:255',
            'email' => 'email|unique:students,email,' . $id,
            'mobile_number' => 'string',
            'enrollment_number' => 'string|unique:students,enrollment_number,' . $id,
            'parent_name' => 'string',
            'parent_email' => 'email',
            'parent_phone' => 'string',
        ]);

        $student->update($validated);

        return response()->json($student); // Return updated student
    }

    public function destroy($id)
    {
        Student::destroy($id);
        return response()->json(null, 204); // Return no content status
    }
}
