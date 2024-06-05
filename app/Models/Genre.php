<?php

namespace App\Models;
use App\Models\Movie;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function Movies()
    {
        return $this->hasMany(Movie::class);
    }
}