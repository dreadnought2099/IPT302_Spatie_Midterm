<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/htmx.org@2.0.4"></script>
    <title>IPT 302 Midterm Exam</title>
</head>

<body class="overflow-hidden">
    @include('components.navbar')

    <div class="container">
        @yield('content')
    </div>
</body>

</html>
