<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title') | Admin Alfabank</title>
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
</head>

<body>

    @include('layouts.admin.sidebar')

    <div id="main">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Admin Panel</span>

        <div class="float-right">
            <span>Admin</span>
            <img src="assets/img/team/team-1.jpg" width="30" height="30" class="rounded-circle" alt="">
        </div>
        @yield('contents')
        @include('layouts.admin.alert')
    </div>

    <script src="{{ asset('/assets/js/dashboard.js') }}"></script>
</body>

</html>