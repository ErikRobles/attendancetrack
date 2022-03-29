<?php

namespace App\Http\Controllers;

use App\Exports\ZoomExport;
use App\Imports\ZoomImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ZoomController extends Controller
{
  
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileImportExport()
    {
       return view('file-import');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileImport(Request $request) 
    {
        Excel::import(new ZoomImport, $request->file('file')->store('temp'));
        return back();
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileExport() 
    {
        return Excel::download(new ZoomExport, 'zoom-collection.xlsx');
    }    

    function index() {
        return view('zoom');
     }
 
}
