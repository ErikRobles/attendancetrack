<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Level;
use App\Models\Company;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function StudentView() {
        $data['allData'] = Student::with('getTeacherRelation', 'getLevelRelation', 'getCompanyRelation')->get();
        return view('admin.pages.students.students_view', $data);
    }

    public function StudentAdd() {
        $teacher['allData'] = User::where('role', 'Teacher')->get();
        $teacher['levels'] = Level::all();
        $teacher['companies'] = Company::all();
        return view('admin.pages.students.students_add', $teacher);
    }

    public function StudentStore(Request $request) {
        $editData = new Student();
        $editData->name = $request->name;
        $editData->teacher_id = $request->teacher_id;
        $editData->level_id = $request->level_id;
        $editData->company_id = $request->company_id;
        $editData->save();
        $notification = array(
            'message' => 'Student Successfully Added',
            'alert-type' => 'success'
        );
        return Redirect()->route('admin.pages.students.view')->with($notification);
    }

    public function StudentEdit($id) {
        $data['allData'] = User::where('role', 'Teacher')->get();
        $data['levels'] = Level::all();
        $data['companies'] = Company::all();
        $data['students'] = Student::find($id);
        return view('admin.pages.students.students_edit', $data);
    }

    public function StudentUpdate(Request $request, $id) {
        $edit = Student::find($id);
        $edit->name = $request->name;
        $edit->teacher_id = $request->teacher_id;
        $edit->level_id = $request->level_id;
        $edit->company_id = $request->company_id;
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
