<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title-block')</title>
    <link rel="shortcut icon" href="img\logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }} ">
</head>

<body>
    @include('inc.header')


    @yield('content')


    @include('inc.footer')

</body>
</html>
