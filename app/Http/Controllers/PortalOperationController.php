<?php

namespace App\Http\Controllers;

use Session;
use Validator;
use App\Models\Oex_portal;
use App\Models\Oex_students;
use App\Models\Oex_exam_master;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PortalOperationController extends Controller
{

    public function dashboard()
    {

        if (!Session::get('portal_session')) {
            return redirect('login');
        }

        $data['portal_exams'] = Oex_exam_master::select(['oex_exam_masters.*', 'oex_categories.name as cat_name'])->join('oex_categories', 'oex_exam_masters.category', '=', 'oex_categories.id')->where('oex_exam_masters.status', '1')->get()->toArray();
        return view('portal.dashboard', $data);
    }

    public function exam_form($id)
    {
        $data['id'] = $id;
        $exam_info = Oex_exam_master::where('id', $id)->get()->first();
        $data['exam_title'] = $exam_info->title;
        $data['exam_date'] = $exam_info->exam_date;
        return view('portal.exam_form', $data);
    }

    public function exam_form_sub(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'sometimes|min:8',
        ]);
        if ($validator->passes()) {
            $student = new Oex_students();
            $student->name = $request->name;
            $student->email = $request->email;
            $student->mobile_no = trim($request->mobile_no, " ");
            $student->exam = $request->id;
            $student->password = Hash::make($request->password);
            $student->save();
            return redirect('portal/print/' . $student->id)->with('success', 'Record Successfully added.');
        } else {
            return redirect('portal/login')->with('error', $validator->errors()->all());
        }
    }

    function print($id) {
        $student_info = User::where('id', $id)->get()->first();
        $exam_info = Oex_exam_master::where('id', $student_info->exam)->get()->first();
        $exam_title = $exam_info->title;
        $exam_date = $exam_info->exam_date;
        // dd($exam_title);
        return view('portal.print', ['student_info' => $student_info, 'exam_title' => $exam_title, 'exam_date' => $exam_date]);
    }

    public function update_form()
    {
        $data['exams'] = Oex_exam_master::where('status', '1')->get()->toArray();
        return view('portal.update_form', $data);
    }

    public function student_exam_info()
    {
        $data['exam_info'] = Oex_exam_master::where('id', $_GET['exam'])->get()->first();
        $data['student_info'] = User::where('email', $_GET['email'])->where('mobile_no', $_GET['mobile_no'])->where('exam', $_GET['exam'])->get()->toArray();
        return view('portal.student_exam_info', $data);
    } 

    public function student_exam_info_edit(Request $request)
    {
        $student = User::where('id', $request->id)->get()->first();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->mobile_no = trim($request->mobile_no, " ");
        if ($request->password) {
            $student->password = Hash::make($request->password);
        }
        $student->update();
        return redirect('portal/update_form')->with('success', 'Student Exam Information Successfully Updated!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        return Redirect()->route('login');
    }
    
    public function create() {
        return view('/portal/student_progress_form');
    }

    public function prog_form_sub(Request $request) {
        $validator = Validator::make($request->all(), [
            'teacherName' => 'required',
            'studentName' => 'required'
        ]); 
        if ($validator->passes()) {
        $user = $request->user();
        dd($user);
        }
        // Create form submission
        
        // $sprog = new StudentProg;
        // $sprog->teacherName = $request->input('teacherName');
    }
}
