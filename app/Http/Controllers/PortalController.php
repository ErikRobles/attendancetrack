<?php

namespace App\Http\Controllers;

use Session;
use Validator;
use App\Models\Student;
use App\Models\Oex_portal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PortalController extends Controller
{

    public function login()
    {
        if (Session::get('portal_session')) {
            return redirect('admin/dashboard');
        }
        return view('login');
    }

    public function login_sub(Request $request)
    {
        // $portal = Oex_portal::where('email', $request->email)->where('password', $request->password)->get()->toArray();

        $portal = User::firstWhere('email', $request->input('email'));
        // Hash::check($request->input('password'), $portal->password);
        // dd($portal->status);

        if ($portal) {

            if ($portal->status == 1 && password_verify($request->password, $portal->password)) {
                // $request->session()->put('portal_session', $portal[0]['id']);
                $request->session()->put('portal_session', $portal->id);

                return redirect('admin/dashboard');
            } else {
                $notification = array(
                    'message' => 'Your account is not active. Please contact your administrator.',
                    'alert-type' => 'error'
                );
                return redirect('login')->with($notification);
            }
        } else {
            $notification = array(
                'message' => 'Your Email or Password is incorrect.',
                'alert-type' => 'error'
            );
            return redirect('login')->with($notification);
        }
    }

     // public function portal_signup()
    // {
    //     if (Session::get('portal_session')) {
    //         return redirect('portal/dashboard');
    //     }
    //     return view('portal.signup');
    // }

    // public function portal_signup() {
    //     return redirect('portal/login');
    // }

    // public function portal_signup_sub(Request $request)
    // {
    //     $validator = Validator($request->all(), [
    //         'name' => 'required',
    //         'email' => 'required',
    //         'password' => 'sometimes|min:8',
    //     ]);
    //     if ($validator->passes()) {
    //         $is_exists = Oex_portal::where('email', $request->email)->get()->toArray();
    //         if ($is_exists) {
    //             // $arr = array('status' => 'false', 'message' => 'Email already exists. If this is you, please login.');
    //             return redirect('/portal/signup')->with('error', 'Email Already Exists! If this is you, please log in.');
    //         } else {
    //             $portal = new Oex_portal();
    //             $portal->name = $request->name;
    //             $portal->email = $request->email;
    //             $portal->mobile_no = $request->mobile_no;
    //             $portal->password = Hash::make($request->password);
    //             $portal->save();
    //             return redirect('portal/login')->with('success', 'Portal Successfully Added!');
    //         }
    //     } else {
    //         return redirect('portal/login')->with('error', 'Something went wrong!');
    //     }
    // }
}
