<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class AuthController extends Controller
{
    public function dashboard(){
        if (Auth::check()) {
        return view('admin.dashboard');  
        }
        
        
      
        return redirect()->route('admin.login');

    }

    public function showLoginForm() { 
        if(Auth::user()){
            return redirect()->intended('admin');


       }                                                   
    
        return view('admin.login');
    }

    
    public function login(Request $request) {

            $credentials = [ 
                        'email' => $request->email, 
                        'password' => $request->password
                    ];
                Auth::attempt($credentials);
                return redirect('admin');
    
        
    }

    public function logout() {

        Auth::logout();
        return redirect('admin');

    


    }
}