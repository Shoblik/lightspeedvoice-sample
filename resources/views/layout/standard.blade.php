<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}" />
    <title>@yield('title')</title>
</head>
<body>
<div class='min-height'>
    @yield('main')
</div>
@include('site/footer')
</body>
</html>
