<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Student Routes
Route::post('/students', [App\Http\Controllers\StudentController::class, 'store'])->name('students.store');
Route::get('/students/{id}/dashboard', [App\Http\Controllers\StudentController::class, 'dashboard'])->name('student.dashboard');


// Course Routes
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');

// Enrollment Routes
Route::post('/enrollments', [EnrollmentController::class, 'store'])->name('enrollments.store');
Route::get('/students/{id}/enrollments', [EnrollmentController::class, 'studentEnrollments'])->name('students.enrollments');

// Grade Routes
Route::post('/grades', [GradeController::class, 'store'])->name('grades.store');
Route::get('/students/{id}/grades', [GradeController::class, 'studentGrades'])->name('students.grades');

// Assignment Routes
Route::post('/assignments', [AssignmentController::class, 'store'])->name('assignments.store');
Route::get('/courses/{course_id}/assignments', [AssignmentController::class, 'courseAssignments'])->name('courses.assignments');

// Quiz Routes
Route::post('/quizzes', [QuizController::class, 'store'])->name('quizzes.store');
Route::get('/courses/{course_id}/quizzes', [QuizController::class, 'courseQuizzes'])->name('courses.quizzes');

// Attendance Routes
Route::post('/attendance', [AttendanceController::class, 'store'])->name('attendance.store');
Route::get('/students/{id}/attendance', [AttendanceController::class, 'studentAttendance'])->name('students.attendance');

// Activity Routes
Route::post('/activities', [ActivityController::class, 'trackActivity'])->name('activities.track');
Route::get('/students/{id}/activities', [ActivityController::class, 'studentActivities'])->name('students.activities');

Route::get('/admin/panel', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.panel');





