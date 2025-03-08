<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller {
    public function toggleFavorite($coffeeId) {
        $user = Auth::user();
        $coffee = Coffee::findOrFail($coffeeId);

        if ($user->favorites()->where('coffee_id', $coffeeId)->exists()) {
            $user->favorites()->detach($coffeeId);
        } else {
            $user->favorites()->attach($coffeeId);
        }

        return back();
    }
}
