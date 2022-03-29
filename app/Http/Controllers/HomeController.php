<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Attendance;
use Illuminate\Http\Request;
use App\Models\Oex_exam_master;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
        $data['cancelledOffTimeCount'] = Attendance::where('attend_status', 'Cancelled Off Time')->count();
        $data['cancelledOnTimeCount'] = Attendance::where('attend_status', 'Cancelled On Time')->count();
        $data['portal_exams'] = Oex_exam_master::select(['oex_exam_masters.*', 'oex_categories.name as cat_name'])->join('oex_categories', 'oex_exam_masters.category', '=', 'oex_categories.id')->where('oex_exam_masters.status', '1')->get()->toArray();
            return view('admin.index', $data);
    }

    public function AdminDashboard() {
        $role=Auth::user()->role;
        $data['users'] = User::all();
        $data['attendance'] = Attendance::all();
        $data['teacherCount'] = User::where('role', 'Teacher')->count();
        $data['attendanceCount'] = Attendance::count();
        $data['ontimeCount'] = Attendance::where('attend_status', 'On Time')->count();
        $data['absentCount'] = Attendance::where('attend_status', 'Absent')->count();
        $data['cancelledOffTimeCount'] = Attendance::where('attend_status', 'Cancelled Off Time')->count();
        $data['cancelledOnTimeCount'] = Attendance::where('attend_status', 'Cancelled On Time')->count();
        $data['portal_exams'] = Oex_exam_master::select(['oex_exam_masters.*', 'oex_categories.name as cat_name'])->join('oex_categories', 'oex_exam_masters.category', '=', 'oex_categories.id')->where('oex_exam_masters.status', '1')->get()->toArray();
            return view('admin.index', $data);   
    }


    public function Logout(Request $request) {
        Auth::logout();
        $request->session()->flush();
        return Redirect()->route('login');
    }
}
