@include('menu.top')
@include('menu.side')

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('mabendev/adminpanel/js/MabenAdminPanel.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('mabendev/adminpanel/js/MabenAdminPanel.css') }}" rel="stylesheet">
</head>
<body>

@yield('menu.top')

<div class="container-fluid">
    <div class="row">
        @yield('menu.side')
        <main role="main" class="col-md-10 ml-md-auto py-3 px-4">
            @yield('content')
        </main>
    </div>
</div>

</body>
</html>
