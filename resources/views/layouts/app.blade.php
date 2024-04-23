<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  
</head>

<body class="bg-slate-500">
  {{-- Header Section --}}
  @include('layouts.header')

  {{-- Content Here --}}
  @yield('content')
  <script>
      const navLinks = document.querySelector('.nav-links')
      function onToggleMenu(e){
          e.name = e.name === 'menu' ? 'close' : 'menu'
          navLinks.classList.toggle('top-[20%]')
      }
  </script>

</body>
</html>