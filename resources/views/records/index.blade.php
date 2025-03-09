@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Records</h1>
        <a href="{{ route('records.create') }}" class="btn btn-primary">Create Record</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records as $record)
                    <tr>
                        <td>{{ $record->id }}</td>
                        <td>{{ $record->name }}</td>
                        <td>
                            @role('Administrator')
                                <a href="{{ route('records.edit', $record) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('records.destroy', $record) }}" method="POST" style="display:inline;">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            @endrole
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection