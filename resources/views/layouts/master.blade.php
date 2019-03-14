<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Furbook</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="m-3">
    <div class="container">
        <div class="page-header">
            @yield('header')
        </div>
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>            
        @endif
        @yield('content')
    </div>
</body>
</html>