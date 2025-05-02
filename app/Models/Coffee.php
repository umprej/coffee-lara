<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image_path',
        'created_by',
    ];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function favoritedBy() {
        return $this->belongsToMany(User::class, 'favorites');
    }
}
