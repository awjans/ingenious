<!DOCTYPE html>
<html lang="@lang('html.lang')" dir="@lang('html.dir')">
  <head>
    <title>Ingenious Partners, LLC | @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet" type="text/css">
    <link href="/css/app.css" rel="stylesheet" type="text/css">
    <link rel="apple-touch-icon" sizes="57x57" href="/images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/images/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
  </head>
  <body>
    <header class="container-fluid">
      <h1 id="title">Ingenious Partners, LLC</h1>
      <h2 id="subtitle">@lang('website.tagLine')</h2>
    </header>
    <nav class="container {{ Route::currentRouteName()==='welcome'?"invisible":"visible" }}">
      <ul>
        <li class="{{ Route::currentRouteName()==='welcome'?"active":"normal" }}"><a href="{{ route('welcome') }}">@lang('website.welcome')</a></li>
        <li class="{{ Route::currentRouteName()==='services'?"active":"normal" }}"><a href="{{ route('services') }}">@lang('website.services')</a></li>
        <li class="{{ Route::currentRouteName()==='portfolio'?"active":"normal" }}"><a href="{{ route('portfolio') }}">@lang('website.portfolio')</a></li>
        <li class="{{ Route::currentRouteName()==='testimonials'?"active":"normal" }}"><a href="{{ route('testimonials') }}">@lang('website.testimonials')</a></li>
        <li class="{{ Route::currentRouteName()==='about'?"active":"normal" }}"><a href="{{ route('about') }}">@lang('website.about')</a></li>
        <li class="{{ Route::currentRouteName()==='contact'?"active":"normal" }}"><a href="{{ route('contact') }}">@lang('website.contact')</a></li>
      </ul>
    </nav>
    <main>@yield('content')</main>
    <footer class="container-fluid">
      <p id='copyright'>@lang('html.copyright') <a href="https://ingenious.partners">Ingenious Partners, LLC</a> &ndash; @lang('html.allrightsreserved')</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/js/app.js"></script>
  </body>
</html>
