<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function trips()
    {
        return view('trips');
    }

    public function trip($id)
    {
        return view('trip');
    }
}
