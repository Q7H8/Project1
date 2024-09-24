<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseResource extends Model
{
    use HasFactory;

    // A course resource belongs to one course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}