<?php

namespace App\Http\Controllers;

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

            return redirect(
                $req->has('redirectTo') ? $req->get('redirectTo') : '/dashboard'
            );
        } catch (\Throwable $th) {
            return back()->withErrors(['message' => $th->getMessage()]);
        }
    }
}
