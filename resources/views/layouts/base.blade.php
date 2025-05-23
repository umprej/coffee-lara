<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Include custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body class="bg-gray-100">
    <header class="bg-gray-800 text-white py-4" id="custom-header">
        <div class="container mx-auto flex justify-between items-center px-4">
            <a href="{{ route('root') }}" class="text-2xl font-bold">HaLean Coffee</a>
            <nav>
                <a href="{{ route('about') }}" class="px-4 py-2 hover:bg-gray-700 rounded transition">About Us</a>
                @auth
                    <a href="{{route('favorites')}}" class="px-4 py-2 hover:bg-gray-700 rounded transition">Saved Coffees</a>
                    <a href="{{ route('dashboard') }}" class="px-4 py-2 hover:bg-gray-700 rounded transition">Dashboard</a>
                    <a href="{{ route('logout') }}" 
                       class="px-4 py-2 hover:bg-gray-700 rounded transition"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                       Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}" class="px-4 py-2 hover:bg-gray-700 rounded transition">Login</a>
                    <a href="{{ route('register') }}" class="px-4 py-2 hover:bg-gray-700 rounded transition">Register</a>
                @endauth
            </nav>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>