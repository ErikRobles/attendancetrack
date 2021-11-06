<?php



namespace App\Http\Controllers;



use Session;

use App\Models\User;

use App\Models\Oex_result;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Oex_exam_question_master;




class StudentOperationController extends Controller

{

    public function exam(Request $request) {
        $data['student_info'] = Auth::user()->where('users.role', 'Student')->where('users.id', Auth::user()->id)->with('oexExams')->get()->first();
        $data['exam_join'] = Oex_result::where('exam_id', $data['student_info']->exam)->get()->first();
        return view('student.exam', $data);
    }

    public function take_exam($id) {
        $data['all_question'] = Oex_exam_question_master::where('exam_id', $id)->get()->toArray();
        return view('student.take_exam', $data);

    }

    public function submit_question(Request $request) {
        $yes_ans = 0;
        $no_ans = 0;
        $data = $request->all();
        $result = array();
        for($i=1;$i<=$request->index;$i++) {
            if(isset($data['question'.$i])) {
                $question = Oex_exam_question_master::where('id', $data['question'.$i])->get()->first();
                if($question->ans == $data['ans'.$i]) {
                    $result[$data['question'.$i]] = 'YES';
                    $yes_ans++;
                } else {
                    $result[$data['question'.$i]] = 'NO';
                    $no_ans++;
                }
            }
        }
        $res = new Oex_result();
        $res->exam_id = $request->exam_id;
        $res->user_id = Auth::user()->id;
        $res->yes_ans = $yes_ans;
        $res->no_ans = $no_ans;
        $res->result_json = json_encode($result);
        $res->result = round($res->yes_ans / ($res->yes_ans + $res->no_ans) * 100, 1);
        // dd($res->result);
        $res->save();
        return redirect(url('student/show_result/'. $res->id));

    }



    public function show_result($id) {

        $data['result_info'] = Oex_result::where('id', $id)->get()->first();

        $data['student_info'] = User::select(['users.*', 'oex_exam_masters.title', 'oex_exam_masters.exam_date'])->join('oex_exam_masters', 'users.exam', '=', 'oex_exam_masters.id')->where('users.id', Auth::user()->id)->get()->first();

        return view('student.show_result', $data);

    }

}

