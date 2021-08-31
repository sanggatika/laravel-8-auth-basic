<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;

class AuthenticationController extends Controller
{
    public function loginPage()
    {
        $titlePage = "Login";

        return view('main_contents.auth.auth_login', [
            'titlePage' => $titlePage,
        ]);
    }

    public function registerPage()
    {
        $titlePage = "Register";
        
        return view('main_contents.auth.auth_register', [
            'titlePage' => $titlePage,
        ]);
    }

    public function forgotpasswordPage()
    {
        $titlePage = "Forgot Password";
        
        return view('main_contents.auth.auth_forgotpassword', [
            'titlePage' => $titlePage,
        ]);
    }
}
