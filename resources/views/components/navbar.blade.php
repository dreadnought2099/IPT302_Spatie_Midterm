<nav>
    <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ route('records.index') }}">Records</a></li>
        <li><a href="{{ route('records.create') }}">Add Record</a></li>
        @auth
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
        @else
            <li><a href="{{ route('login') }}">Login</a></li>
        @endauth
    </ul>
</nav>