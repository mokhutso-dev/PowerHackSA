<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/academy.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modals.css') }}">

    {{-- <link href="index.css" rel="stylesheet" /> --}}
</head>

<body>
    @if (Session::has('login-success'))
        <div class="alert-success-cont top-0 pos-abs d-flex center-content w-100">
            <div class="alert-success m-auto fw-bold ">
                {{ Session::get('login-success') }}
            </div>
        </div>
    @elseif (Session::has('logout-success'))
        <div class="alert-success-cont top-0 pos-abs d-flex center-content w-100">
            <div class="alert-success m-auto fw-bold ">
                {{ Session::get('logout-success') }}
            </div>
        </div>
    @endif
    <!-- Navigation bar here -->
    @include('_partials/_header')

    @yield('content')
    <!-- Footer here  -->

    @include('_partials/_footer')

    <script>
        setTimeout(() => document.querySelectorAll('.alert-success-cont')
            .forEach(element => element.style.display = "none"), 3500)
    </script>
</body>

</html>
