<?php

namespace Database\Seeders;
use App\Models\Movie;
use App\Models\Genre;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
            ['title' => 'Avengers: Endgame', 'release_year' => 2019, 'genre_id' => Genre::where('name', 'Action')->first()->id],
            ['title' => 'The Hangover', 'release_year' => 2009, 'genre_id' => Genre::where('name', 'Comedy')->first()->id],
            ['title' => 'Inception', 'release_year' => 2010, 'genre_id' => Genre::where('name', 'Mystery')->first()->id],
            ['title' => 'Parasite', 'release_year' => 2019, 'genre_id' => Genre::where('name', 'Drama')->first()->id],
            ['title' => 'The Shining', 'release_year' => 1980, 'genre_id' => Genre::where('name', 'Horror')->first()->id]
        ];

        foreach ($movies as $movie) {
            Movie::create($movie);
        }
    }
}