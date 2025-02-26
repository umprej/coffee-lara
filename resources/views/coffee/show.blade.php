@extends('layouts.base')

@section('title', $coffee->title)

@section('content')
<div id="pozadi">
<br><br>
<div class="menu-okave"><div class="absolute top-0 right-0 m-4">
            <a href="#" class="text-yellow-500" id="favorite-star">
                <i class="far fa-star text-2xl"></i>
            </a>
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
<script>
        document.addEventListener('DOMContentLoaded', function() {
            const star = document.getElementById('favorite-star');
            star.addEventListener('click', function(event) {
                event.preventDefault();
                const icon = star.querySelector('i');
                icon.classList.toggle('far'); // Toggle the 'far' class (Font Awesome Regular) to show an empty star
        		icon.classList.toggle('fas'); // Toggle the 'fas' class (Font Awesome Solid) to show a filled star
            });
        });
    </script>
@endsection