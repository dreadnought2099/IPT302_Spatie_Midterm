@extends('layouts.app')
{{-- @section('title', 'Edit Record') --}}

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Edit Record</h1>

        <form action="{{ route('records.update', $record) }}" method="POST" class="space-y-4 bg-white p-6 rounded shadow-md">
            @csrf
            @method('PUT')

            {{-- Title --}}
            <div>
                <label class="block font-semibold">Title</label>
                <input type="text" name="title" value="{{ old('title', $record->title) }}" required
                    class="w-full border border-gray-300 px-3 py-2 rounded">
            </div>

            {{-- Author --}}
            <div>
                <label class="block font-semibold">Author</label>
                <input type="text" name="author" value="{{ old('author', $record->author) }}" required 
                       class="w-full border border-gray-300 px-3 py-2 rounded">
            </div>

            {{-- Publication Year --}}
            <div>
                <label class="block font-semibold">Publication Year</label>
                <input type="number" name="publication_year" value="{{ old('publication_year', $record->publication_year) }}" required 
                       class="w-full border border-gray-300 px-3 py-2 rounded">
            </div>

            {{-- Category --}}
            <div>
                <label class="block font-semibold">Category</label>
                <input type="text" name="category" value="{{ old('category', $record->category) }}" required 
                       class="w-full border border-gray-300 px-3 py-2 rounded">
            </div>

            {{-- ISBN --}}
            <div>
                <label class="block font-semibold">ISBN</label>
                <input type="text" name="isbn" value="{{ old('isbn', $record->isbn) }}" required 
                       class="w-full border border-gray-300 px-3 py-2 rounded">
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                Update Record
            </button>
        </form>
    </div>
@endsection
