<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LionsfieldController extends Controller
{
    public function Home() {
        return view('frontend.index');
    }

    public function Quienes() { 
        return view('frontend.pages.quienes_somos');
    }
}
