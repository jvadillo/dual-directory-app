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
    
    <div class="relative min-h-screen bg-gray-100">

        <!-- NOTIFICATIONS -->	
        @include('components/alert-messages')

        <!-- Page Heading -->
        <header class="text-blue-500 bg-white body-font shadow mb-2">
            <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                <a href="/companies" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-gradient-to-r from-blue-500 to-green-500 rounded-full" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z">
                    </svg>
                    <span class="ml-3 bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-green-500 text-3xl font-black">Dual Companies</span>
                </a>
                <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                    <!-- LINK NORMAL <a class="mr-5 hover:text-gray-900">First Link</a>-->
                    <a class="mr-5 hover:text-blue-900">About</a>
                    <a class="mr-5 hover:text-gray-900">Contacto</a>
                    @auth
                    <span class="mr-5">| Hola {{ Auth::user()->name }} (<a class="hover:text-gray-900" href="{{ route('logout') }}">Desconectar</a>)</span>
                    @endauth
                </nav>
                @can('create-company', $post)
                <a class="inline-flex items-center py-1 px-3 focus:outline-none rounded text-base mt-4 md:mt-0 text-white bg-blue-500 hover:bg-blue-700 ">SALIR
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
                @endauth
                @guest
                <a class="inline-flex items-center py-1 px-3 focus:outline-none rounded text-base mt-4 md:mt-0 text-white bg-blue-500 hover:bg-blue-700 ">ACCEDER
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
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