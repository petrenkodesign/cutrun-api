<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Cut&Run')</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
  <link rel="icon" type="image/x-icon" href="{{ asset('/img/favicon.png') }}">
  @vite(['resources/css/styles.css', 'resources/js/main.js'])
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Inter:400,600&display=swap" rel="stylesheet" />
</head>
<body>
    <header class="header">
        <div class="container flex-con">
            <div class="logo">
            <a href="/">
                <img src="{{ asset('img/cutrun-logo.png') }}">
            </a>
            </div>

            <button class="menu-toggle" id="menu-toggle">
            <i class="fas fa-bars"></i>
            </button>

            <nav class="nav" id="nav-menu">
            <a href="/events">Events</a>
            <a href="#price">Pricing</a>
            <a href="https://trx.cutrun.top">Dashboard</a>
            </nav>
        </div>
    </header>
    @yield('content')
    <footer>
    &copy; 2025 CUTRUN. All rights reserved.
    </footer>
</body>
</html>