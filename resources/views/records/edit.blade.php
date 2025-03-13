@extends('layouts.app')

@section('title', 'Edit Record')

@section('content')
    <div
        class="container mx-auto max-w-5xl  bg-white mt-4 border border-primary rounded-lg shadow-md overflow-y-auto h-[80vh]">
        <div class="py-2 px-4 sticky top-0 bg-white ">

            <h1 class="text-2xl font-bold ">Edit <span class="text-primary">Record</span></h1>

        </div>
        {{-- Display Validation Errors --}}
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('records.update', $record) }}" method="POST" class="space-y-4 p-6 rounded-lg">
            @csrf
            @method('PUT')

            {{-- Reusable input class --}}
            @php
                $inputClasses =
                    'w-full border border-gray-400 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary outline-none ring-gray-400';
            @endphp

            {{-- Title --}}
            <div>
                <label class="block font-semibold">Title</label>
                <input type="text" name="title" value="{{ old('title', $record->title) }}" required
                    class="{{ $inputClasses }}">
            </div>

            {{-- Author --}}
            <div>
                <label class="block font-semibold">Author</label>
                <input type="text" name="author" value="{{ old('author', $record->author) }}" required
                    class="{{ $inputClasses }}">
            </div>

            {{-- Publication Year --}}
            <div>
                <label class="block font-semibold">Publication Year</label>
                <input type="number" name="publication_year"
                    value="{{ old('publication_year', $record->publication_year) }}" required class="{{ $inputClasses }}">
            </div>

            {{-- Category --}}
            <div>
                <label class="block font-semibold">Category</label>
                <input type="text" name="category" value="{{ old('category', $record->category) }}" required
                    class="{{ $inputClasses }}">
            </div>

            {{-- ISBN --}}
            <div>
                <label class="block font-semibold">ISBN</label>
                <input type="text" name="isbn" value="{{ old('isbn', $record->isbn) }}" required
                    class="{{ $inputClasses }}">
            </div>

            {{-- Submit Button --}}
            <button type="submit"
                class="border-1 hover:border-primary bg-white hover:bg-white hover:text-primary text-dark font-bold py-2 px-4 rounded transition hover:scale-105 hover:opacity-80 duration-300 ease-in-out">
                Update Record
            </button>
        </form>
    </div>
@endsection
