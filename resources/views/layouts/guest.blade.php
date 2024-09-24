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

<body style="background-color: rgb(0,156,234);">

    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">

            <nav class="navbar navbar-expand navbar-light bg-light">
                <!-- Navbar Brand-->
                <a style="color: rgb(0,156,234);" class="navbar-brand mx-auto fs-4 fw-bold" href="/">CySec</a>
            </nav>

            {{ $slot }}

        </div>

        @include('layouts.guest-footer')

    </div>

</body>

</html>
