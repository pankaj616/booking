<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
   public function index()
   {
       $employees = User::all();
       return view('admin.employee.index', compact('employees'));
   }

   public function view($id)
   {
       try{
           $employee = User::findOrFail($id);
           return view('admin.employee.view', compact('employee'));
       }catch(\Exception $e){
           return back()->with('error', $e->getMessage());
       }
   }
}
