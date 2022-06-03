<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Laravel App</title>
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
 
  </head>
  <body class="bg-gray-100 text-gray-800">

  <nav class="flex py-5 bg-indigo-500 text-white"> 
    <div class="w-1/2 px-12 mr-auto"> 
        <h2 class="text-4xl font-bold"> Hola desde mi lugar, Soy JDaniel y Esto Es Disney Channel </h2>
    </div>
    <nav class="flex py-10 bg-indigo-500 text-purple"> 
    <div class="w-2/4 px-16 mr-auto"> 
        <h3 class="text-4xl font-bold"> INGENIERIA EN SISTEMAS COMPUTACIONALES GRUPO:602 </h3>
    </div>
    <ul class="w-1/2 px-16 ml-auto flex justify-end pt-4"> 
      @if(auth()->check())
    <li class="mx-8">
        <p class="text-xl">Bienvenido <b>{{auth()->user()->name}}</b></p>
    </li>

    @endif
    </ul>
  </nav>
  </body>
</html>