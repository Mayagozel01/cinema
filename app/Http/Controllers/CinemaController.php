<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CinemaController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function movies()
    {
        return view('movies');
    }

    public function showtimes()
    {
        return view('showtimes');
    }

    public function contact()
    {
        return view('contact');
    }

    public function show($id)
    {
        // For now, we'll just return the index view
        // In a real application, you would fetch the cinema by ID
        return view('index');
    }
}