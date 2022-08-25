<?php

namespace App\Http\Controllers;

class LandingPage extends Controller
{
    protected function index()
    {
        return view('landing');
    }
}
