@extends('layouts.app')

@section('title', 'Manage Courses')

@section('content')
<h1>All Courses</h1>
<ul>
    @foreach($courses as $course)
        <li>{{ $course->course_name }} - {{ $course->course_code }}</li>
    @endforeach
</ul>

<h2>Add a New Course</h2>
<form action="{{ route('courses.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="course_name" class="form-label">Course Name</label>
        <input type="text" name="course_name" id="course_name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="course_code" class="form-label">Course Code</label>
        <input type="text" name="course_code" id="course_code" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Add Course</button>
</form>
@endsection
