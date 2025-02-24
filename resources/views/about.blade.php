<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<header class="bg-gray-800 text-white py-4">
    <div class="container mx-auto flex justify-between items-center px-4">
        <h1 class="text-2xl font-bold">Coffee Types</h1>
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
<body>
    <body class="bg-gray-100">
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-4xl font-bold text-center mb-8">About Us</h1>
            <p class="text-center text-lg">Welcome to our coffee shop! We are passionate about providing the best coffee experience.</p>
        </div>
    </body>
</body>
</html>