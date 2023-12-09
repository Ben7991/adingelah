<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpcomingEventsController extends Controller
{
    public function index() {
        return view("events.index");
    }

    public function create() {
        return view("events.create");
    }

    public function edit($id) {
        return view("events.edit");
    }
}
