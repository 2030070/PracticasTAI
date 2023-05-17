<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        {{-- @vite('resources/css/styles.css') --}}
        <title>Portal - @yield('titulo')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <!-- Styles -->

    </head>
    <body class="h-full">

        <header class="p-5 border-b bg-wi shadow">
          <div class="container mx auto flex justify-between items-center">

            <h1 class="text-3xl font-bold"><a href="/">Devstagram</a></h1>
            <nav class="flex gap-2 items-center">
              <a class="font-bold uppercase text-gray-600 text-sm" href="a"> Login</a>
              <a class="font-bold uppercase text-gray-600 text-sm"  href="crearCuenta"> Crear usuario</a>
            </nav>

          </div>
        </header>

        <main class="container mx-auto mt-10">
          <!-- Crear un contenedor dinamico -->
          <h1 class="font-black text-center text-1xl mb-10">@yield('titulo')</h1>
          <!-- COntenedor para traer el headr de las diferentes frames .blade.php -->
          @yield('header')
          <!-- COntenedor para traer el contenido de las diferentes frames .blade.php -->
          @yield('contenido')
        </main>

        <footer class="bg-gray-800 py-6">
          <div class="container mx-auto px-6 text-gray-300 text-center text-lg" >
              <p>Copyright &copy; César Aldahir Flores Gámez
                  <span id="date"></span>. all rights reserved {{now()->year}}</p>
          </div>
        </footer>

    </body>
</html>
