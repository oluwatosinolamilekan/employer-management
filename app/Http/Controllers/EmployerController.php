<?php

namespace App\Http\Controllers;
use App\Employer;
use App\Company;
use Validator;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('post'))
        {
            
            $validator = Validator::make($request->all(),[
                'company_id' => 'required',
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required|unique:employers',
            ]);
            
            if ($validator->fails()) {
                return redirect()->back()
                ->withErrors($validator);
            }    
           
            //create an employer with role_id equals to 2
            $employer = new Employer;
            $employer->company_id = $request->company_id;
            $employer->name = $request->name;
            $employer->phone = $request->phone;
            $employer->email = $request->email;
            $employer->save();
            return back()->with('success','Employer was successfully created');
        }
        $companies = Company::select(['id','name'])->get();
        $employers = Employer::latest()->get();
        return view('employer.create',compact('companies','employers'));
    }

    public function search(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'name' => 'required',
        ]);

        
        if ($validaor->fails()) {
            return redirect()->back()
            ->withErrors($validator);
        }  

        $query =  Employer::where('name','LIKE',"$query")->get();
        return view('employer.search',compact('query'));
    }

    public function update(Request $request, $id)
    {
        if ($request->isMethod('post')) {

            

            $validator = Validator::make($request->all(),[
                'company_id' => 'required',
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required',
            ]);
    
            if ($validator->fails()) {
                return redirect()->back()
                ->withErrors($validator);
            }

            //create an employer with role_id equals to 2
            $employer = Employer::find($id);
            $employer->company_id = $request->company_id;
            $employer->name = $request->name;
            $employer->phone = $request->phone;
            $employer->email = $request->email;
            $employer->save();
            return redirect()->route('employer.index');
            // return back()->with('success','Employer was successfully created');
        }
        $companies = Company::all();
        $employer = Employer::find($id);
        return view('employer.edit',compact('companies','employer'));
        
    }

    public function delete($id)
    {
        $employer =  Employer::find($id)->delete();
        return back()->with('success','Employer has been deleted');
    }

    
}
