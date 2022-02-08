<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Designation;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees = Employee::all();
        $designations = Designation::all();
        
        return view('admin/employee.index',compact('employees','designations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $employees = Employee::select('employee_id')->get();
        $age = \Carbon\Carbon::parse($request->dob)->diff(\Carbon\Carbon::now());

       // dd($employees);
       
       if($employees->contains('employee_id',$request->employeeid)){
           
         return redirect()->back()->with('error','Employee I.D is Already Taken!');
       }
         
        Employee::create([
            'employee_id' =>$request->employeeid,
            'firstname' =>$request->firstname,
            'lastname' =>$request->lastname,
            'middlename' =>$request->middlename,
            'dob' =>$request->dob,
            'age' =>$age->y,
            'address' =>$request->address,
            'designation' =>$request->designation
        ]);
       // dd($age);
        return redirect()->back()->with('success','Employee Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $age = \Carbon\Carbon::parse($request->dob)->diff(\Carbon\Carbon::now());
       Employee::where('id','=',$id)->update([
        'employee_id' =>$request->employeeid,
        'firstname' =>$request->firstname,
        'lastname' =>$request->lastname,
        'middlename' =>$request->middlename,
        'dob' =>$request->dob,
        'age' =>$age->y,
        'address' =>$request->address,
        'designation' =>$request->designation
        ]);

        return redirect()->back()->with('update', 'Employee updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Employee::where('id','=',$id)->delete();
        return redirect()->back()->with('delete', 'Employee deleted!');
    }
}
