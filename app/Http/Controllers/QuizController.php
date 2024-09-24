<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    // Add a new quiz
    public function store(Request $request)
    {
        $quiz = new Quiz();
        $quiz->course_id = $request->course_id;
        $quiz->quiz_name = $request->quiz_name;
        $quiz->max_score = $request->max_score;
        $quiz->attempts = $request->attempts;
        $quiz->save();

        return response()->json(['message' => 'Quiz created successfully']);
    }

    // Get all quizzes for a course
    public function courseQuizzes($course_id)
    {
        $quizzes = Quiz::where('course_id', $course_id)->get();
        return response()->json($quizzes);
    }
}
