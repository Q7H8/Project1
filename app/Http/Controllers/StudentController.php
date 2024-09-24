<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Store a new student in the database
    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->student_id = $request->student_id;
        $student->learning_style = $request->learning_style;
        $student->save();

        return response()->json(['message' => 'Student added successfully']);
    }

    // Show a student's dashboard with courses, grades, and recommended resources
    public function dashboard($student_id)
    {
        $student = Student::find($student_id);
        $enrollments = $student->enrollments()->with('course')->get();
        $grades = $student->grades()->with('course')->get();
        $recommendations = $this->recommendResources($student_id);

        return view('student.dashboard', compact('student', 'enrollments', 'grades', 'recommendations'));
    }

    // Example logic to recommend resources based on student performance
    private function recommendResources($student_id)
    {
        $grades = Student::find($student_id)->grades;
        $recommendations = [];

        foreach ($grades as $grade) {
            if ($grade->score < 60) {
                $resources = $grade->course->resources()
                    ->where('difficulty_level', 'beginner')
                    ->get();
                $recommendations = array_merge($recommendations, $resources->toArray());
            }
        }

        return $recommendations;
    }
}
