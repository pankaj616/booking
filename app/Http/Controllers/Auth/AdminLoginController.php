<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class AdminLoginController extends Controller
{

     /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::ADMIN;

    public function loginForm()
    {
        if (Auth::guard('admin')->user()){
            return redirect($this->redirectTo);
        }else{
            return view('auth.admin-login');
        }
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required'
        ]);
        
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect($this->redirectTo);        
        }
        return back()->withInput($request->only('email'));

    }

    public function logout(Request $request)
    {
        if(Auth::guard('admin')){
            Auth::guard('admin')->logout();
            return redirect('/admin');
        }
        return back();
    }
}
