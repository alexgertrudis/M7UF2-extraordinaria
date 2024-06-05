<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with('genre')->paginate(7);
        return view('movies.index', ['movies' => $movies]);
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'release_year' => 'required|integer',
            'genre_id' => 'required|exists:genres,id'
        ]);

        Movie::create($validatedData);
        return redirect('/movies')->with('success', 'Movie created successfully.');
    }

    public function show(Movie $movie)
    {
        return view('movies.show', ['movie' => $movie]);
    }

    public function edit(Movie $movie)
    {
        return view('movies.edit', ['movie' => $movie]);
    }

    public function update(Request $request, Movie $movie)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'release_year' => 'required|integer',
            'genre_id' => 'required|exists:genres,id'
        ]);

        $movie->update($validatedData);
        return redirect('/movies')->with('success', 'Movie updated successfully.');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect('/movies')->with('success', 'Movie deleted successfully.');
    }
}