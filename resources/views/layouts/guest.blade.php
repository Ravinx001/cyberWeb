<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Machine Checkups</title>
    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('images/checklist.webp') }}">

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    @vite('resources/js/app.js')
</head>

<body class="bg-primary">

    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">

            <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
                <!-- Navbar Brand-->
                <a class="navbar-brand ps-4 mx-auto fs-5 fw-bold" href="/">Machine Checkups</a>
            </nav>

            {{ $slot }}

        </div>

        @include('layouts.guest-footer')

    </div>

</body>

</html>
