@extends('layouts.app')
@section('title', 'Add Record')
@include('components.navbar')

@section('content')
    <h2>Add New Record</h2>
    <form action="{{ route('records.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title" required>
        <input type="text" name="author" placeholder="Author" required>
        <input type="number" name="publication_year" placeholder="Year" required>
        <input type="text" name="category" placeholder="Category" required>
        <input type="text" name="isbn" placeholder="ISBN" required>
        <button type="submit">Save</button>

        <a href="{{ route('records.index') }}" class="btn btn-secondary mt-3">Back to Records</a>
    </form>
@endsection
