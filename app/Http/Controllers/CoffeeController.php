<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use Illuminate\Http\Request;

class CoffeeController extends Controller
{
    public function show($id)
    {
        // find the coffee by ID or throws an error
        $coffee = Coffee::findOrFail($id);

        return view('coffee.show', compact('coffee'));
    }
}
