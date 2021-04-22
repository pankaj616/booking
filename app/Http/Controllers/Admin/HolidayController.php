<?php

namespace App\Http\Controllers\Admin;

use App\EmployeLeave;
use App\Role;
use App\Department;
use App\User;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use App\Notifications\LeaveRequest;
use Illuminate\Support\Facades\Notification;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HolidayController extends Controller
{
    public function index()
   {
       $leaves = EmployeLeave::with('employee')->get();
       return view('admin.holiday.index', compact('leaves'));
   }

   public function view($id)
   {
       try{
           $leave = EmployeLeave::with('employee')->where('id', $id)->firstOrFail();
           return view('admin.holiday.view', compact('leave'));
       }catch(\Exception $e){
           return back()->with('error', $e->getMessage());
       }
    }

    public function CheckPriority($id)
    {
        try{
            $leave = EmployeLeave::with('employee')->where('id', $id)->firstOrFail();
            $leave_date = $leave->date_of_leave;

            $messages = [];
            $priority = "yes"; //Set this to show priority
            $get_month = Carbon::parse($leave_date)->format('F');
            $get_year = Carbon::parse($leave_date)->format('Y'); 
            $get_day_date = Carbon::parse($leave_date)->format('d');
 
            //check if month december
            if(strtolower($get_month) == 'december' && $get_day_date >= 24){
                return view('admin.holiday.view', compact('leave', 'priority', 'messages'));
            }elseif (strtolower($get_month) == 'january' && $get_day_date < 03){
                return view('admin.holiday.view', compact('leave', 'priority', 'messages'));
            }else{

                $role = Role::all();
                $head_role_id = $role->where('slug', 'head')->pluck('id')->first();
                $deputy_head_role_id = $role->where('slug', 'deputy_head')->pluck('id')->first();
                $manager_role_id     = $role->where('slug', 'manager')->pluck('id')->first();
                $senior_member_role_id = $role->where('slug', 'senior_member')->pluck('id')->first();
                $joining_date = Carbon::parse($leave->employee->joining_date);
                $current_employee = $leave->employee;
                $department = $current_employee->department;
                $department_employees = User::where('department_id',$department->id)->get();

                $current_date = Carbon::now()->format('Y-m-d');
                $diff = $joining_date->diffInYears($current_date);
                $diff = (int)($diff/5);
                $leaves_assigned = 30 + $diff;

            
                $leaves_taken = EmployeLeave::where([
                    'employee_id' =>  $leave->employee_id,
                    'status'      =>  'accept'
                ])->whereYear('date_of_leave', Carbon::now()->format('Y'))->count();
                
                // Check if employee exceed leaves limit
                if($leaves_taken >= $leaves_assigned ){
                    array_push($messages, "This employee already taken all leaves for currentt year");
                    return view('admin.holiday.view', compact('leave', 'priority','messages'));
                }

                //check Department head and deputy heady leaves
                if($current_employee->role_id == $head_role_id || $current_employee->role_id == $deputy_head_role_id){
                    if($current_employee->role_id == $head_role_id){
                        $deputy_head = $department_employees->where('role_id', $deputy_head_role_id)->first();
                        
                        $check_leave = EmployeLeave::where('employee_id', $deputy_head->id)
                        ->where('date_of_leave', $leave_date)
                        ->first();

                        if($check_leave){
                            if($check_leave->status == null){
                                array_push($messages, "Department Deputy Head also requested for the leave on this date");

                            }else if ($check_leave->status == 'accept'){
                                array_push($messages, "The Department Deputy Head already on leave on this date");
                                return view('admin.holiday.view', compact('leave', 'priority','messages'));
                            }
                        }
                    }else{
                        $head = $department_employees->where('role_id', $head_role_id)->first();
                        $check_leave = EmployeLeave::where('employee_id', $head->id)
                        ->where('date_of_leave', $leave_date)
                        ->first();

                        if($check_leave){
                            if($check_leave->status == null){
                                $messages[0] = "Department Head also requested for the leave on this date";

                            }else if ($check_leave->status == 'accept'){
                                $messages[0] = "The Department Head already on leave on this date"; 
                                return view('admin.holiday.view', compact('leave', 'priority','messages'));
                            }
                        }
                    }
                }

                //Check Senior members on leave
                if($current_employee->role_id == $senior_member_role_id){
                    $senior_members = $department_employees->where('role_id', $senior_member_role_id);
                    if($senior_members->count()){
                        $check_leave = EmployeLeave::whereIn('employee_id', $senior_members->pluck('id')->toArray())
                        ->where('date_of_leave', $leave_date)
                        ->where('status',  'accept')
                        ->get();

                        if($check_leave->count()){
                            $senior_members_on_leave = $check_leave->pluck('employee_id','employee_id');
                            if($senior_members_on_leave->count() >= $senior_members->count()-1){
                                array_push($messages, "All other senior members are on leave on this date");
                                return view('admin.holiday.view', compact('leave', 'priority','messages'));
                            }
                        }
                    }else{
                        array_push($messages, "This employee is the only senior staff member of the department");
                            return view('admin.holiday.view', compact('leave', 'priority','messages'));
                    }
                }

                //Check Mangers on leave
                if($current_employee->role_id == $manager_role_id){
                    $managers = $department_employees->where('role_id', $manager_role_id);
                    if($managers->count()){

                        $check_leave = EmployeLeave::whereIn('employee_id', $managers->pluck('id')->toArray())
                        ->where('date_of_leave', $leave_date)
                        ->where('status', 'accept')
                        ->get();

                        if($check_leave->count()){
                            $managers_on_leave = $check_leave->pluck('employee_id','employee_id');
                            if($managers_on_leave->count() >= $managers->count()-1){
                                array_push($messages, "All other senior members are on leave on this date");
                                return view('admin.holiday.view', compact('leave', 'priority','messages'));
                            }
                        }
                    }else{
                        array_push($messages, "This employee is the only manager of the department");
                            return view('admin.holiday.view', compact('leave', 'priority','messages'));
                    }
                }

                $total_employees = $department_employees->count();
                $employees_id = $department_employees->pluck('id')->toArray();

                $employee_leaves = EmployeLeave::whereIn('employee_id', $employees_id)
                ->where('date_of_leave', $leave_date )
                ->where('status', 'accept')
                ->count();
                
                //check 40 % in August
                if( strtolower($get_month) == 'august' ){
                    $get_40_percentage =  (int)(40 * ($total_employees / 100));
                    $check_40_percentage =  (int)(40 * ($employee_leaves / 100));

                    if($check_40_percentage < $get_40_percentage ){
                        array_push($messages, "Less than 40 % employees are on leave on the this date");
                    }else{
                        array_push($messages, "40 % employees are on leave on the this date");
                    }
                }else{
                    //check 50 %
                    $get_50_percentage =  (int)(50 * ($total_employees / 100));
                    $check_50_percentage =  (int)(50 * ($employee_leaves / 100));

                    if($check_50_percentage < $get_50_percentage ){
                        array_push($messages, "Less than 50 % employees are on leave on the this date");
                    }else{
                        array_push($messages, "50 % employees are on leave on the this date");
                    }
                }
                return view('admin.holiday.view', compact('leave', 'priority', 'messages'));
            }
        }catch(\Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }

    public function leaveStatus(Request $request){
        try{
            $leave = EmployeLeave::findOrFail($request->leave_id);
            $employee = $leave->employee;
            $data = [
                'status' => $request->status,
                'reject_reason' => $request->reason
            ];

            $leave->update($data);
            if($request->status == "accept"){
                $data['status'] = "Accepted";
            }else{
                $data['status'] = "Rejected";
            }

            Notification::send($employee, new LeaveRequest($data, $employee));
            return redirect()->route("admin.leaveView", $leave->id)->with('success', "Leave status updated");
        }catch(\Exception $e){
            return back()->with('error', $e->getMessage());
        }

    }
}
