<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-a-head />

<body>

    <x-a-navbar />

    <div class="main-content">
        @yield('content')
    </div>
          
   <x-a-footer />

    <x-a-script />

</body>

</html>
