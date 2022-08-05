<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel 8.x CRUD from Scratch</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container">

    <div class="text-center" style="margin: 50px 0 50px 0;"><a href="{{url("students")}}">
    @yield('content')
</div>

</body>
</html>