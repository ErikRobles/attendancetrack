<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Performance extends Model
{
    protected $fillable = [
        'student_id',
        'date',
        'last_unit_covered', 
        'last_page_viewed', 
        'exam_type',
        'exam_score',
        'comments'
    ];

    public function student() {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }
}
