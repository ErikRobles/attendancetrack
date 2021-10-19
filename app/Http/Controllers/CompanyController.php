<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Company;

class CompanyController extends Controller
{
    public function CompaniesView() {
        $companies = Company::all();
        return view('admin.pages.companies.companies_view', compact('companies'));
    }

    public function CompaniesAdd() { 
        return view('admin.pages.companies.companies_add');
    }
    
    public function CompaniesStore(Request $request) {
        $data = new Company();
        $data->name = $request->name;
        $data->contact1 = $request->contact1;
        $data->contact2 = $request->contact2;
        $data->phone1 = $request->phone1;
        $data->phone2 = $request->phone2;
        $data->save();
        $notification = array(
            'message' => 'Company Successfully Added',
            'alert-type' => 'success'
        );
        return Redirect()->route('admin.pages.companies.view')->with($notification);
    }

    public function CompaniesEdit($id) {
        $data['allData'] = Company::find($id);
        return view('admin.pages.companies.companies_edit', $data);
    }

    public function CompaniesUpdate(Request $request, $id) {
        $editData = Company::find($id);
        $editData->name = $request->name;
        $editData->contact1 = $request->contact1;
        $editData->contact2 = $request->contact2;
        $editData->phone1 = $request->phone1;
        $editData->phone2 = $request->phone2;
        $editData->save();
        $notification = array(
            'message' => 'Company Successfully Updated',
            'alert-type' => 'success'
        );
        return Redirect()->route('admin.pages.companies.view')->with($notification);
     }

     public function CompaniesDelete($id) {
         $company = Company::find($id);
         $company->delete();
         $notification = array(
            'message' => 'Company Successfully Deleted',
            'alert-type' => 'success'
        );
        return Redirect()->route('admin.pages.companies.view')->with($notification);
     }

}
