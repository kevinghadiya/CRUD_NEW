<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use app\Models\User;
class loginController extends Controller
{

    function login()
    {
        return view('login');
    }

    function adduser(Request $request)
    {

        $request->validate([
            'userName' => 'required',
            'userEmail' => 'required|email',
            'userPassword' => 'required|min:6',
            'userConPassword' => 'required|same:userPassword',
        ]);

        $AddLogin = DB::table('login_user')
            ->insert([
                'name' => $request->userName,
                'email' => $request->userEmail,
                'password' => $request->userPassword,
                'con_password' => $request->userConPassword,
            ]);
        if ($AddLogin) {
            return redirect()->route('loginpage');
        }
    }
    
    function signin()
    {
        return view('signin');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email'=> 'required',
            'password'=> 'required'
        ]);

        $credetials = $request->only('email','password');
          if (Auth::attempt($credetials)) {
            return redirect()->intended(route('allUser'));
        }
 
        return back()->with('error', 'Error Email or Password');
    }
}