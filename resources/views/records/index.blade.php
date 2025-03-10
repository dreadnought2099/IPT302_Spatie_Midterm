@extends('layouts.app')
@include('components.navbar')

@section('content')
    <h2>Records</h2>
    @can('Data Entry')
        <a href="{{ route('records.create') }}">Add New Record</a>
    @endcan

    @foreach ($records as $record)
        <div>
            <h3>{{ $record->title }}</h3>
            <p>Author: {{ $record->author }}</p>
            <p>Year: {{ $record->publication_year }}</p>
            <p>Category: {{ $record->category }}</p>
            <p>ISBN: {{ $record->isbn }}</p>

            @can('Administrator')
                <a href="{{ route('records.edit', $record->id) }}">Edit</a>
                <form action="{{ route('records.destroy', $record->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            @endcan
        </div>
    @endforeach
@endsection
