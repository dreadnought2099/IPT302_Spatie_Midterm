@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Add Record</h1>
        <form action="{{ route('records.store') }}" method="POST">
            @csrf
            {{-- Title Section --}}
            <div>
                <label for="title">Title</label>
                <input type="text" name="title" placeholder="Title" required>
            </div>

            {{-- Author Section --}}
            <div>
                <label for="author">Author</label>
                <input type="text" name="author" placeholder="Author" required>
            </div>

            {{-- Publication Year Section --}}
            <div>
                <label for="publication_year">Publication Year</label>
                <input type="number" name="publication_year" placeholder="Publication Year" required>
            </div>

            {{-- Category Section --}}
            <div>
                <label>Category</label>
                <input type="text" name="category" placeholder="Category" required>
            </div>

            {{-- ISBN Section --}}
            <div>
                <label>ISBN</label>
                <input type="text" name="isbn" placeholder="ISBN" required>
            </div>

            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
@endsection