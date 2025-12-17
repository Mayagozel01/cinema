@extends('layouts.app')

@section('title', 'Movies - Cinema App')

@section('header', 'Now Showing')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="movie-card bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('images/movie1.png') }}" alt="Movie 1" class="w-full h-64 object-cover">
            <div class="p-6">
                <h2 class="text-xl font-bold mb-2">The Great Adventure</h2>
                <p class="text-gray-700 mb-4">An epic journey through unexplored lands. A story of courage and discovery.</p>
                <button class="my-custom-button">Book Tickets</button>
            </div>
        </div>
        
        <div class="movie-card bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('images/movie2.png') }}" alt="Movie 2" class="w-full h-64 object-cover">
            <div class="p-6">
                <h2 class="text-xl font-bold mb-2">Mystery Mansion</h2>
                <p class="text-gray-700 mb-4">A thrilling mystery unfolds in a haunted mansion. Can you solve the puzzle?</p>
                <button class="my-custom-button">Book Tickets</button>
            </div>
        </div>
        
        <div class="movie-card bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('images/movie3.png') }}" alt="Movie 3" class="w-full h-64 object-cover">
            <div class="p-6">
                <h2 class="text-xl font-bold mb-2">Space Odyssey</h2>
                <p class="text-gray-700 mb-4">Journey to distant galaxies in this sci-fi masterpiece. Explore the unknown.</p>
                <button class="my-custom-button">Book Tickets</button>
            </div>
        </div>
    </div>
@endsection