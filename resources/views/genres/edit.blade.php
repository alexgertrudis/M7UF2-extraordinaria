@extends('layout')
<!-- Make sure this layout includes Tailwind CSS -->

@section('content')
<div class="container mx-auto px-4 mt-10">
    <div class="max-w-md mx-auto">
        <h1 class="text-center text-3xl font-bold mb-6">Edit Genre</h1>

        @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('genres.update', $genre->id) }}" method="POST" class="mt-6">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name', $genre->name) }}"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
            </div>
            <div class="flex justify-center">
                <button type="submit"
                    class="px-6 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-green-500 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.1/dist/tailwind.min.css" rel="stylesheet">