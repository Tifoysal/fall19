<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showRegistrationForm()
    {
        return view('backend.auth.registration');
    }

    public function doRegistration(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'image'=>'required'
        ]);

        $user_image = $request->file('image');

                $file_name =uniqid('customer_',true).date('Ymdhms').'.'.$user_image->getClientOriginalExtension();
                $user_image->storeAs('customer', $file_name);

       User::create([
          'name'=>$request->name,
          'email'=>$request->email,
          'password'=>bcrypt($request->password),
          'image'=>$file_name,
       ]);

       return redirect()->back()->with('message','Registration Successful');
    }

    public function showLoginForm()
    {
        return view('backend.auth.login');
    }

    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            return redirect()->route('home');
        }

        return redirect()->back()->with('message','Invalid User credentials');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.show');
    }
}
