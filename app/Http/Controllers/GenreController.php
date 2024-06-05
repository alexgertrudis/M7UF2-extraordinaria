<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return view('genres.index', ['genres' => $genres]);
    }

    public function create()
    {
        return view('genres.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:genres,name'
        ]);

        Genre::create($validatedData);
        return redirect('/genres')->with('success', 'Genre created successfully.');
    }

    public function show(Genre $genre)
    {
        return view('genres.show', ['genre' => $genre]);
    }

    public function edit(Genre $genre)
    {
        return view('genres.edit', ['genre' => $genre]);
    }

    public function update(Request $request, Genre $genre)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:genres,name,' . $genre->id
        ]);

        $genre->update($validatedData);
        return redirect('/genres')->with('success', 'Genre updated successfully.');
    }

    public function destroy(Genre $genre)
    {
        $genre->delete();
        return redirect('/genres')->with('success', 'Genre deleted successfully.');
    }
}