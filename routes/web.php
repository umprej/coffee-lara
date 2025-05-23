<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Models\Coffee;
use App\Http\Controllers\CoffeeController;
use App\Http\Controllers\FavoriteController;


Route::get('/', function () {
    $coffees = Coffee::all();
    return view('welcome', ['coffees' => $coffees]);
})->name('root');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/favorites', function () {
    return view('favorites');
})->name('favorites');

Route::get('/coffee/create', function () {
    return view('coffee.create');
})->name('coffee.create');

Route::post('/coffee/store', [CoffeeController::class, 'store'])->name('coffee.store')->middleware('auth');

Route::get('/coffee/{id}', [CoffeeController::class, 'show'])->name('coffee.show');

Route::post('/coffee/{id}/favorite', [FavoriteController::class, 'toggleFavorite'])->name('coffee.favorite')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::delete('/coffee/{id}', [CoffeeController::class, 'destroy'])->name('coffee.destroy')->middleware('auth');

require __DIR__.'/auth.php';
