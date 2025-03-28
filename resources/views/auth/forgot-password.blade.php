@extends('layouts.app')

@section('content')
    <div class="relative bg-inherit">
        <input type="email" id="email" name="email" placeholder="email" required
            class="peer bg-transparent py-3 w-full rounded-md text-gray-700 placeholder-transparent ring-1 px-4 ring-gray-400 focus:ring-2 focus:ring-primary focus:border-primary outline-none">
        <label for="email"
            class="absolute cursor-text left-0 -top-3 text-sm text-gray-600 bg-inherit mx-1 px-1 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-placeholder-shown:top-2 peer-focus:-top-3 peer-focus:text-primary peer-focus:text-sm transition-all">
            Enter your email
        </label>
    </div>
@endsection
