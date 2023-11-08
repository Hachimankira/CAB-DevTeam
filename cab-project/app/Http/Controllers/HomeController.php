<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return "this is index meothd";
    }
    public function home()
    {
        return view('home');
    }
    public function contact()
    {
        return view('contact');
    }
    public function about_us()
    {
        return view('about_us');
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function storeUser()
    {
        $user= new User;
        $user->name = request('full_name');
        $user->email = request('email');
        $user->password = request('password');
        $user->save();
        
        return redirect('login');
    }
}