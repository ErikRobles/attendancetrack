<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zoom extends Model
{
    use HasFactory;
    // create fillable property
    protected $fillable = ['user_name', 'user_email', 'join_time', 'leave_time', 'duration'];
}
