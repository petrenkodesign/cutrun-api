<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Cut&Run')</title>
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Inter:400,600&display=swap" rel="stylesheet" />
</head>
<body>
  @yield('content')

  <script>
    // Toggle mobile nav
    document.getElementById("menu-toggle").addEventListener("click", function () {
      document.getElementById("nav-menu").classList.toggle("open");
    });

    // Rotating hero text
    const texts = ["Powering Your Race Events", "Seamless Timing Solutions", "Engage Every Participant"];
    let index = 0;
    setInterval(() => {
      index = (index + 1) % texts.length;
      document.getElementById("rotating-text").textContent = texts[index];
    }, 10000);
  </script>
</body>
</html>
