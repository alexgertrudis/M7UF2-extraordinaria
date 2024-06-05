@extends('layout')
<!-- Ensure this layout includes Tailwind CSS -->

@section('content')
<div class="max-w-4xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold mb-6">Genre Details</h1>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-6">
            <h5 class="text-lg font-medium mb-2">Name: {{ $genre->name }}</h5>
        </div>
    </div>

    <!-- Correct the route name if it has a typo -->
    <a href="{{ route('genres.index') }}"
        class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">Back to
        Genres</a>
</div>
@endsection
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.1/dist/tailwind.min.css" rel="stylesheet">