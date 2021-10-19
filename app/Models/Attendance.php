<?php

namespace App\Models;

use App\Models\Company;
use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attendance extends Model
{
    public function companyRelation() {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }

    public function student() {
        return $this->belongsTo(Student::class);
    }
}
