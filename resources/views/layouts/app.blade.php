<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased dark:bg-primary-dark">
    <x-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <style>
            .contenedor {
                max-width: 1200px;
                width: 90%;
                margin: 0 auto;
            }

            .bg-principal {
                background-color: #2a3275;
            }

            /* main{
                    background-color: #232323;
                } */
        </style>

        <main>
            <div class="dark:bg-primary-dark dark:text-secondary-light">
                {{ $slot }}
            </div>
        </main>
    </div>
    <!-- ejecutar el servidor de node para que no de error esta linea de codigo -->
    <script src="{{ mix('js/app.js') }}"></script>
    <footer class="text-center py-8 dark:bg-secondary-dark">
        @FitoMolinaLocales {{ date('Y') }} - Todos los derechos zurdos
    </footer>
    @stack('modals')

    @livewireScripts
</body>

</html>