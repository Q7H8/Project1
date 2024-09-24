<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    // Enroll a student in a course
    public function store(Request $request)
    {
        $enrollment = new Enrollment();
        $enrollment->student_id = $request->student_id;
        $enrollment->course_id = $request->course_id;
        $enrollment->enrollment_date = now();
        $enrollment->save();

        return response()->json(['message' => 'Student enrolled in course']);
    }

    // Get all enrollments for a student
    public function studentEnrollments($student_id)
    {
        $enrollments = Enrollment::where('student_id', $student_id)->with('course')->get();
        return response()->json($enrollments);
    }
}
