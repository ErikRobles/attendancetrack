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

    public function Clientes() { 
        return view('frontend.pages.nuestros_clientes');
    }

    public function Metodologia() { 
        return view('frontend.pages.metodologia');
    }

    public function Certificaciones() { 
        return view('frontend.pages.certificaciones');
    }

    public function Contacto() { 
        return view('frontend.pages.contacto');
    }

    public function AdminProfile() {
        return view('frontend.pages.internals.admin');
    }

    public function AvisoPrivacidad() {
        return view('frontend.pages.internals.aviso_de_privacidad');
    }

    public function Erik() {
        return view('frontend.pages.internals.erik');
    }

    public function Ge() {
        return view('frontend.pages.internals.ge');
    }

    public function Hiab() {
        return view('frontend.pages.internals.hiab');
    }

    public function HolidayInn() {
        return view('frontend.pages.internals.holiday_inn');
    }

    public function HowBrain() {
        return view('frontend.pages.internals.how_the_brain_works');
    }

    public function Hsbc() {
        return view('frontend.pages.internals.hsbc');
    }

    public function Mergers() {
        return view('frontend.pages.internals.mergers');
    }

    public function Renault() {
        return view('frontend.pages.internals.renault');
    }

    public function Terrible() {
        return view('frontend.pages.internals.terrible');
    }

    public function Toyota() {
        return view('frontend.pages.internals.toyota');
    }

    public function WinWin() {
        return view('frontend.pages.internals.win_win');
    }

    public function Home1() {
        return view('frontend.pages.internals.home1');
    }

    public function Home2() {
        return view('frontend.pages.internals.home2');
    }

    public function Home3() {
        return view('frontend.pages.internals.home3');
    }

    public function Home4() {
        return view('frontend.pages.internals.home4');
    }

    public function Home5() {
        return view('frontend.pages.internals.home5');
    }

    public function Home6() {
        return view('frontend.pages.internals.home6');
    }

    public function Home7() {
        return view('frontend.pages.internals.home7');
    }

    public function Home8() {
        return view('frontend.pages.internals.home8');
    }

    public function Home9() {
        return view('frontend.pages.internals.home9');
    }
}
