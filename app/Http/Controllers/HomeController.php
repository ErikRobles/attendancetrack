<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        $role=Auth::user()->role;
        if($role=='Admin' || $role== 'Teacher'){
            return view('admin.index');
        } else {
            return view('dashboard');
        } 
    }

    public function AdminDashboard() {
        $role=Auth::user()->role;
        if($role=='Admin' || $role == 'Teacher') {
            return view('admin.index');
        } else {
          return view('dashboard');
        }
    }

    public function Logout(Request $request) {
        Auth::logout();
        $request->session()->flush();
        return Redirect()->route('login');
    }
}
