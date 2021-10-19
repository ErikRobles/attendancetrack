<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function getLevelRelation() {
        return $this->hasMany(Level::class, 'company_id', 'id');
    }

    public function attendanceRelation() { 
        return $this->hasMany(Company::class, 'company_id', 'id');
    }

    public function studentRelation() {
        return $this->hasMany(Student::class, 'company_id', 'id');
    }

   
}
