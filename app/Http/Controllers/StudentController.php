<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Level;
use App\Models\Company;
use App\Models\Student;
use App\Models\Oex_result;
use Illuminate\Http\Request;
use App\Models\Oex_exam_master;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class StudentController extends Controller
{
    public function StudentView() {
        $data['exams'] = Oex_exam_master::where('status', '1')->get()->toArray();
        // $columns = Oex_exam_master::select('oex_exam_masters.title as exam_name')->get();
        // dd($columns);
        $data['examData'] = Oex_exam_master::where('oex_exam_masters.id', 'students.exam')->get();
       
        $data['allData'] = User::with('getTeacherRelation', 'getLevelRelation', 'getCompanyRelation', 'oexExams')->where('role', 'Student')->with('resultRelation')->orderBy('company_id', 'DESC')->get();
        // dd($data['allData']);
        $data['student_list'] = User::select('id','name','email', 'role')->get();   

        return view('admin.pages.students.students_view', $data);
    } 

    public function student_status($id)
    {
        $student = User::where('id', $id)->get()->first();
        if ($student->status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }
        $student1 = User::where('id', $id)->get()->first();
        $student1->status = $status;
        $student1->update();
    }

    public function StudentAdd(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'password' => [
                'required',
               Password::min(8)->letters()->numbers()->mixedCase()->symbols(),
            ],
        ]);
        $teacher['exams'] = Oex_exam_master::where('status', '1')->get();
        $teacher['allData'] = User::where('role', 'Teacher')->get();
        $teacher['levels'] = Level::all();
        $teacher['companies'] = Company::all();
        return view('admin.pages.students.students_add', $teacher);
    }

    public function StudentStore(Request $request) {
        $request->validate([
            'name' => 'required',
            'password' => [
                'required',
               Password::min(8)->letters()->numbers()->mixedCase()->symbols(),
            ],
        ]);
        $editData = new User();
        $editData->name = $request->name;
        $editData->teacher_id = $request->teacher_id;
        $editData->level_id = $request->level_id;
        $editData->company_id = $request->company_id;
        $editData->exam = $request->exam;
        $editData->password = Hash::make($request->password);
        $editData->email = $request->email;
        $editData->role_as = "Student";
        $editData->save();
        $notification = array(
            'message' => 'Student Successfully Added',
            'alert-type' => 'success'
        );
        return Redirect()->route('admin.pages.students.students_view')->with($notification);
    }

    public function StudentEdit($id) {
        $data['allData'] = User::where('role', 'Teacher')->get();
        $data['levels'] = Level::all();
        $data['companies'] = Company::all();
        $data['students'] = User::find($id)->where('role', 'Student');
        return view('admin.pages.students.students_edit', $data);
    }

    public function StudentUpdate(Request $request, $id) {
        $edit = User::find($id);
        $edit->name = $request->name;
        $edit->teacher_id = $request->teacher_id;
        $edit->level_id = $request->level_id;
        $edit->company_id = $request->company_id;
        $edit->exam = $request->exam;
        $edit->password = Hash::make($request->password);
        $edit->role_as = "Student";
        $edit->save();
        $notification = array(
            'message' => 'Student Successfully Updated',
            'alert-type' => 'success'
        );
        return Redirect()->route('admin.pages.students.view')->with($notification);
    }

    public function StudentDelete($id) { 
        $student = Student::find($id);
        $student->delete();
        $notification = array(
            'message' => 'Student Successfully Deleted',
            'alert-type' => 'success'
        );
        return Redirect()->route('admin.pages.students.view')->with($notification);
    }
}
