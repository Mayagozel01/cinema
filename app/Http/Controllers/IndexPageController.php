<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cinema;

class IndexPageController extends Controller
{
    public function index()
    {
        $cinemas = Cinema::with(['genres', 'showtimes.hall'])->get();
        return view('index', compact('cinemas'));
    }
}
