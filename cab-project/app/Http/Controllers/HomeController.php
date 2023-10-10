<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return "this is index meothd";
    }
    public function contact() {
        return view('contact');
    }
    public function about_us() {
        return view('about_us');
    }
}