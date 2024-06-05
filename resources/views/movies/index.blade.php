@extends('layout')
<!-- Ensure this layout includes Tailwind CSS -->

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold mb-6">Movies</h1>
    <a href="{{ route('movies.create') }}"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Create Movie</a>

    <table class="min-w-full table-auto leading-normal">
        <thead>
            <tr class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">Title</th>
                <th class="py-3 px-6 text-left">Release Year</th>
                <th class="py-3 px-6 text-left">Genre</th>
                <th class="py-3 px-6 text-left">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6 text-left">{{ $movie->title }}</td>
                <td class="py-3 px-6 text-left">{{ $movie->release_year }}</td>
                <td class="py-3 px-6 text-left">{{ $movie->genre->name }}</td>
                <td class="py-3 px-6 text-left flex space-x-2">
                    <a href="{{ route('movies.show', $movie->id) }}"
                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 rounded">View</a>
                    <a href="{{ route('movies.edit', $movie->id) }}"
                        class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded">Edit</a>
                    <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.1/dist/tailwind.min.css" rel="stylesheet">