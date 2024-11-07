<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Light Social</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS with Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- Live wire --}}
    @livewireStyles
</head>

<body>
    <nav class="flex justify-center items-center p-2 align-middle w-full bg-red-800 min-h-16 text-white">
        <ul class="flex gap-10 max-sm:flex-col">
            <li>Light Social</li>
            <li>
                @auth
                    <a href="{{ route('posts.index') }}">Homepage</a>
                </li>
            @else
                <a href="{{ route('login') }}">Login</a>
            @endauth

            <li>
                @auth
                    <a href="{{ route('logout') }}">Logout</a>
                @else
                    <a href="{{ route('register') }}"> Registrati </a>
                @endauth
            </li>
        </ul>
    </nav>

    <main class="p-2">
        @yield('content')
    </main>
    @livewireScripts
</body>

</html>
