@extends('layouts.app')

@section('title', 'Showtimes - Cinema App')

@section('header', 'Movie Showtimes')

@section('content')
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded-lg overflow-hidden">
            <thead class="bg-gray-100">
                <tr>
                    <th class="py-3 px-4 text-left">Movie</th>
                    <th class="py-3 px-4 text-left">Hall</th>
                    <th class="py-3 px-4 text-left">Time</th>
                    <th class="py-3 px-4 text-left">Price</th>
                    <th class="py-3 px-4 text-left">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <tr>
                    <td class="py-3 px-4">Movie Title 1</td>
                    <td class="py-3 px-4">Hall 1</td>
                    <td class="py-3 px-4">14:30</td>
                    <td class="py-3 px-4">$12.50</td>
                    <td class="py-3 px-4">
                        <button class="my-custom-button">Book</button>
                    </td>
                </tr>
                <tr>
                    <td class="py-3 px-4">Movie Title 2</td>
                    <td class="py-3 px-4">Hall 2</td>
                    <td class="py-3 px-4">16:45</td>
                    <td class="py-3 px-4">$10.00</td>
                    <td class="py-3 px-4">
                        <button class="my-custom-button">Book</button>
                    </td>
                </tr>
                <tr>
                    <td class="py-3 px-4">Movie Title 3</td>
                    <td class="py-3 px-4">Hall 3</td>
                    <td class="py-3 px-4">19:00</td>
                    <td class="py-3 px-4">$15.00</td>
                    <td class="py-3 px-4">
                        <button class="my-custom-button">Book</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection