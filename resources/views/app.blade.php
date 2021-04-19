<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', config('app.name'))</title> 

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    </head>
    <body class="py-6 flex flex-col justify-between items-center min-h-screen">

      <main role="main" class="flex flex-col justify-center items-center">
      @yield('content')
      </main>
 
      <footer>
        <p class="text-gray-400">
          &copy; Copyright {{ date('Y') }} 
          @if(!Route::is('apropos'))
          &middot; <a href="{{ route('apropos') }}" class="text-indigo-500 hover:text-indigo-600 underline">A propos</a> 
          @endif
        </p>
         
      </footer>
    </body>
</html>
