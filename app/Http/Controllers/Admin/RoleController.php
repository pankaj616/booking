<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
   public function index()
   {
        $roles = Role::all();
        return view('admin.role.index', compact('roles'));
   }

    public function view($id)
    {
        try{
            $role = Role::findOrFail($id);
            return view('admin.role.view', compact('role'));
        }catch(\Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }
}
