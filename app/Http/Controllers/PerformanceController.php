<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerformanceController extends Controller
{
    //


    public function updateGrade(Request $request)
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

}
