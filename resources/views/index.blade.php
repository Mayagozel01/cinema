@extends('layouts.app')

@section('title', 'Home - Cinema App')

@section('header', 'Welcome to Our Cinema')

@section('content')
    <div class="text-center">
        <!-- Hero image -->
        <img src="{{ asset('images/hero-bg.png') }}" alt="Cinema Hero Image"
            class="w-full max-h-96 object-cover rounded-lg mb-6">

        <!-- Logo -->
        <img src="{{ asset('images/logo.png') }}" alt="Cinema Logo" class="mx-auto mb-4">

        <!-- Title image -->
        <img src="{{ asset('images/title.png') }}" alt="Cinema Title" class="mx-auto mb-6">

        <button class="my-custom-button">Book Tickets Now</button>
        <p class="mt-4 text-lg">Experience the magic of cinema with us!</p>

        <!-- Banner image -->
        <img src="{{ asset('images/banner.png') }}" alt="Special Offer" class="w-full mt-6 rounded-lg">
    </div>
@endsection