@extends('layouts.app')
{{-- @section('title', 'List of records') --}}

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Records</h1>
        <a href="{{ route('records.create') }}"
            class="bg-dark hover:bg-gray-100 hover:text-primary border-2 hover:border-primary text-white font-bold py-2 px-4 rounded-lg mb-4 inline-block hover:scale-105 hover:opacity-80 duration-300 ease-in-out">
            Add Record
        </a>

        <table class="min-w-full bg-white border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="py-2 px-4 border border-gray-300 text-left w-10">ID</th>
                    <th class="py-2 px-4 border border-gray-300 text-left">Title</th>
                    <th class="py-2 px-4 border border-gray-300 text-left">Author</th>
                    <th class="py-2 px-4 border border-gray-300 text-left w-32">Publication Year</th>
                    <th class="py-2 px-4 border border-gray-300 text-left">Category</th>
                    <th class="py-2 px-4 border border-gray-300 text-left w-40">ISBN</th>
                    <th class="py-2 px-4 border border-gray-300 text-center w-40">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records as $record)
                    <tr class="hover:bg-gray-50">
                        <td class="py-2 px-4 border border-gray-300">{{ $record->id }}</td>
                        <td class="py-2 px-4 border border-gray-300">{{ $record->title }}</td>
                        <td class="py-2 px-4 border border-gray-300">{{ $record->author }}</td>
                        <td class="py-2 px-4 border border-gray-300 text-center">{{ $record->publication_year }}</td>
                        <td class="py-2 px-4 border border-gray-300">{{ $record->category }}</td>
                        <td class="py-2 px-4 border border-gray-300">{{ $record->isbn }}</td>
                        <td class="py-2 px-4 border border-gray-300 text-center">
                            @if (auth()->check() && auth()->user()->hasRole('Administrator'))
                                <div class="flex justify-center space-x-2">
                                    <a href="{{ route('records.edit', $record) }}"
                                        class="bg-dark hover:bg-gray-100 hover:text-primary border-1 hover:border-primary text-white font-bold py-1 px-3 rounded transition cursor-pointer hover:scale-110 hover:opacity-80 duration-300 ease-in-out">
                                        Edit
                                    </a>
                                    <form action="{{ route('records.destroy', $record) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-primary hover:bg-gray-100 hover:text-primary border-1 hover:border-primary text-white font-bold py-1 px-3 rounded transition cursor-pointer hover:scale-105 hover:opacity-80 duration-400 ease-in-out">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
