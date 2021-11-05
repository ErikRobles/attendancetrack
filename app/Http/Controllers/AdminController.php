<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\DB;
use Session;
use Validator;
use App\Models\User;
use App\Models\Student;
use App\model\Oex_result;
use App\Models\Oex_portal;
use App\Models\Oex_category;
use App\Models\Oex_students;
use Illuminate\Http\Request;
use App\Models\Oex_exam_master;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Oex_exam_question_master;

class AdminController extends Controller
{
    // public function index()
    // {
    //     $data['portal'] = Oex_portal::get()->toArray();

    //     $data['exams'] = Oex_exam_master::where('status', '1')->get()->toArray();
        // $data['result_info'] = Oex_result::select('oex_results.*', 'oex_results.result as result')
        // ->get()->first();
        // $data['students'] = Oex_students::select(['oex_students.*', 'oex_exam_masters.title as exam_name'])
        // ->join('oex_results', 'oex_students.id', '=', 'oex_results.user_id')
        // ->join('oex_exam_masters', 'oex_results.exam_id', '=', 'oex_exam_masters.id')
        // ->get()
        // ->toArray();

    //     $data['students'] = Oex_students::select('name','email','mobile_no','oex_exam_masters.title as exam_name','result','oex_exam_masters.status as status')
	// 	->from('oex_students')
	// 	->join('oex_results', function($join) {
	// 		$join->on('oex_students.id', '=', 'oex_results.user_id');
	// 		})
	// 	->join('oex_exam_masters', function($join) {
	// 		$join->on('oex_exam_masters.id', '=', 'oex_results.exam_id');
	// 		})
	// 	->get();

    //     $data['category'] = Oex_category::where('status', '1')->get()->toArray();
    //     $data['exams'] = Oex_exam_master::select(['oex_exam_masters.*', 'oex_categories.name as cat_name'])->join('oex_categories', 'oex_exam_masters.category', '=', 'oex_categories.id')->get()->toArray();

    //     $data['student_list'] = Oex_students::select('name','email','mobile_no')->get()->toArray();
    //     return view('admin.dashboard', $data);
    // }

    // public function show_users() {
    //     $data['users'] = User::get()->toArray();
    //     return view('admin.users', $data);
    // }

    // public function add_new_user(Request $request) {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required',
    //         'email' => 'required',
    //         'password' => 'sometimes|min:8',
    //     ]);
    //     if ($validator->passes()) {
    //         $user = new User();
    //         $user->name = $request->name;
    //         $user->email = $request->email;
    //         $user->password = Hash::make($request->password);
    //         $user->role_as = 'admin';
    //         $user->save();
    //         return redirect('/admin/users')->with('success', 'User Successfully Added!');
    //     } else {
    //         return redirect('/admin/user')->with('error', 'Something went wrong!');
    //     }
    // }

    // public function edit_user($id) {
    //     $user = User::where('id', $id)->get()->first();
    //     return view('admin.edit_user', ['user' => $user]);
    // }

    // public function edit_user_sub(Request $request) {

    //     $user = User::where('id', $request->id)->get()->first();
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->save();
    //     return redirect('/admin/users')->with('success', 'User Data Successfully Updated!');
    // }

    // public function delete_user($id) {
    //     $user = User::where('id', $id)->get()->first();
    //     $user->delete();
    //     return redirect('admin/users')->with('success', 'User Successfully Deleted!');
    // }

    public function exam_category() {
        $data['category'] = Oex_category::get()->toArray();

        return view('exams.admin.exam_category', $data);
    }

    public function add_new_category(Request $request)
    {
        $validator = Validator::make($request->all(), ['name' => 'required']);
        if ($validator->passes()) {
            $cat = new Oex_category();
            $cat->name = $request->name;
            $cat->status = 1;
            $cat->save();
            $notification = array(
                'message' => 'Category Successfully Added',
                'alert-type' => 'success'
            );
            return redirect('exams/admin/exam_category')->with($notification);
            // $arr = array('status' => 'true', 'message' => 'success', 'reload' => url('/admin/exam_category'));
        } else {
            $notification = array(
                'message' => 'Something went wrong. Please try again',
                'alert-type' => 'error'
            );
            // $arr = array('status' => 'false', 'message' => $validator->errors()->all());
            return redirect('exams/admin/exam_category')->with($notification);
        }
        // echo json_encode($arr);
    }

    public function category_status($id)
    {
        $cat = Oex_category::where('id', $id)->get()->first();
        if ($cat->status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }
        $cat1 = Oex_category::where('id', $id)->get()->first();
        $cat1->status = $status;
        $cat1->update();
       
    }

    public function edit_category($id)
    {
        $category = Oex_category::where('id', $id)->get()->first();
        return view('exams.admin.edit_category', ['category' => $category]);
    }

    public function update_category(Request $request, $id)
    {

        $category = Oex_category::where('id', $request->id)->get()->first();
        $category->name = $request->name;
        $category->update();
        $notification = array(
            'message' => 'Category Successfully Updated',
            'alert-type' => 'success'
        );
        return redirect('exams/admin/exam_category')->with($notification);
    }

    public function delete_category($id)
    {
        $cat = Oex_category::where('id', $id)->get()->first();
        $cat->delete();
        $notification = array(
            'message' => 'Category Successfully Deleted',
            'alert-type' => 'success'
        );
        return redirect('exams/admin/exam_category')->with($notification);
    }


    public function manage_exam()
    {
        $data['category'] = Oex_category::where('status', '1')->get()->toArray();
        $data['exams'] = Oex_exam_master::select(['oex_exam_masters.*', 'oex_categories.name as cat_name'])->join('oex_categories', 'oex_exam_masters.category', '=', 'oex_categories.id')->get()->toArray();
        
        return view('exams.admin.manage_exam', $data);
    }

    public function add_new_exam(Request $request)
    {
        $validator = Validator::make($request->all(), ['title' => 'required', 'category' => 'required']);
        if ($validator->passes()) {
            $exam = new Oex_exam_master();
            $exam->title = $request->title;
            $exam->exam_date = $request->exam_date;
            $exam->category = $request->category;
            $exam->status = 1;
            $exam->save();
            $notification = array(
                'message' => 'Category Successfully Updated',
                'alert-type' => 'success'
            );
            return redirect('exams/admin/manage_exam')->with($notification);

        } else {
            $notification = array(
                'message' => 'Something went wrong. Please try again.',
                'alert-type' => 'success'
            );
            return redirect('exams/admin/manage_exam')->with($notification);
        }
    }

    public function exam_status($id)
    {
        $exam = Oex_exam_master::where('id', $id)->get()->first();
        if ($exam->status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }
        $exam1 = Oex_exam_master::where('id', $id)->get()->first();
        $exam1->status = $status;
        $exam1->update();
    }

    public function delete_exam($id)
    {
        $exam1 = Oex_exam_master::where('id', $id)->get()->first();
        $exam1->delete();
        $notification = array(
            'message' => 'Exam Successfully Deleted',
            'alert-type' => 'success'
        );
        return redirect('exams/admin/manage_exam')->with($notification);
    }

    public function edit_exam($id)
    {
        $data['exam'] = Oex_exam_master::where('id', $id)->get()->first();
        $data['category'] = Oex_category::where('status', '1')->get()->toArray();

        return view('exams.admin.edit_exam', $data);
    }

    public function edit_exam_sub(Request $request)
    {
        $exam = Oex_exam_master::where('id', $request->id)->get()->first();
        $exam->title = $request->title;
        $exam->category = $request->exam_category;
        $exam->exam_date = $request->exam_date;
        $exam->save();
        $notification = array(
            'message' => 'Exam Successfully Updated',
            'alert-type' => 'success'
        );
        return redirect('exams/admin/manage_exam')->with($notification);
    }


    public function student_exam_result() {
        $data['result_info'] = Oex_result::where('id', $id)->get()->first();

        return view('exams/admin/student_exam_result', $data);
    }

    public function manage_portal()
    {
        $data['portal'] = Oex_portal::get()->toArray();
        return view('exams.admin.manage_portal', $data);
    }
    public function add_new_portal(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'sometimes|min:8',
        ]);
        if ($validator->passes()) {
            $portal = new Oex_portal();
            $portal->name = $request->name;
            $portal->email = $request->email;
            $portal->mobile_no = $request->mobile_no;

            $portal->password = Hash::make($request->password);
            $portal->status = 1;
            $portal->save();
            $notification = array(
                'message' => 'Portal Successfully Added',
                'alert-type' => 'success'
            );
            return redirect('exams/admin/manage_portal')->with($notification);
        } else {
            $notification = array(
                'message' => 'Something Went Wrong. Please Try Again',
                'alert-type' => 'error'
            );
            return redirect('exams/admin/manage_portal')->with($notification);
        }
    }

    public function portal_status($id)
    {
        $portal = Oex_portal::where('id', $id)->get()->first();
        if ($portal->status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }
        $p1 = Oex_portal::where('id', $id)->get()->first();
        $p1->status = $status;
        $p1->update();
    }

    public function edit_portal($id)
    {
        $data['portal_info'] = Oex_portal::where('id', $id)->get()->first();
        return view('exams.admin.edit_portal', $data);
    }

    public function edit_portal_sub(Request $request)
    {
        $portal_info = Oex_portal::where('id', $request->id)->get()->first();
        $portal_info->name = $request->name;
        $portal_info->email = $request->email;
        $portal_info->mobile_no = $request->mobile_no;
        if ($request->password != '') {
            $portal_info->password = Hash::make($request->password);
        }
        $portal_info->save();
        $notification = array(
            'message' => 'Portal Successfully Updated',
            'alert-type' => 'success'
        );
        return redirect('exams/admin/manage_portal')->with($notification);
    }

    public function delete_portal($id)
    {
        $p1 = Oex_portal::where('id', $id)->get()->first();
        $p1->delete();
        $notification = array(
            'message' => 'Portal Successfully Deleted',
            'alert-type' => 'success'
        );
        return redirect('exams/admin/manage_portal')->with($notification);
    }

    public function add_question($id)
    {
        $data['questions'] = Oex_exam_question_master::where('exam_id', $id)->get()->toArray();
        return view('exams.admin.add_question', $data);
    }

    public function add_new_question(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'question' => 'required',
            'option1' => 'required',
            'option2' => 'required',
            'option3' => 'required',
            'option4' => 'required',
            'ans' => 'required',
        ]);
        if ($validator->passes()) {
            $question = new Oex_exam_question_master();
            $question->exam_id = $request->exam_id;
            $question->question = $request->question;
            $question->options = json_encode(array('option1' => $request->option1, 'option2' => $request->option2, 'option3' => $request->option3, 'option4' => $request->option4));
            $question->ans = $request->ans;
            $question->status = '1';
            $question->save();
            $notification = array(
                'message' => 'Exam Question Successfully Added',
                'alert-type' => 'success'
            );
            return redirect('exams/admin/add_question/' . $request->exam_id)->with($notification);

        } else {
            $notification = array(
                'message' => 'Exam Question Was not added. Please Try again.',
                'alert-type' => 'error'
            );
            return redirect('exams/admin/add_question/' . $request->exam_id)->with($notification);
        }
    }

    public function question_status($id)
    {
        $question = Oex_exam_question_master::where('id', $id)->get()->first();
        if ($question->status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }
        $q1 = Oex_exam_question_master::where('id', $id)->get()->first();
        $q1->status = $status;
        $q1->update();
    }

    public function delete_question($id) {
        $question = Oex_exam_question_master::where('id', $id)->get()->first();
        $question->delete();$notification = array(
            'message' => 'Exam Question Successfully Deleted',
            'alert-type' => 'success'
        );
        return redirect('exams/admin/add_question/' . $question->exam_id)->with($notification);
    }

    public function update_question($id) {
        $data['question'] = Oex_exam_question_master::where('id', $id)->get()->toArray();
        return view('exams.admin.update_question', $data);
    }

    public function edit_question_inner(Request $request) {
        $question = Oex_exam_question_master::where('id', $request->id)->get()->first();
        $question->question = $request->question;

        $question->options = json_encode(array('option1' => $request->option1, 'option2' => $request->option2, 'option3' => $request->option3, 'option4' => $request->option4,));

        $question->ans = $request->ans;
        $question->update();
        $notification = array(
            'message' => 'Exam Question Successfully Updated',
            'alert-type' => 'success'
        );
        return redirect('exams/admin/add_question/'. $question->exam_id)->with($notification);
    }
}
