@extends('layouts.base')

@section('title', 'Your Favorite Coffee Recipes')

@section('content')
<section id="pozadi">
    <div class="container mx-auto px-4 py-8">
        <h1 class="nadpis text-4xl font-bold text-center mb-8">Your Favorite Coffee Recipes</h1>
        <div class="menu-onas">
            @auth
                @if(Auth::user()->favorites->isEmpty())
                    <p class="text-center text-lg">You have no favorite coffee recipes yet.</p>
                @else
                    <ul>
                        @foreach(Auth::user()->favorites as $favorite)
                            <li>
                                <a href="{{ route('coffee.show', $favorite->id) }}" class="text-2xl font-bold mb-4">{{ $favorite->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            @endauth
        </div>
    </div>
</section>
@endsection