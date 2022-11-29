<?php

namespace App\Http\Controllers\Authorization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
                'birth_date' => ['required'],
                'sex' => ['required'],
                'phone_number' => ['required'],
                'country' => ['required'],
                'language' => ['required'],
            ]);

            $data["password"] = Hash::make($data["password"]);
            $user = User::create($data);

            Auth::login($user);
            // redirect if redirectTo specified
            // how you didnt know this?
            return redirect(
                $req->has('redirectTo') ? $req->get('redirectTo') : '/dashboard/user/profile/setting'
            );
        } catch (\Throwable $th) {
            return back()->withErrors(['message' => $th->getMessage()]);
        }
    }
}
