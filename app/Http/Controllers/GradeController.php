<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    // Update a student's grade
    public function store(Request $request)
    {
        $grade = new Grade();
        $grade->student_id = $request->student_id;
        $grade->course_id = $request->course_id;
        $grade->assignment_id = $request->assignment_id;
        $grade->score = $request->score;
        $grade->max_score = $request->max_score;
        $grade->save();

        return response()->json(['message' => 'Grade updated successfully']);
    }

    // Get a student's grades
    public function studentGrades($student_id)
    {
        $grades = Grade::where('student_id', $student_id)->with('course')->get();
        return response()->json($grades);
    }
}
