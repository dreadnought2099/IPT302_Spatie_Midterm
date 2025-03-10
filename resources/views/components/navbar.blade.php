<nav class="bg-primary flex justify-between items-center p-5 text-white">
    <div>
        <a href="{{ url('/') }}" class="text-3xl text-white font-bold hover-underline">
            RMAGALLANEZ
        </a>
    </div>

    <div class="flex gap-5">
        <a href="{{ url('/') }}" class="hover-underline">Home</a>
        <a href="{{ route('records.index') }}" class="hover-underline">Records</a>
        <a href="{{ route('records.create') }}" class="hover-underline">Add Record</a>
        {{-- <a href="{{ route('records.edit') }}" class="hover-underline">Edit Record</a> --}}
        @auth

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="hover-underline">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="hover-underline">Login</a>
        @endauth
    </div>
</nav>
