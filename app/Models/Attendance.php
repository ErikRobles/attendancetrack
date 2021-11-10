<?php

namespace App\Models;

use App\Models\Company;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attendance extends Model
{
    public function companyRelation() {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }

    public function student() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function attendance() { 
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }

    public static function getAttendances() {
        $records = DB::table('attendances')->select('id', 'date', 'attend_status', 'teacher_id', 'user_id')->get()->toArray();

        return $records;
    }

    public function getTeacherRelation() {
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }

    public function getCompanyRelation() {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }

}
