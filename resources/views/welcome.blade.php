@extends('layouts.base')

@section('title', 'Coffee Types')

@section('content')
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
@endsection