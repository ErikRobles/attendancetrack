<?php

namespace App\Models;

use App\Models\Oex_exam_master;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    public function getTeacherRelation() {
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }

    public function getLevelRelation() {
        return $this->belongsTo(Level::class, 'level_id', 'id');
    }

    public function getCompanyRelation() {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }

    public function company() {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function oexExams() {
        return $this->belongsTo(Oex_exam_master::class, 'exam', 'id');
    }

    public function resultRelation() {
        return $this->hasMany(Oex_result::class, 'user_id', 'id');
    }

       
}
