<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view("home.index");
    }

    public function about_us() {
        return view("home.about-us");
    }

    public function gallery() {
        return view("home.gallery");
    }

    public function upcoming_events() {
        return view("home.upcoming-event");
    }

    public function programs_initiative() {
        return view("home.programs-initiative");
    }

    public function donations() {
        return view("home.donations");
    }

    public function contact_us() {
        return view("home.contact-us");
    }
}
