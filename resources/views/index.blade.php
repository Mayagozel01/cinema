@extends('layouts.app')

@section('title', 'Home - Cinema App')

@section('header', 'Welcome to Our Cinema')

@section('content')
    <div class="bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex space-x-2 overflow-x-auto py-3">
                <button class="bg-red-500 text-white px-6 py-2 rounded-full whitespace-nowrap">Сегодня</button>
                <button class="bg-white text-gray-700 px-6 py-2 rounded-full whitespace-nowrap hover:bg-gray-100">Завтра</button>
                <button class="bg-white text-gray-700 px-6 py-2 rounded-full whitespace-nowrap hover:bg-gray-100">Воскресенье, 10 сент.</button>
                <button class="bg-white text-gray-700 px-6 py-2 rounded-full whitespace-nowrap hover:bg-gray-100">Понедельник, 11 сент.</button>
                <button class="bg-white text-gray-700 px-6 py-2 rounded-full whitespace-nowrap hover:bg-gray-100">Вторник, 12 сент.</button>
                <button class="bg-white text-gray-700 px-6 py-2 rounded-full whitespace-nowrap hover:bg-gray-100">Среда, 13 сент.</button>
            </div>
        </div>
    </div>

    <!-- Movies Grid -->
    <div class="max-w-7xl mx-auto px-4 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 gap-6">
            @foreach ($cinemas as $cinema)
            <div class="bg-white overflow-hidden">
                <div class="relative">
                    @if($cinema->poster)
                        <img src="{{ asset('images/' . $cinema->poster) }}" alt="{{ $cinema->name }}" class="w-full h-80 object-cover">
                    @else
                        <div class="w-full h-80 bg-gray-800 flex items-center justify-center">
                            <svg class="w-20 h-20 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    @endif
                    @if($cinema->is_premier)
                        <span class="absolute top-3 right-3 bg-red-600 text-white px-3 py-1 text-xs font-bold">ПРЕМЬЕРА</span>
                    @endif
                    <span class="absolute bottom-3 left-3 bg-[#123D4B] text-black px-2 py-1 text-xs font-bold text-white">{{ $cinema->age_rating }}</span>
                </div>
                <div class="p-4">
                    <h3 class="text-[24px] font-bold mb-2">{{ $cinema->name }}</h3>
                    <ul class="flex gap-4">
                        @foreach($cinema->genres as $genre)
                            <li class="cinema_reg-xs mb-4 bg-[#F2F2F5] rounded-[3px] px-[4px] py-[3px]">{{ $genre->name }}</li>
                        @endforeach
                    </ul>
                    <div class="grid grid-cols-3 gap-2">
                        @foreach($cinema->showtimes as $showtime)
                            <div class="flex flex-col justify-center items-center">
                                <div class="flex flex-col justify-center items-center w-full border border-[#E92B43] rounded gap-2">
                                    <div class="bg-[#E92B43] text-white cinema_reg-15 w-full text-center">{{ substr($showtime->show_time, 0, 5) }}</div>
                                    <div class="px-2 text-[#4C4C4F] text-[11px] font-['Roboto'] w-full flex justify-between">
                                        <p>2D</p>
                                        <p>{{ number_format($showtime->price, 0, '', ' ') }} ₸</p>
                                    </div>
                                </div>
                                <p class="text-[10px] text-[#4C4C4F] font-['Roboto'] font-[400]">{{ $showtime->hall->name }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach

            <!-- Movie Card static example
            <div class="bg-white overflow-hidden">
                <div class="relative">
                    <img src="{{ asset('images/movie2.png') }}" alt="Мег 2: Бездна" class="w-full h-80 object-cover">
                    <span class="absolute top-3 left-3 bg-blue-500 text-white px-2 py-1 text-xs font-bold">1240 x 97</span>
                    <span class="absolute bottom-3 left-3 bg-[#123D4B] text-black px-2 py-1 text-xs font-bold text-white rounded">16+</span>
                </div>
                <div class="p-4">
                    <h3 class="text-[24px] font-bold mb-2">Мег 2: Бездна</h3>
                    <ul class="flex gap-4">
                        <li class="cinema_reg-xs mb-4 bg-[#F2F2F5] rounded-[3px] px-[4px] py-[3px]">экшен</li>
                        <li class="cinema_reg-xs mb-4 bg-[#F2F2F5] rounded-[3px] px-[4px] py-[3px]">триллер</li>
                    </ul>
                    <div class="grid grid-cols-3 gap-2">
                        <div class="flex flex-col justify-center items-center">
                            <div class="flex flex-col justify-center items-center w-full border border-[#E92B43] rounded gap-2">
                                <div class="bg-[#E92B43] text-white cinema_reg-15 w-full text-center">15:35</div>
                                <div class="px-2 text-[#4C4C4F] text-[11px] font-['Roboto'] w-full flex justify-between">
                                    <p>2D</p>
                                    <p>1233 ₸</p>
                                </div>
                            </div>
                            <p class="text-[10px] text-[#4C4C4F] font-['Roboto'] font-[400]">Зал 3</p>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <div class="flex flex-col justify-center items-center w-full border border-[#E92B43] rounded gap-2">
                                <div class="bg-[#E92B43] text-white cinema_reg-15 w-full text-center">17:40</div>
                                <div class="px-2 text-[#4C4C4F] text-[11px] font-['Roboto'] w-full flex justify-between">
                                    <p>2D</p>
                                    <p>1233 ₸</p>
                                </div>
                            </div>
                            <p class="text-[10px] text-[#4C4C4F] font-['Roboto'] font-[400]">Зал 3</p>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <div class="flex flex-col justify-center items-center w-full border border-[#E92B43] rounded gap-2">
                                <div class="bg-[#E92B43] text-white cinema_reg-15 w-full text-center">19:15</div>
                                <div class="px-2 text-[#4C4C4F] text-[11px] font-['Roboto'] w-full flex justify-between">
                                    <p>2D</p>
                                    <p>1233 ₸</p>
                                </div>
                            </div>
                            <p class="text-[10px] text-[#4C4C4F] font-['Roboto'] font-[400]">Зал 3</p>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="bg-white overflow-hidden">
                <div class="relative">
                    <div class="w-full h-80 bg-gray-800 flex items-center justify-center">
                        <svg class="w-20 h-20 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <span class="absolute top-3 right-3 bg-red-600 text-white px-3 py-1 text-xs font-bold">ПРЕМЬЕРА</span>
                </div>
                <div class="p-4">
                    <h3 class="text-[24px] font-bold mb-2">Скоро</h3>
                    <ul class="flex">
                        <li class="cinema_reg-xs mb-4 bg-[#F2F2F5] rounded-[3px] px-[4px] py-[3px]">Информация скоро появится</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection