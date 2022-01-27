<?php

namespace App\Http\Controllers\Authorization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        return view('pages.regis-login.login');
    }

    public function handleLogin(Request $request)
    {



        if (!auth()->attempt([
            'email' => request()->get('email'),
            'password' => request()->get('password')
        ])) {

            //If not redirect back
            return back()->withErrors([

                'message' => 'Please check your email or password'
            ]);
        }

        if ($request->has('redirectTo')) {
            return redirect($request->get('redirectTo'));
        }

        return redirect('/');
    }
}
