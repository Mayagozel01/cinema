<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CinemaController extends Controller
{
    public function index()
    {
        $cinemas = \App\Models\Cinema::all();
        return view('index', compact('cinemas'));
    }
}
