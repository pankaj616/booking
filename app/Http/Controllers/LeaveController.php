<?php

namespace App\Http\Controllers;

use App\User;
use App\EmployeLeave;
use Auth;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $leaves = EmployeLeave::where('employee_id',auth()->id())->get();
        return view('leaves', compact('leaves'));
    }

    public function view($id)
    {
        try{
            $leave = EmployeLeave::where([
                'employee_id' => auth()->id(),
                'id' => $id
            ])->firstOrFail();
            
            return view('leave-view', compact('leave'));

        }catch(\Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }

    public function leaveRequest(Request $request)
    {
        try{
            $validator = \Validator::make($request->all(),[
                'date'  => ['required'],
                'reason'  => ['required']
            ]);
            
            if ($validator->fails()) {
                return redirect()->back()
                    ->with('error', 'Please fill all fields');
            }

            EmployeLeave::create([
                'date_of_leave' => $request->date,
                'reason' => $request->reason,
                'employee_id' => auth()->id()
            ]);
            
            return redirect()->route('user.leaves')->with('success', "Leave request submitted");
        }catch(\Exception $e){
            return back()->with('error', $e->getMessage());
        }

    }
}
