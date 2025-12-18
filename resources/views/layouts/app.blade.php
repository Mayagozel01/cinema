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
                @include('includes.footer')
            </div>
        </div>
    </div>
</body>

</html>