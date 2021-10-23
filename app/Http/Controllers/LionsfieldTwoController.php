<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LionsfieldTwoController extends Controller
{
    public function Inicio() {
        return view('frontend_inicio.index');
    }

    public function AboutUs() {
        return view('frontend_inicio.pages.about_us');
    }

    public function ContactUs() {
        return view('frontend_inicio.pages.contact_us');
    }

    public function Metodo() {
        return view('frontend_inicio.pages.metodo');
    }

    public function Admin2() {
        return view('frontend_inicio.pages.internals.admin_2');
    }

    public function AvisoDePrivacidad2() {
        return view('frontend_inicio.pages.internals.aviso_de_privacidad_2');
    }

    public function Erik2() {
        return view('frontend_inicio.pages.internals.erik_2');
    }

    public function Ge2() {
        return view('frontend_inicio.pages.internals.ge_2');
    }

    public function Hiab2() {
        return view('frontend_inicio.pages.internals.hiab_2');
    }

    public function HolidayInn2() {
        return view('frontend_inicio.pages.internals.holiday_inn_2');
    }

    public function HowBrain2() {
        return view('frontend_inicio.pages.internals.how_the_brain_works_2');
    }

    public function Hsbc2() {
        return view('frontend_inicio.pages.internals.hsbc_2');
    }

    public function Renault2() {
        return view('frontend_inicio.pages.internals.renault_2');
    }

    public function Terrible2() {
        return view('frontend_inicio.pages.internals.terrible_2');
    }

    public function Toyota2() {
        return view('frontend_inicio.pages.internals.toyota_2');
    }

    public function WinWin2() {
        return view('frontend_inicio.pages.internals.win_win_2');
    }

    public function ClasesGrupales() {
        return view('frontend_inicio.pages.internals.clases-grupales');
    }

    public function ClasesIndividuales() {
        return view('frontend_inicio.pages.internals.clases-individuales');
    }

    public function ClasePremier() {
        return view('frontend_inicio.pages.internals.clase-premier');
    }

    public function PricePlan() {
        return Redirect()->route('inicio', ['#price-plan']);
    }

    public function PaymentCancelTwo() {
        return view('frontend_inicio.pages.internals.payment-cancel-two');
    }

    public function SuccessConfirmationTwo(){
        return view('frontend_inicio.pages.internals.success-confirmation-two');
    }
}
