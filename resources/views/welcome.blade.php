@extends('layouts.base')

@section('title', 'Coffee Types')

@section('content')
    <section id="menukafe1">
        <div id="pozadi">
            <div class="hlavni">
                <h1 class="nadpis">Coffee drinks</h1>

                <div class="menu-grid grid grid-cols-3 gap-4">
                    @foreach($coffees as $coffee)
                        @if($coffee->image_path)
                            <div class="text-center">
                                <a href="{{ route('coffee.show', $coffee->id) }}">
                                    <img class="produkt" src="{{ asset('storage/' . $coffee->image_path) }}" alt="{{ $coffee->title }}">
                                </a>
                                <p class="text-white mt-2">{{ $coffee->title }}</p>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
