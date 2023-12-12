<?php

namespace App\Http\Controllers;

use App\Constant\SubmitOutcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        $credentials = [
            "email" => $request->email,
            "password" => $request->password
        ];

        if(Auth::attempt($credentials) == true)
        {
            return redirect()
                ->route("dashboard")
                ->with(SubmitOutcome::$SUCCESS, "logged-in successfully");
        }
        else
        {
            return redirect()
                ->route("login-page")
                ->with(SubmitOutcome::$FAILED, "Invalid email or password.");
        }
    }


    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        return redirect()
            ->route("login-page")
            ->with(SubmitOutcome::$SUCCESS, "you are logged out");
    }
}
