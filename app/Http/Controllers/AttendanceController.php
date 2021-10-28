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
        $data['allData'] = Attendance::with('student.company')->orderBy('attendances.date', 'DESC')->get();
        $data['teachers'] = Attendance::with('attendance')->get();
        return view('admin.pages.attendance.report_view', $data);
    }

    public function AttendanceTeacherReportAdd() {
        // $data['allData'] = Student::with('getTeacherRelation', 'getLevelRelation', 'getCompanyRelation')->get();
        $data['allData'] = Student::with('user')->get();
        $data['students'] = Student::where('teacher_id', Auth::user()->id)->get();
        $data['levels'] = Level::all();
        $data['companies'] = Company::with('studentRelation')->get();
        return view('admin.pages.attendance.attendance_add', $data);
    }

    public function AttendanceTeacherReportStore(Request $request) {
        $countstudent = count($request->student_id);
        if($countstudent !=NULL) {
            for($i=0; $i < $countstudent; $i++) { 
                $attend = new Attendance();
                $attend->teacher_id = Auth::user()->id;
                $attend->date = $request->date;
                $attend->student_id = $request->student_id[$i];
                $attend->attend_status = $request->attend_status[$i];
                $attend->save();
            }
        } 
        $notification = array(
            'message' => 'Students Attendance Successfully Submitted. Feel free to add another.',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function AttendanceTeacherReportEdit($id) {
        $data['allData'] = Attendance::with('student.company')->orderBy('attendances.date', 'DESC')->find($id);
        $data['teachers'] = Attendance::with('attendance')->find($id);
        return view('admin.pages.attendance.attendance_edit', $data);
    }

    public function AttendanceTeacherReportUpdate(Request $request, $id) { 
                $attend =  Attendance::find($id);
                $attend->teacher_id = $request->teacher_id;
                $attend->date = $request->date;
                $attend->student_id = $request->student_id;
                $attend->attend_status = $request->attend_status;
                $attend->save();
          
        $notification = array(
            'message' => 'Students Attendance Successfully Updated.',
            'alert-type' => 'success'
        );
        return Redirect()->route('admin.pages.attendance.report_view')->with($notification);
    }

    public function AttendanceTeacherReportDelete($id) {
        $attendance = Attendance::find($id);
        $attendance->delete();
        $notification = array(
           'message' => 'Attendance Successfully Deleted',
           'alert-type' => 'success'
       );
       return Redirect()->route('admin.pages.attendance.report_view')->with($notification);
    }
}
