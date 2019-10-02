<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest')->except('logout');
    }

    public function login(){
        return view('login');
    }
    
    public function loginCheck(Request $request){
        $username = $request->username;
        $password = $request->password;

        $login_username = [
                    'name' => $username,
                    'level' => 'official',
                    'password' => $password
                ];
        $login_email = [
                    'email' => $username,
                    'level' => 'official',
                    'password' => $password
                ];

        if (auth()->attempt($login_username)) 
        {
            return redirect(url('admin/dashboard'));
        }
        elseif (auth()->attempt($login_email)) 
        {
            return redirect(url('admin/dashboard'));
        }else{
            return redirect(url('login'));
        }

    }

    public function logout(){
        auth()->logout();
        return redirect(url('login'));
    }
}
