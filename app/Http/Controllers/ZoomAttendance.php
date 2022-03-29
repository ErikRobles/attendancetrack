<?php

namespace App\Http\Controllers;

use App\Models\Zoom;
use Illuminate\Http\Request;

class ZoomAttendance extends Controller
{
    public function ZoomAttendanceView() {
        // get all records from database where user_name is not = to 'Name'
        $data['zooms'] = Zoom::where('user_name', '!=', 'Name (Original Name)')->where('user_name', '!=', 'Erik Robles')->get();
       
        return view('zoom-attendance', $data);
    }
}
