<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kursus Ryan Komputer')</title>
    @include('include.style')
</head>
<body>
    @include('include.header')
    <main>
        @yield('content')
    </main>
    @include('include.footer')
    @include('include.script')
</body>
</html>