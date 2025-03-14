@extends('layouts.app')

@section('content')
    <div class="w-screen h-screen flex flex-col justify-start items-center bg-gray-200 pt-32">
        <form action="{{ route('register') }}" method="POST">
            @csrf

            <h2 class="text-2xl font-bold text-dark text-center mb-6">Log <span class="text-primary">in</span></h2>

            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>

            <div class="relative bg-inherit">
                <input type="text" id="name" name="name" placeholder="name" value="{{ old('name') }}" required
                    class="peer bg-transparent py-3 w-full rounded-md text-gray-700 placeholder-transparent ring-1 px-4 ring-gray-400 focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                <label for="email"
                    class="absolute cursor-text left-0 -top-3 text-sm text-gray-600 bg-inherit mx-1 px-1 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-placeholder-shown:top-2 peer-focus:-top-3 peer-focus:text-primary peer-focus:text-sm transition-all">
                    Name
                </label>
            </div>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>

            <button type="submit">Register</button>
        </form>
    </div>
