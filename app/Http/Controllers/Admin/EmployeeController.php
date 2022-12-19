<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //manage employee
    public function manageEmployee(){
        $employees=Employee::all();
        return view('admin.employee.employee_manage',compact('employees'));
    }//end method



    //add employee
    public function addEmployee(){
        return view('admin.employee.employee_add');
    }//end


    //store employee
    public function storeEmployee(Request $request){
        $request->validate([
            'employee_name'=>'required',
            'email'=>'required',
            'social_link'=>'required',
        ]);
        $employee=new Employee();

        $employee->employee_name=$request->employee_name;
        $employee->job_title=$request->job_title;
        $employee->email=$request->email;
        $employee->social_link=$request->social_link;
        $employee->employ_url=$request->employee_name.''.rand();
        $employee->qr_code=$request->qr_code;

        $employee->save();

        return redirect()->back()->with('message','Employee Added Successfully');
    }//end method


    //edit employee
    public function editEmployee($id){
        $employee=Employee::find($id);
        return view('admin.employee.employee_edit',compact('employee'));
    }//end method


    //update employee
    public function updateEmployee(Request $request){
        $employee=Employee::find($request->id);

        $employee->employee_name=$request->employee_name;
        $employee->job_title=$request->job_title;
        $employee->email=$request->email;
        $employee->social_link=$request->social_link;
        $employee->employ_url=$request->employee_name.''.rand();
        $employee->qr_code=$request->qr_code;

        $employee->save();

        return redirect('/manage/employee')->with('message','Employee Updated Successfully');
    }//end method


    //delete employee
    public function deleteEmployee($id){
        $employee=Employee::find($id)->delete();

        return redirect('/manage/employee')->with('message','Employee Deleted Successfully');
    }//end method


    //view employee
    public function viewEmployee($id){
        $employee=Employee::find($id);
        return view('admin.employee.employee_view',compact('employee'));
    }//end method




}//end class
