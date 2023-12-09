<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    public function index() {
        return view("programs.index");
    }

    public function create() {
        return view("programs.create");
    }

    public function edit($id) {
        return view("programs.edit");
    }
}
