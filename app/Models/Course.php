<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // One course can have many students enrolled (many-to-many relationship with students)
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    // One course can have many resources
    public function resources()
    {
        return $this->hasMany(CourseResource::class);
    }

    // One course can have many grades
    public function grades()
    {
        return $this->hasMany(Grade::class);
    }

    // One course can have many assignments
    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }

    // One course can have many quizzes
    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

    // One course can have many attendance records
    public function attendanceRecords()
    {
        return $this->hasMany(AttendanceRecord::class);
    }
}
