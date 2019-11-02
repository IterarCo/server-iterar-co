<?php

namespace App\Http\Controllers\Resources;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function showSignIn()
    {
        return view('resources.signIn');
    }

    public function showSignUp()
    {
        return view('resources.signUp');
    }

    public function doSignIn(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $remember = true;

        if (Auth::attempt($credentials, $remember)) {
            return redirect()->intended('resources/dashboard');
        } else {
            return redirect('resources/signin');
        }
    }

    public function doSignOut(Request $request)
    {
        $credentials = $request->only('first_name','last_name','email', 'password', 'repassword');
        $password = $credentials->password;
        print_r($password);
    }

    public function doSignUp()
    {
        return [];
    }


}
