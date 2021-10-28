<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function ViewUsers() {
        $users = User::all();
        return view('admin.pages.users.users_view', compact('users'));
    }

    public function AddUsers() {
        return view('admin.pages.users.users_add');
    }

    public function StoreUsers(Request $request) { 
        $request->validate([
            'password' => [
                'required',
               Password::min(8)->letters()->numbers()->mixedCase()->symbols(),
            ],
        ]);
       
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();
        $notification = array(
            'message' => 'User Successfully Added',
            'alert-type' => 'success'
        );
        return Redirect()->route('admin.pages.users.users_view')->with($notification);
    }

    public function EditUsers($id) {
        $data['allData'] = User::find($id);
        return view('admin.pages.users.users_edit', $data);
    }

    public function UpdateUsers(Request $request, $id) {
        $editData = User::find($id);
        $editData->name = $request->name;
        $editData->email = $request->email;
        $editData->role = $request->role;
        $editData->save();
        $notification = array(
            'message' => 'User Successfully Updated',
            'alert-type' => 'success'
        );
        return Redirect()->route('admin.pages.users.users_view')->with($notification);
    }

    public function DeleteUsers($id) {
        $user = User::find($id);
        $user->delete();
        $notification = array(
            'message' => 'User Successfully Deleted',
            'alert-type' => 'success'
        );
        return Redirect()->route('admin.pages.users.users_view')->with($notification);
    }

    public function Profile() { 
        return view('admin.pages.users.profile');
    }
}
