<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'empresa', 
        'mail', 
        'tel1', 
        'tel3', 
        'tel2', 
        'mensaje',
    ];
}
