<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
class AuthController extends Controller
{
    public function login()
    {

        if(Auth::check()){
            return redirect('Cloudsch');
        } else {
            return view('Auth.login');
        }


    }

        public function authenticate(Request $request)
    {


        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)) {
            return redirect('Cloudsch')->with('login_message', 'Welcome To your CloudData!');
        } else {
            return redirect('login')->with('error_message', 'Wrong email or password!');
        }
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect('login')->with('logout_message', "You've just logged out!");

    }

    public function register_form() {

        if(Auth::check()){
            return redirect('Cloudsch');
        }

        return view('Auth.register');
    }

    public function register(Request $request) {

        $request->validate([
            'name' => 'required|min:3|max:30',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4|confirmed'
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);

        return redirect('login');

    }

}
