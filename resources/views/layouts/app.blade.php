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
    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
    <link rel="stylesheet" href="/css/app.css">
    <!-- Scripts -->
    <script src="/js/app.js" defer></script>
</head>

<body class="font-sans antialiased">
    
    <div class="relative min-h-screen bg-gray-100">

        <!-- NOTIFICATIONS -->	
        @include('components/alert-messages')

        <!-- Page Heading -->
        <header class="text-blue-500 bg-white body-font shadow mb-2">
            <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                <a href="{{ route('landing.index') }}" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-gradient-to-r from-blue-500 to-green-500 rounded-full" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z">
                    </svg>
                    <span class="ml-3 bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-green-500 text-3xl font-black">Dual Companies</span>
                </a>
                <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                    <!-- LINK NORMAL <a class="mr-5 hover:text-gray-900">First Link</a>-->
                    <a href="{{ route('landing.index') }}" class="mr-5 text-gray-500 hover:text-gray-800">Inicio</a>
                    <a class="mr-5 text-gray-500 hover:text-gray-800">Preguntas frecuentes</a>
                    @auth
                    <a href="{{ route('company.index') }}" class="mr-5 text-gray-500 hover:text-gray-800">Directorio</a>
                    @endauth
                    <span class="mr-5 text-gray-500">|</span>
                    @auth
                    <span class="mr-5 text-gray-500 hover:text-gray-800">Hola, {{ Auth::user()->name }}</span>
                    @endauth
                </nav>
                @can('isCompanyOwner')
                <a href="{{ route('company.show', Auth::user()->company->id) }}" class="mr-3 inline-flex items-center py-1 px-3 focus:outline-none rounded text-base mt-4 md:mt-0 text-blue-500 border border-blue-500 bg-white hover:bg-blue-700 hover:text-white ">MI EMPRESA
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </a>
                @endcan
                @auth
                <a href="{{ route('logout') }}" class="inline-flex items-center py-1 px-3 focus:outline-none rounded text-base mt-4 md:mt-0 text-white bg-blue-500 hover:bg-blue-700 ">SALIR
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                </a>
                @endauth
                @guest
                <a href="{{ route('login') }}" class="mr-3 inline-flex items-center py-1 px-3 focus:outline-none rounded text-base mt-4 md:mt-0 text-white bg-blue-500 hover:bg-blue-700 ">ACCEDER
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                    </svg>
                </a>
                <a href="{{ route('register') }}" class="inline-flex items-center py-1 px-3 focus:outline-none rounded text-base mt-4 md:mt-0 text-white bg-blue-500 hover:bg-blue-700 ">DARME DE ALTA
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                    </svg>
                </a>
                @endguest
            </div>
        </header>
        

        <!-- Page Content -->

        <main class="container mx-auto">
            @yield('content')
        </main>
        
    </div>
    <footer class="text-gray-600 body-font">
        <div class="bg-white shadow-lg">
    <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
      <p class="text-gray-500 text-sm text-center sm:text-left">© 2022 Grado en Industria Digital —
        <a href="https://labur.eus/gid" class="text-gray-600 ml-1" target="_blank" rel="noopener noreferrer">@deusto</a>
      </p>
      <span class="sm:ml-auto sm:mt-0 mt-2 sm:w-auto w-full sm:text-left text-center text-gray-500 text-sm">Formación dual de calidad en Vitoria-Gasteiz</span>
    </div>
  </div></footer>
    @yield('body-scripts')
</body>

</html>