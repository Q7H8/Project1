@extends('layouts.app')

@section('title', 'Assignments')

@section('content')
<h1>Assignments for {{ $course->course_name }}</h1>

<ul>
    @foreach($assignments as $assignment)
        <li>{{ $assignment->assignment_name }} (Due: {{ $assignment->due_date }})</li>
    @endforeach
</ul>

<h2>Add a New Assignment</h2>
<form action="{{ route('assignments.store') }}" method="POST">
    @csrf
    <input type="hidden" name="course_id" value="{{ $course->id }}">
    <div class="mb-3">
        <label for="assignment_name" class="form-label">Assignment Name</label>
        <input type="text" name="assignment_name" id="assignment_name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="due_date" class="form-label">Due Date</label>
        <input type="date" name="due_date" id="due_date" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Add Assignment</button>
</form>
@endsection
