@extends('layouts.base')

@section('title', $coffee->title)

@section('content')
<div id="pozadi">
    <br><br>
    <div class="menu-okave">
        <div class="absolute top-0 right-0 m-4">
            {{-- Only show the favorite star to signed in users --}}
            @auth
                <form action="{{ route('coffee.favorite', $coffee->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="text-yellow-500" id="favorite-star">
                        <i class="{{ Auth::user()->favorites->contains($coffee->id) ? 'fas' : 'far' }} fa-star text-2xl"></i>
                    </button>
                </form>
            @endauth
        </div>
        <div class="grid grid-cols-2 gap-5">
            <div class="letec" >
                <img class="obrazek-leva" src="{{ asset('storage/' . $coffee->image_path) }}" 
                            alt="{{ $coffee->title }}"
                            class="mb-4 rounded-xl overflow-hidden">
            </div>
            <div class="letec2" >
                <h1 class="text-4xl font-bold text-center mb-8">{{ $coffee->title }}</h1>
                <p class="text-prava" class="text-lg">{{ $coffee->description }}</p>
            </div>
        </div>
    </div>
</div>
@endsection