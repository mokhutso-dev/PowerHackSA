<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth/const.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth/signup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth/admin.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    @include('_partials._header')

    <div class="login-form-cont d-flex t">
        @yield('auth_content')
    </div>

</body>

</html>
