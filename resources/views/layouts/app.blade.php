<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Relab') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    
    @yield('styles')
    
     @yield('links')

</head>
<body>
    
    
    <div id="app">
        
        @yield('nav')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer> ITTG ISC ©2018~2019 – Todos los derechos reservados. Desarrollador: <a href="mailto:cristianruiz1195@gmail.com" class="call-to-action" style="color:#000;">Ing. Cristian Ruiz</a></footer>

    @yield('scripts')
</body>


</html>
