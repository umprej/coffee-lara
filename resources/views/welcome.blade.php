@extends('layouts.base')

@section('title', 'Coffee Types')

@section('content')
    <section id="menukafe1">
        <main id="pozadi">
            <main class="hlavni">
                <br>
                <div grid grid-cols-3 class="menu-grid"> <br>
                    <h1 class="nadpis">Coffee & Spirits</h1> <br>

                    @foreach($coffees as $coffee)
                        @if($coffee->image_path)
                            <a href="{{ route('coffee.show', $coffee->id) }}" class=""><img class="produkt"
                            src="{{ asset('storage/' . $coffee->image_path) }}"
                            alt="{{ $coffee->title }}"> 
                            </a>
                            <br> <br>
                        @endif
                    @endforeach
                </div>
            </main>
        </main>
    </section>
@endsection