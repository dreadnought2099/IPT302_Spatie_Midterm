@extends('layouts.app')

@section('content')
    <div class="w-screen h-screen flex flex-col justify-start items-center bg-gray-200 pt-32">
        <form action="{{ route('login') }}" method="POST"
            class="bg-white p-6 rounded-lg shadow-lg w-full max-w-sm border border-primary space-y-8">
            @csrf
            <h2 class="text-2xl font-bold text-dark text-center mb-6">Log <span class="text-primary">in</span></h2>

            <div class="relative bg-inherit">
                <input type="email" id="email" name="email" placeholder="email" required
                    class="peer bg-transparent py-3 w-full rounded-md text-gray-700 placeholder-transparent ring-1 px-4 ring-gray-400 focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                <label for="email"
                    class="absolute cursor-text left-0 -top-3 text-sm text-gray-600 bg-inherit mx-1 px-1 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-placeholder-shown:top-2 peer-focus:-top-3 peer-focus:text-primary peer-focus:text-sm transition-all">
                    Email
                </label>
            </div>

            <div class="relative bg-inherit">
                <input type="password" id="password" name="password" placeholder="password" required
                    class="peer bg-transparent py-3 w-full rounded-md text-gray-700 placeholder-transparent ring-1 px-4 ring-gray-400 focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                <label for="password"
                    class="absolute cursor-text left-0 -top-3 text-sm text-gray-600 bg-inherit mx-1 px-1 transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-placeholder-shown:top-2 peer-focus:-top-3 peer-focus:text-primary peer-focus:text-sm">
                    Password
                </label>
            </div>

            <button type="submit"
                class="mt-2 w-full bg-primary hover:bg-gray-100 hover:text-primary border-2 hover:border-primary text-white font-medium py-2 rounded-lg transition duration-300">
                Log in
            </button>
        </form>

        @if (session('error'))
            <div>{{ session('error') }}</div>
        @endif
    </div>
@endsection
