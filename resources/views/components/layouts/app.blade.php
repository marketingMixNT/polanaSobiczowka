@props(['title', 'description', 'noFollow' => false])

<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth scroll-p-16 ">

<head>
  @include('partials.meta')
  @include('partials.fonts')
  @include('partials.favicon')

  @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>



<body class="font-text bg-primary-100 text-fontDark overflow-x-hidden">
  @include('partials.gtm')





  {{ $slot }}



  @include('partials.scripts')

</body>

</html>