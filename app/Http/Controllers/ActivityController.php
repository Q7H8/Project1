<?php

namespace App\Http\Controllers;

use App\Models\StudentActivity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    // Track student activity on a course resource
    public function trackActivity(Request $request)
    {
        $activity = new StudentActivity();
        $activity->student_id = $request->student_id;
        $activity->resource_id = $request->resource_id;
        $activity->time_spent = $request->time_spent;
        $activity->interactions = $request->interactions;
        $activity->save();

        return response()->json(['message' => 'Activity recorded successfully']);
    }

    // Get activity records for a student
    public function studentActivities($student_id)
    {
        $activities = StudentActivity::where('student_id', $student_id)->with('resource')->get();
        return response()->json($activities);
    }
}
