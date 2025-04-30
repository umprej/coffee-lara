<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('coffee_images', 'public');
        } else {
            $imagePath = 'coffee_images/nokafe.jpg';
        }

        Coffee::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $imagePath,
            //TODO: Needs to be fixed, as it's not getting the user ID, every added coffee is assigned an id of '1'
            'created_by' => Auth::id() ?? 1, // Use user ID or '1' for admin if not created by a user
        ]);

        return redirect()->route('root')->with('success', 'Coffee added successfully.');
    }
}
