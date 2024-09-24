<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    // A grade belongs to one student
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    // A grade belongs to one course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    // A grade belongs to one assignment (optional if relevant)
    public function assignment()
    {
        return $this->belongsTo(Assignment::class);
    }
}
