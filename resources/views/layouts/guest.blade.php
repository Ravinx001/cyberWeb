<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>CySec</title>
    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('images/logo.webp') }}">

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    @vite('resources/js/app.js')
</head>

<body style="background-color: #000000; color: #ffffff;">

    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">

            <nav class="navbar navbar-expand navbar-dark" style="background-color: #1a1a1a;">
                <!-- Navbar Brand-->
                <a style="color: #0bf5ea;" class="navbar-brand mx-auto fs-4 fw-bold" href="/">CySec</a>
            </nav>

            {{ $slot }}

        </div>

        @include('layouts.guest-footer')

    </div>

</body>

</html>
