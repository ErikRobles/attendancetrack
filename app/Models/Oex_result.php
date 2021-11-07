<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oex_result extends Model
{
    protected $table = "oex_results";
    protected $primaryKey = "id";
    protected $fillable = [
        'exam_id',
        'question_id',
        'yes_ans',
        'no_ans',
        'result_json'
    ];

    public function userRelation() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function examMasterRelation() {
        return $this->belongsTo(Oex_exam_master::class, 'exam_id', 'id');
    }
}
