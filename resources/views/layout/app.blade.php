<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('title') | La Molisana </title>
</head>
<body>

    @include('partials.header')
    
     @yield('content')


    @include('partials.footer')
</body>
</html>