<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        $role=Auth::user()->role;
        $data['users'] = User::all();
        $data['attendance'] = Attendance::all();
        $data['teacherCount'] = User::where('role', 'Teacher')->count();
        $data['attendanceCount'] = Attendance::count();
        $data['ontimeCount'] = Attendance::where('attend_status', 'On Time')->count();
        $data['absentCount'] = Attendance::where('attend_status', 'Absent')->count();
        if($role=='Admin' || $role== 'Teacher'){
            return view('admin.index', $data);
        } else {
            return view('dashboard');
        } 
    }

    public function AdminDashboard() {
        $role=Auth::user()->role;
        $data['users'] = User::all();
        $data['attendance'] = Attendance::all();
        $data['teacherCount'] = User::where('role', 'Teacher')->count();
        $data['attendanceCount'] = Attendance::count();
        $data['ontimeCount'] = Attendance::where('attend_status', 'On Time')->count();
        $data['absentCount'] = Attendance::where('attend_status', 'Absent')->count();
        if($role=='Admin' || $role == 'Teacher') {
            // return view('admin.index', compact('teacherCount', 'attendance', 'users'));
            return view('admin.index', $data);

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
