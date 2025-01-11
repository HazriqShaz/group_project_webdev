<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function specs()
    {
        return view('specs');
    }
    
    public function login()
    {
        return view('login');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

}
