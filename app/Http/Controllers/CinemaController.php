<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cinema;

class CinemaController extends Controller
{
    public function index()
    {
        // Get all cinemas with their related data
        $cinemas = Cinema::with(['genres', 'showtimes.hall'])->get();
        
        return response()->json($cinemas);
    }
    
    public function show($id)
    {
        // Get a specific cinema with all related data
        $cinema = Cinema::with(['genres', 'showtimes.hall'])
                    ->findOrFail($id);
        
        return response()->json($cinema);
    }
}
