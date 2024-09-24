<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Add a new course
    public function store(Request $request)
    {
        $course = new Course();
        $course->course_name = $request->course_name;
        $course->course_code = $request->course_code;
        $course->save();

        return response()->json(['message' => 'Course added successfully']);
    }

    // List all courses
    public function index()
    {
        $courses = Course::all();
        return view('admin.courses', compact('courses'));
    }
}
