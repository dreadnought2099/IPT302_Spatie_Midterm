@extends('layouts.app')

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
    </form>
@endsection
