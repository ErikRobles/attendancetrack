<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oex_exam_master extends Model
{
    use HasFactory;
    protected $table = "oex_exam_masters";
    protected $primaryKey = "id";
    protected $fillable = [
        'title',
        'category',
        'exam_date',
        'status'
    ];

    public function studentRelation() {
        return $this->belongsTo(Student::class, 'id', 'exam');
    }

    public function examRelation() {
        return $this->belongsTo(User::class, 'id', 'exam');
    }
}
