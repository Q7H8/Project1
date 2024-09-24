<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    // An assignment belongs to one course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    // An assignment can have many grades
    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
}
