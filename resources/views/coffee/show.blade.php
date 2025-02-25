@extends('layouts.base')

@section('title', $coffee->title)

@section('content')
    <div class="grid grid-cols-2 gap-5">
        <div class="container mx-auto px-4 py-8">
            <img src="{{ asset('storage/' . $coffee->image_path) }}" 
                        alt="{{ $coffee->title }}"
                        class="w-full h-48 object-cover mb-4 rounded-xl raoverflow-hidden">
        </div>
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-4xl font-bold text-center mb-8">{{ $coffee->title }}</h1>
            <p class="text-lg">{{ $coffee->description }}</p>
        </div>
    </div>
@endsection