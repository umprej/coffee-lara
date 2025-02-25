<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coffee Types</title>
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<header class="bg-gray-800 text-white py-4">
    <div class="container mx-auto flex justify-between items-center px-4">
        <a href="{{ route('root') }}" class="text-2xl font-bold">Coffee Types</a>
        <nav>
            <a href="{{ route('about') }}" class="px-4 py-2 hover:bg-gray-700 rounded transition">About Us</a>
            @auth
                <a href="{{ route('dashboard') }}" class="px-4 py-2 hover:text-gray-700">Welcome, {{ Auth::user()->name }}!</a>
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
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-center mb-8">Our Coffee Selection</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($coffees as $coffee)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    @if($coffee->image_path)
                        <img src="{{ asset('storage/' . $coffee->image_path) }}" 
                             alt="{{ $coffee->title }}"
                             class="w-full h-48 object-cover">
                    @endif
                    <div class="p-4">
                        <h2 class="text-xl font-bold mb-2">{{ $coffee->title }}</h2>
                        <p class="text-gray-600">{{ $coffee->description }}</p>
                        <a href="{{ route('coffee.show', $coffee->id) }}" class="text-blue-500 hover:underline">Read more</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>