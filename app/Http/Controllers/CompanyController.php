<?php

namespace App\Http\Controllers;
use App\Company;
use Validator;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies =  Company::latest()->get();
        return view('company.index',compact('companies'));
    }
    public function create(Request $request)
    {
        if ($request->isMethod('post')) 
        {
            $validator = Validator::make($request->all(),[
                'name' => 'required|unique:companies',
                'address' => 'required',
            ]);


            if ($validator->fails()) {
                return redirect()->back()
                ->withErrors($validator);
            }
            
            $company = new Company;
            $company->name = $request->name;
            $company->address = $request->address;
            $company->save();
            return back()->with('success','company was created successfully');

        }
        $companies =  Company::latest()->get();
        return view('company.index',compact('companies'));
    }

   

    public function update(Request $request,$id)
    {
        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(),[
                'name' => 'required',
                'address' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                ->withErrors($validator);
            }
            
            $company = Company::find($id);
            $company->name = $request->name;
            $company->address = $request->address;
            $company->save();
            return redirect()->route('company.index');
            // return back()->with('success','company was edited successfully');
        }
        $company = Company::find($id);
        return view('company.edit',compact('company'));
    }

    public function destory($id)
    {
        $company = Company::where('id',$id)->delete();
        return back()->with('success','Compnay was deleted');
    }
}
