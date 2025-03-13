@extends('layouts.app')

@section('content')
    <div
        class="container mx-auto max-w-5xl bg-white mt-4 border border-primary rounded-lg shadow-md overflow-y-auto h-[80vh]">

        <h1 class="flex gap-[5px] sticky top-0 py-2 px-4 text-2xl font-bold bg-white  z-10
        ">Create <span
                class="text-primary"> Record</span></h1>


        <form action="{{ route('records.store') }}" method="POST" class="rounded-lg px-8 pt-6 pb-8 mb-4">
            @csrf

            {{-- Define reusable input field component --}}
            @php
                $inputClasses =
                    'peer py-3 w-full placeholder-transparent rounded-md text-gray-700  ring-1 px-4 ring-gray-400 focus:ring-2 focus:ring-primary focus:border-primary outline-none';
                // $labelClasses =
                //     'absolute cursor-text left-0 -top-3 text-sm text-gray-600 bg-white mx-1 px-1 transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-placeholder-shown:top-2 peer-focus:-top-3 peer-focus:text-primary peer-focus:text-sm peer-focus:bg-white';
                $labelClasses =
                    'absolute cursor-text left-0 -top-3 text-sm text-gray-600 bg-white mx-1 px-1 transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-placeholder-shown:top-2 peer-focus:-top-3 peer-focus:text-primary peer-focus:text-sm peer-focus:bg-white peer-focus:px-2 peer-focus:rounded-md';

            @endphp


            {{-- Title Section --}}
            <div class="relative bg-inherit mb-6">
                <input type="text" name="title" placeholder="Title" required class="{{ $inputClasses }}">
                <label for="title" class="{{ $labelClasses }}">Title</label>
            </div>

            {{-- Author Section --}}
            <div class="relative bg-inherit mb-6">
                <input type="text" name="author" placeholder="Author" required class="{{ $inputClasses }}">
                <label for="author" class="{{ $labelClasses }}">Author</label>
            </div>

            {{-- Publication Year Section --}}
            <div class="relative bg-inherit mb-6">
                <input type="number" name="publication_year" placeholder="Publication Year" required
                    class="{{ $inputClasses }}">
                <label for="publication_year" class="{{ $labelClasses }}">Publication Year</label>
            </div>

            {{-- Category Section --}}
            <div class="relative bg-inherit mb-6">
                <input type="text" name="category" placeholder="Category" required class="{{ $inputClasses }}">
                <label for="category" class="{{ $labelClasses }}">Category</label>
            </div>

            {{-- ISBN Section --}}
            <div class="relative bg-inherit mb-6">
                <input type="text" name="isbn" placeholder="ISBN" required class="{{ $inputClasses }}">
                <label for="isbn" class="{{ $labelClasses }}">ISBN</label>
            </div>

            {{-- Submit Button --}}
            <div class="flex items-center justify-between">
                <button type="submit"
                    class="p-4 bg-white hover:text-primary border-1 hover:border-primary text-dark font-medium py-2 rounded-lg transition hover:scale-105 hover:opacity-80 duration-300 ease-in-out">
                    Create
                </button>
            </div>
        </form>
    </div>
@endsection
