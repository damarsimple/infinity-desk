<?php

namespace App\Http\Controllers\Authorization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        return view('pages.regis-login.register');
    }

    public function handleRegister(Request $req)
    {

        try {
            $data = $req->validate([
                'email' => ['required', 'email'],
                'password' => ['required', 'min:8'],
                'name' => ['required'],
            ]);

            $user = User::create($data);

            Auth::login($user);
            // redirect if redirectTo specified
            // how you didnt know this?
            return redirect(
                $req->has('redirectTo') ? $req->get('redirectTo') : '/dashboard'
            );
        } catch (\Throwable $th) {
            return back()->withErrors(['message' => $th->getMessage()]);
        }
    }
}
