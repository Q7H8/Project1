<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentActivity extends Model
{
    use HasFactory;

    // A student activity belongs to one student
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    // A student activity belongs to one course resource
    public function resource()
    {
        return $this->belongsTo(CourseResource::class);
    }
}
