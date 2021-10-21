<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LionsfieldTwoController extends Controller
{
    public function Inicio() {
        return view('frontend_inicio.index');
    }
}
