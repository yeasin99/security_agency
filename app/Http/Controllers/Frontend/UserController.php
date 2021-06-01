<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\confirmationmail2;
use App\Models\User;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{

    public function showLoginRegistration()
    {
        return view('frontend.content.login-registration');
    }

    public function reg()
    {
        return view('frontend.content.registration');
    }
    public function registration(Request $request)
    {
// dd($request->all());
        $request->validate([
           'name'=>'required',
           'email'=>'email|required|unique:users',
            'password'=>'required|min:6'
        ]);

        
        $user=User::create([

           'name'=>$request->name,
           'email'=>$request->email,
           'password'=>bcrypt($request->password)
        ]);
      $add= Client::create([
            'user_id'=>$user->id,
            'address'=>$request->address,
            'contact'=>$request->contact,
            'nid'=>$request->nid,
         ]);
         Mail::to($user->email)->send(new confirmationmail2($add));

        return redirect()->back()->with('success','User Registration Successful.');

    }

    public function login(Request $request)
    {
//        dd($request->all());
//validate input
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);

        //authenticate
        $credentials = $request->only('email', 'password');
//        dd($credentials);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('homepage');
        }
        return back()->withErrors([
            'email' => 'Invalid Credentials.',
        ]);

    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login.registration.form')->with('success','Logout Successful.');

    }
}