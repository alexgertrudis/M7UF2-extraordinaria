<?php

namespace Database\Seeders;
use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()  
    {
            $genres = [
                ['name' => 'Action'],
                ['name' => 'Comedy'],
                ['name' => 'Drama'],
                ['name' => 'Fantasy'],
                ['name' => 'Horror'],
                ['name' => 'Mystery'],
                ['name' => 'Romance'],
                ['name' => 'Thriller']
            ];
    
           foreach ($genres as $genre) {
              Genre::create($genre);
           }
        }
    }