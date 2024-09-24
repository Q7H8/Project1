<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    // A quiz belongs to one course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    // A quiz can have many grades
    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
}
