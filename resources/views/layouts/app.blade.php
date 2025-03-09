<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IPT 302 Midterm Exam</title>
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('records.index') }}">Records</a>
        <a href="{{ route('records.create') }}">Add Record</a>
    </nav>

    <div class="container">
        @yield('content')   
    </div>
</body>
</html>