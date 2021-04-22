<?php

namespace App\Http\Controllers\Admin;

use App\Department;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('admin.department.index', compact('departments'));
    }

    public function view($id)
    {
        try{
            $department = Department::findOrFail($id);
            return view('admin.department.view', compact('department'));
        }catch(\Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }
}
