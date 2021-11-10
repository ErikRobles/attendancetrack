<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'contact1',
        'contact2',
        'phone1',
        'phone2'
    ];

    // public function getLevelRelation() {
    //     return $this->hasMany(Level::class, 'company_id', 'id');
    // }

    // public function attendanceRelation() { 
    //     return $this->hasMany(Company::class, 'company_id', 'id');
    // }

     public function studentRelation() {
         return $this->hasMany(User::class, 'company_id', 'id');
     }

       
}
