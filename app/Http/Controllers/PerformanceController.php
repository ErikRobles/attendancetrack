<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Level;
use App\Models\Company;
use App\Models\Student;
use App\Models\Performance;
use Illuminate\Http\Request;
use App\Models\Oex_exam_master;
use Illuminate\Support\Facades\Auth;

class PerformanceController extends Controller
{
    public function PerformanceView() {
        $allData['performances'] = Performance::with('student.getLevelRelation')->with('student.getCompanyRelation')->get();
        
        return view('admin.performance.performance_view', $allData);
    }
    public function PerformanceAdd() {
        $data['students'] = User::where('teacher_id', Auth::user()->id)->get();
        // get id of level where level_id matches with user_id using model relationship
        $data['levels'] = Level::with('student')->where('id',  'level_id')->get();
        // get list of all exam titles to show on permormance_add view
        $data['exam_titles'] = Oex_exam_master::get()->all();
       
        return view('admin.performance.performance_add', $data);
    }

    public function PerformanceStore(Request $request) {
        $countstudent = count($request->student_id);
        if($countstudent !=NULL) {
            for($i=0; $i < $countstudent; $i++) { 
                $perform = new Performance();
                $perform->teacher_id = Auth::user()->id;
                $perform->date = $request->date;
                $perform->last_unit_covered = $request->last_unit_covered[$i];
                $perform->student_id = $request->student_id[$i];
                $perform->last_page_viewed = $request->last_page_viewed[$i];
                $perform->student_progress = $request->student_progress[$i];
                $perform->exam_type = $request->exam_type[$i];
                $perform->exam_score = $request->exam_score[$i];
                $perform->comments = $request->comments[$i];
                $perform->save();
            }
        } 
        $notification = array(
            'message' => 'Students Performance Successfully Submitted.',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function PerformanceEdit($id) {
        $editData['allData'] = Performance::with('student.getLevelRelation')->with('student.getCompanyRelation')->find($id);
        return view('admin.performance.performance_edit', $editData);
    }

    public function PerformanceUpdate(Request $request, $id) {
        $data = Performance::find($id);
        $data->date = $request->date;
        $data->student_id = $request->student_id;
        $data->last_unit_covered = $request->last_unit_covered;
        $data->last_page_viewed = $request->last_page_viewed;
        $data->exam_type = $request->exam_type;
        $data->exam_score = $request->exam_score;
        $data->comments = $request->comments;
        $data->save();
        $notification = array(
            'message' => 'Performance Successfully Updated',
            'alert-type' => 'success'
        );
        return Redirect()->route('performance')->with($notification);
    }

    public function PerformanceDelete($id) {
        $performance = Performance::find($id);
        $performance->delete();
        $notification = array(
            'message' => 'Performance Successfully Deleted',
            'alert-type' => 'success'
        );
        return Redirect()->route('performance')->with($notification);
    }
}
