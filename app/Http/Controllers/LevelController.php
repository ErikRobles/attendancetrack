<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function LevelView() {
        $data['levels'] = Level::all();
        return view('admin.pages.levels.levels_view', $data);
    }

    public function LevelAdd() {
        return view('admin.pages.levels.levels_add');
    }

    public function LevelStore(Request $request) {
        $level = new Level();
        $level->name = $request->name;
        $level->save();
        $notification = array(
            'message' => 'Level Successfully Added',
            'alert-type' => 'success'
        );
        return Redirect()->route('admin.pages.levels.view')->with($notification);
    }

    public function LevelEdit($id) {
        $data['allData'] = Level::find($id);
        return view('admin.pages.levels.levels_edit', $data);
    }

    public function LevelUpdate(Request $request, $id) {
        $editData = Level::find($id);
        $editData->name = $request->name;
        $editData->save();
        $notification = array(
            'message' => 'Level Successfully Updated',
            'alert-type' => 'success'
        );
        return Redirect()->route('admin.pages.levels.view')->with($notification);
    }

    public function LevelDelete($id) {
        $level = Level::find($id);
        $level->delete();
        $notification = array(
            'message' => 'Level Successfully Deleted',
            'alert-type' => 'success'
        );
        return Redirect()->route('admin.pages.levels.view')->with($notification);
    }
}
