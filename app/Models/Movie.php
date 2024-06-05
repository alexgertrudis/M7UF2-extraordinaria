<?php

namespace App\Models;
use App\Models\Genre;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    
    protected $fillable = ['title', 'release_year', 'genre_id'];

    public function Genre()
    {
        return $this->belongsTo(Genre::class);
    }
}