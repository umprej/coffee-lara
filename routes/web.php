<?php

use Illuminate\Support\Facades\Route;

use App\Models\Coffee;

Route::get('/', function () {
    $coffees = Coffee::all();
    return view('welcome', ['coffees' => $coffees]);
});
