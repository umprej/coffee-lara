<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use Illuminate\Http\Request;

class CoffeeController extends Controller
{
    // Display the form for creating a new coffee drink
    public function show($id)
    {
        // find the coffee by ID or throws an error
        $coffee = Coffee::findOrFail($id);

        return view('coffee.show', compact('coffee'));
    }

    // Handle the form submission and store the new coffee drink
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

        $coffee = new Coffee($request->all());

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('coffee_images', 'public');
        } else {
            $imagePath = 'coffee_images/nokafe.jpg';
        }

        Coffee::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $imagePath,
        ]);

        return redirect()->route('root')->with('success', 'Coffee added successfully.');
    }
}
