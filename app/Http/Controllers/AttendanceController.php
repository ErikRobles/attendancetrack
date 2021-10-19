<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Level;
use App\Models\Company;
use App\Models\Student;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{

    public function AttendanceReportView() {
        $data['allData'] = Attendance::with('student.company')->orderBy('attendances.month', 'DESC')->get();
        return view('admin.pages.attendance.report_view', $data);
    }


    public function AttendanceTeacherReportAdd(){
        $data['allData'] = Student::with('getTeacherRelation', 'getLevelRelation', 'getCompanyRelation')->get();
        $data['students'] = Student::where('teacher_id', Auth::user()->id)->get();
        $data['levels'] = Level::all();
        $data['companies'] = Company::with('studentRelation')->get();
        return view('admin.pages.attendance.attendance_add', $data);
    }

    public function AttendanceTeacherReportStore(Request $request) {
        $countstudent = count($request->student_id);
       for($i=0; $i < $countstudent; $i++) { 

           $attend_status = 'attend_status'.$i;
           $attend = new Attendance();
           $attend->student_id = $request->student_id[$i];
           $attend->attend_status = $request->$attend_status;
           $attend->month = $request->month;
           $attend->day = $request->day;
           $attend->save();
       }
        $notification = array(
            'message' => 'Students Attendance Successfully Added',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
}
