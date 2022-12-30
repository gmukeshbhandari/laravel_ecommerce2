<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','MB Online Shopping')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/header_custom.css') }}">
    <script src="{{ asset('js/custom.js') }}"> </script>
    {{-- can also be done URL::to('js/custom.js') or {{ asset('cs/custom.css') }}. Second Method is used to call asset within public director such as css/bootstrap.miin.css, js/bootstrap.min.js, images/frontimage.jpg etc while first method using URL::to allows us to create link to a url on our site. also we can set second parameter using URL::to--}}
</head>
<body>
    @include('layouts.header')
    {{-- {{ View::make('layouts.header') }} can also be done instead of @include('layouts.header')--}}
    @yield('content')
    @include('layouts.footer')
    {{-- {{ View::make('layouts.footer') }} can also be done instead of @include('layouts.footer')--}}
</body>
</html>