<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Dual Directory App') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            
            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <h3 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Dual Directory</h3>
                    <p class="mt-4 text-gray-500 dark:text-gray-400">
                        @yield('cabecera-section')
                    </p>
                </div>
                <div>
                @auth
                    <p>{{ Auth::user()->name }} (<a href="{{ route('logout') }}">Desconectar</a>)</p>
                @else
                    <p>Usuario no conectado</p>
                @endauth

                    
                    
                </div>
                
            </header>

            <!-- Page Content -->
            
            <main class="container">
                @yield('content')
            </main>
        </div>
        @yield('body-scripts')
    </body>
</html>
