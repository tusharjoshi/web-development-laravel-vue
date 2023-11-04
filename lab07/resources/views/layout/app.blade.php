<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Using Layouts in Blade</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    @stack('styles')
</head>
<body>
    @include('layout.header')
    <div class="container">
        <div class="content">
            @yield('appContents')
        </div>
    </div>
    @include('layout.footer')
</body>
</html>
