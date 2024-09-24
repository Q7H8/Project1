@extends('layouts.app')

@section('title', 'Student Dashboard')

@section('content')
<h1>Welcome, {{ $student->name }}!</h1>

<h2>Enrolled Courses</h2>
<ul>
    @foreach($enrollments as $enrollment)
        <li>{{ $enrollment->course->course_name }} - {{ $enrollment->course->course_code }}</li>
    @endforeach
</ul>

<h2>Your Grades</h2>
<ul>
    @foreach($grades as $grade)
        <li>{{ $grade->course->course_name }}: {{ $grade->score }} / {{ $grade->max_score }}</li>
    @endforeach
</ul>

<h2>Recommended Resources</h2>
<ul>
    @foreach($recommendations as $resource)
        <li>{{ $resource['resource_type'] }}: <a href="{{ $resource['resource_url'] }}">{{ $resource['topic_tags'] }}</a> ({{ $resource['difficulty_level'] }})</li>
    @endforeach
</ul>
@endsection
