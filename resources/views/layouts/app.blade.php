<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cinema App')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="body">
        <div class="page-wrapper">
            <div class="content">
                    @include('includes.header')

                <!-- Main Content -->
                <main class="">
                    @yield('content')
                </main>

                <!-- Footer -->
                <footer class="bg-gray-800 text-white py-8">
                    <div class="">
                        <div class="flex flex-col md:flex-row justify-between items-center">
                            <div class="mb-4 md:mb-0">
                                <img src="{{ asset('images/logo.png') }}" alt="Cinema Logo" class="h-12">
                            </div>
                            <div class="flex space-x-4">
                                <a href="#" class="text-white hover:text-blue-300">
                                    <img src="{{ asset('images/Facebook.svg') }}" alt="Facebook" class="h-6">
                                </a>
                                <a href="#" class="text-white hover:text-blue-300">
                                    <img src="{{ asset('images/Instagram.svg') }}" alt="Instagram" class="h-6">
                                </a>
                                <a href="#" class="text-white hover:text-blue-300">
                                    <img src="{{ asset('images/YouTube.svg') }}" alt="YouTube" class="h-6">
                                </a>
                                <a href="#" class="text-white hover:text-blue-300">
                                    <img src="{{ asset('images/Vkontakte (VK).svg') }}" alt="VK" class="h-6">
                                </a>
                            </div>
                            <div class="mt-4 md:mt-0">
                                <p>We accept:</p>
                                <img src="{{ asset('images/mastercard.png') }}" alt="MasterCard" class="h-8">
                            </div>
                        </div>
                        <div class="mt-8 text-center text-gray-400">
                            <p>&copy; {{ date('Y') }} Cinema App. All rights reserved.</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</body>

</html>