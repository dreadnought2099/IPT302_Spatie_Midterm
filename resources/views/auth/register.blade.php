@extends('layouts.app')

@section('content')
    <div class="w-screen h-screen flex flex-col justify-start items-center bg-gray-200 pt-32">
        <form action="{{ route('register') }}" method="POST"
            class="w-full max-w-sm border border-primary space-y-6 bg-white p-6 rounded-lg shadow-lg">
            @csrf

            <h2 class="text-2xl font-bold text-dark text-center mb-6">Register<span class="text-primary">!</span></h2>

            <div class="pt-4">
                @if (session('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-3 rounded-md mb-4">
                        {{ session('success') }}
                    </div>
                @endif
    
                @if (session('error'))
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-3 rounded-md mb-4">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
            
            <div class="relative bg-inherit">
                <input type="text" id="name" name="name" placeholder="name" value="{{ old('name') }}" required
                    class="peer bg-transparent py-3 w-full rounded-md text-gray-700 placeholder-transparent ring-1 px-4 ring-gray-400 focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                <label for="name"
                    class="absolute cursor-text left-0 -top-3 text-sm text-gray-600 bg-inherit mx-1 px-1 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-placeholder-shown:top-2 peer-focus:-top-3 peer-focus:text-primary peer-focus:text-sm transition-all">
                    Enter Name
                </label>
            </div>

            <div class="relative bg-inherit">
                <input type="email" id="email" name="email" placeholder="email" value="{{ old('email') }}" required
                    class="peer bg-transparent py-3 w-full rounded-md text-gray-700 placeholder-transparent ring-1 px-4 ring-gray-400 focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                <label for="email"
                    class="absolute cursor-text left-0 -top-3 text-sm text-gray-600 bg-inherit mx-1 px-1 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-placeholder-shown:top-2 peer-focus:-top-3 peer-focus:text-primary peer-focus:text-sm transition-all">
                    Enter email
                </label>
            </div>

            <div class="relative bg-inherit">
                <input type="password" id="password" name="password" placeholder="password" required
                    class="peer bg-transparent py-3 w-full rounded-md text-gray-700 placeholder-transparent ring-1 px-4 ring-gray-400 focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                <label for="password"
                    class="absolute cursor-text left-0 -top-3 text-sm text-gray-600 bg-inherit mx-1 px-1 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-placeholder-shown:top-2 peer-focus:-top-3 peer-focus:text-primary peer-focus:text-sm transition-all">
                    Enter password
                </label>
            </div>

            <div class="relative bg-inherit">
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="password"
                    required
                    class="peer bg-transparent py-3 w-full rounded-md text-gray-700 placeholder-transparent ring-1 px-4 ring-gray-400 focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                <label for="password_confirmation"
                    class="absolute cursor-text left-0 -top-3 text-sm text-gray-600 bg-inherit mx-1 px-1 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-placeholder-shown:top-2 peer-focus:-top-3 peer-focus:text-primary peer-focus:text-sm transition-all">
                    Confirm password
                </label>
            </div>

            <div class="flex flex-col items-center gap-3">
                <button type="submit"
                    class="mt-2 w-full bg-primary hover:bg-white hover:text-primary border-1 hover:border-primary text-white font-medium py-2 rounded-lg transition duration-300">
                    Register
                </button>
                <div class="text-[16px]">
                    <span class="text-gray-400">Already have an account?</span>
                    <a href="{{ route('login') }}">
                        <span class="hover-underline-hyperlink text-[16px]">
                            Log <span class="text-primary">in</span>
                        </span>
                    </a>
                </div>
            </div>
        </form>
    </div>
@endsection
