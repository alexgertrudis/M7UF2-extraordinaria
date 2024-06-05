@extends('layout')
<!-- Ensure this layout includes Tailwind CSS -->

@section('content')
<div class="max-w-4xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold mb-6">Movie Details</h1>

    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <p class="mb-2"><strong>Title:</strong> {{ $movie->title }}</p>
        <p class="mb-2"><strong>Release Year:</strong> {{ $movie->release_year }}</p>
        <p class="mb-2"><strong>Genre:</strong> {{ $movie->genre->name }}</p>
    </div>

    <a href="{{ route('movies.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Back to Movies
    </a>
</div>
@endsection
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.1/dist/tailwind.min.css" rel="stylesheet">