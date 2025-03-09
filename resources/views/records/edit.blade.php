@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Edit Record</h1>
        <form action="{{ route('records.update', $record) }}" method="POST">
            @csrf @method('PUT')
            <input type="text" name="name" value="{{ $record->name }}" required>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
