<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    @vite('resources/css/app.css')
    {{-- @vite('resources/css/rtl.css') --}}

    <!-- Global css content -->

    <!-- End of global css content-->

    <!-- Specific css content placeholder -->
    @stack('css')
    <!-- End of specific css content placeholder -->
</head>
