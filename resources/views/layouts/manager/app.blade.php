<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Dashboard</title>
    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('images/checklist.webp') }}">

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    @vite('resources/js/app.js')

</head>

<body class="sb-nav-fixed">

    @include('layouts.manager.navigation')

    <div id="layoutSidenav">

        @include('layouts.manager.sidebar')

        <div id="layoutSidenav_content">

            {{ $slot }}

            @include('layouts.manager.app-footer')

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
</body>

</html>
