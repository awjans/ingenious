<!DOCTYPE html>
<html lang="@lang('html.lang')" dir="@lang('html.dir')">
  <head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-180993015-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-180993015-1');
</script>
    <title>Ingenious Partners, LLC | @yield('title')</title>
    <meta charset="utf-8">
    <meta name="author" content="Ingenious Partners, LLC">
    <meta name="description" content="@yield('description')">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Karma:wght@500&display=swap" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('images/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <meta name="msapplication-TileColor" content="#333">
    <meta name="msapplication-TileImage" content="{{ asset('images/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#333">
  </head>
  <body>
    <header class="container-fluid">
      <img id="logo" class="float-left" alt="Ingenious Partners, LLC Logo" src="/images/favicon-96x96.png">
      <h1 id="title">Ingenious Partners, LLC</h1>
      <h2 id="subtitle">@lang('website.tagLine')</h2>
    </header>
    <nav class="container-fluid {{ Route::currentRouteName()==='welcome'?"hide":"visible" }}">
      <ul>
        <li id="menu-welcome" class="welcome"><a class="btn {{ Route::currentRouteName()==='welcome'?"active":"normal" }}" href="{{ route('welcome') }}">@lang('website.welcome')</a></li>
        <li id="menu-services" class="services"><a class="btn {{ Route::currentRouteName()==='services'?"active":"normal" }}" href="{{ route('services') }}">@lang('website.services')</a></li>
        <li id="menu-portfolio" class="portfolio"><a class="btn {{ Route::currentRouteName()==='portfolio'?"active":"normal" }}" href="{{ route('portfolio') }}">@lang('website.portfolio')</a></li>
        <li id="menu-testimonials" class="testimonials"><a class="btn {{ Route::currentRouteName()==='testimonials'?"active":"normal" }}" href="{{ route('testimonials') }}">@lang('website.testimonials')</a></li>
        <li id="menu-about" class="about"><a class="btn {{ Route::currentRouteName()==='about'?"active":"normal" }}" href="{{ route('about') }}">@lang('website.about')</a></li>
        <li id="menu-contact" class="contact"><a class="btn {{ Route::currentRouteName()==='contact'?"active":"normal" }}" href="{{ route('contact') }}">@lang('website.contact')</a></li>
      </ul>
    </nav>
    <main class="container-fluid">
@yield('content')
      <div class="{{ Route::currentRouteName()==='contact'?"hide":"visible" }}">
        <h2>Contact us today!</h2>
        <p>Phone:&nbsp;<a href="tel:+18088249534">+1.808.824.9534</a><br />Email:&nbsp;<a href="mailto:info@ingenious.partners">info@ingenious.partners</a></p>
      </div>
    </main>
    <footer class="container-fluid">
      <p id='copyright' class="text-center">@lang('html.copyright') <a href="https://ingenious.partners">Ingenious Partners, LLC</a> &ndash; @lang('html.allrightsreserved')</p>
	  <p id='copywrite' class="text-center">Copywriting by <a href="https://natashalink.com" target="_blank">Natasha Link</p>
    </footer>
<!--    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/js/app.js"></script>
-->  </body>
</html>
