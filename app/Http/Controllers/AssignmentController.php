<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    // Add a new assignment
    public function store(Request $request)
    {
        $assignment = new Assignment();
        $assignment->course_id = $request->course_id;
        $assignment->assignment_name = $request->assignment_name;
        $assignment->due_date = $request->due_date;
        $assignment->status = $request->status;
        $assignment->save();

        return response()->json(['message' => 'Assignment created successfully']);
    }

    // Get all assignments for a course
    public function courseAssignments($course_id)
    {
        $assignments = Assignment::where('course_id', $course_id)->get();
        return response()->json($assignments);
    }
}
