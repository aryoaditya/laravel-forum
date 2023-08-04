<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussion Forum</title>
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous">
    <style>
        .updateTime{
            color: grey;
        }
    </style>
</head>
<body>
    @include('layouts.app.header')

    <div class="container mt-4">
        @yield('content')
    </div>

    <div class="container">
        @include('layouts.app.footer')
    </div>

    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
</body>
</html>