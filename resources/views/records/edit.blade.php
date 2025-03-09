@extends('layouts.app')

@section('content')
    <h2>Edit Record</h2>
    <form action="{{ route('records.update', $record->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $record->title }}" required>
        <input type="text" name="author" value="{{ $record->author }}" required>
        <input type="number" name="publication_year" value="{{ $record->publication_year }}" required>
        <input type="text" name="category" value="{{ $record->category }}" required>
        <input type="text" name="isbn" value="{{ $record->isbn }}" required>
        <button type="submit">Update</button>
    </form>
@endsection
