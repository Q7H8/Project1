<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    // One student can have many enrollments (many-to-many relationship with courses)
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    // One student can have many grades
    public function grades()
    {
        return $this->hasMany(Grade::class);
    }

    // One student can have many attendance records
    public function attendanceRecords()
    {
        return $this->hasMany(AttendanceRecord::class);
    }

    // One student can have many activities (engagement with course materials)
    public function activities()
    {
        return $this->hasMany(StudentActivity::class);
    }
}
