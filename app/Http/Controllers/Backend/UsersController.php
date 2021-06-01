<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function login()
    {
        // $admin=Admin::all();
         return view("backend.content.login");
    }



    public function doLogin(Request $request)
    { 
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);

        //authenticate
        $credentials = $request->only('email', 'password');
//        dd($credentials);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // if(auth()->user()->role == 'user'){
            //     //auth()->logout();
            //     return redirect()->route('homepage');
            // }
            return redirect()->route('dashboard');
        }
        return back()->withErrors([
            'email' => 'Invalid Credentials.',
        ]);

    }
    public function logout()
    {
        Auth::logout();

        return redirect()->route('login')->with('success','Logout Successful.');

    }

}
