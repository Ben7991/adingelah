<?php

namespace App\Http\Controllers;


class AdminController extends Controller
{
    public function login() {
        return view("admin.login");
    }

    public function forgot_password() {
        return view("admin.forgot-password");
    }

    public function dashboard() {
        return view("admin.dashboard");
    }

    public function profile() {
        return view("admin.profile");
    }

}
