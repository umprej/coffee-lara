<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    protected $fillable = ['title', 'description', 'image_path'];

    public function favoritedBy() {
        return $this->belongsToMany(User::class, 'favorites');
    }
}
