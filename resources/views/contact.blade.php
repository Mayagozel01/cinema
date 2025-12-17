@extends('layouts.app')

@section('title', 'Contact Us - Cinema App')

@section('header', 'Contact Us')

@section('content')
    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <h2 class="text-2xl font-bold mb-4">Get in Touch</h2>
            <p class="mb-4">We'd love to hear from you! Reach out to us with any questions or feedback.</p>
            
            <form>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                    <input type="text" id="name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Your Name">
                </div>
                
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                    <input type="email" id="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Your Email">
                </div>
                
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-bold mb-2">Message</label>
                    <textarea id="message" rows="5" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Your Message"></textarea>
                </div>
                
                <button type="submit" class="my-custom-button">Send Message</button>
            </form>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow-md p-6 text-center">
                <h3 class="text-xl font-bold mb-2">Address</h3>
                <p class="text-gray-700">123 Cinema Street<br>Movie City, MC 12345</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6 text-center">
                <h3 class="text-xl font-bold mb-2">Phone</h3>
                <p class="text-gray-700">(123) 456-7890</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6 text-center">
                <h3 class="text-xl font-bold mb-2">Email</h3>
                <p class="text-gray-700">info@cinemaapp.com</p>
            </div>
        </div>
    </div>
@endsection