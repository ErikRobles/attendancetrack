<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public function student() {
        return $this->belongsTo(User::class, 'level_id', 'id');
    }
}
