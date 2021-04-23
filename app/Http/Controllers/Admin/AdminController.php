<?php

namespace App\Http\Controllers\Admin;

use App\Department;
use App\User;
use App\EmployeLeave;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index()
    {
        $departments = Department::all();
        return view('admin.dashboard', compact('departments'));
    }

    public function checkLeaves(Request  $request)
    {
        try{
            $validator = \Validator::make($request->all(),[
                'date'  => ['required'],
                'department'  => ['required']
            ]);
            
            if ($validator->fails()) {
                return redirect()->back()
                    ->with('error', 'Please fill all fields');
            }
            $department = Department::findOrFail($request->department);
            $department_employees = User::where('department_id', $department->id)->get();

            if($department_employees->count())
            {
                $department_employees_ids = $department_employees->pluck('id')->toArray();
                $data['total_employees'] = $department_employees->count();

                $employees_on_leave = EmployeLeave::whereIn('employee_id', $department_employees_ids )
                ->where(['status' => 'accept',
                    'date_of_leave' => $request->date
                ])->count();

                $data['date'] = $request->date;
                $data['department'] = $request->department;
                $data['employees_on_leave'] = $employees_on_leave;
                $departments = Department::all();
                return view('admin.dashboard', compact('departments', 'data'));

            }else{
                return back()->with('error', 'No employee found ');
            }
            dd($department_employees);
        }catch(\Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }
}
