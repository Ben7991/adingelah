<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationsController extends Controller
{
    public function index() {
        return view("donations.index");
    }

    public function show($id) {
        return view("donations.show");
    }
}
