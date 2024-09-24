@extends('layouts.app')

@section('title', 'Quizzes')

@section('content')
<h1>Quizzes for {{ $course->course_name }}</h1>

<ul>
    @foreach($quizzes as $quiz)
        <li>{{ $quiz->quiz_name }} (Max Score: {{ $quiz->max_score }})</li>
    @endforeach
</ul>

<h2>Add a New Quiz</h2>
<form action="{{ route('quizzes.store') }}" method="POST">
    @csrf
    <input type="hidden" name="course_id" value="{{ $course->id }}">
    <div class="mb-3">
        <label for="quiz_name" class="form-label">Quiz Name</label>
        <input type="text" name="quiz_name" id="quiz_name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="max_score" class="form-label">Max Score</label>
        <input type="number" name="max_score" id="max_score" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Add Quiz</button>
</form>
@endsection
