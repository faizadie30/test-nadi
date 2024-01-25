<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title-web') | {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="icon" href="{{ asset('assets/img/logo-nadi.svg') }}" type="image" sizes="16x16">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1000;
            background-size: cover;
        }
    </style>
    @livewireStyles
</head>

<body>
    <video autoplay muted loop id="myVideo">
        <source src="{{ asset('assets/video/background_video_new.mp4') }}" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>

    @livewireScripts
    <script>
        var video = document.getElementById("myVideo");

        function toggleVideo() {
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        }
    </script>
</body>

</html>
