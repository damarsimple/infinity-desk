<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        return view('pages.regis-login.register');
    }
}
