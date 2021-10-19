<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return $this->belongsTo(Company::class);
    }
}
