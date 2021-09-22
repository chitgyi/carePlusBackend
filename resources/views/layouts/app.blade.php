<!DOCTYPE html>
<html lang=" {{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="shortcut icon" href="/icons/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') </title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="bg-gray-100 text-gray-800">
    <div class="box w-0 lg:w-2/12 h-0 lg:h-screen hidden lg:grid fixed">
        <x-sidebar />
    </div>
    <div class="grid lg:grid-cols-12 sm:grid-cols-1">
        <div class="col-span-2"></div>
        <div class="col-span-10">
            <x-main>
                {{ $slot }}
            </x-main>
        </div>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
