@extends('website')

@section('title', "@lang('website.welcome')")

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-6 col-md-3">
      <div id="services" class="link w-100"><a class="btn" href="{{ route('services') }}">@lang('website.services')</a></div>
      <div><img class="w-100" src="/images/welcome1.jpg" ah-100 lt="home img 01"></div>
    </div>
    <div class="col-6 col-md-3">
      <div><img class="w-100" src="/images/welcome2.jpg" alt="home img 02"></div>
      <div id="portfolio" class="link w-100"><a class="btn" href="{{ route('portfolio') }}">@lang('website.portfolio')</a></div>
    </div>
    <div class="col-6 col-md-3">
      <div id="testimonials" class="link w-100"><a class="btn" href="{{ route('testimonials') }}">@lang('website.testimonials')</a></div>
      <div><img class="w-100" src="/images/welcome3.jpg" alt="home img 03"></div>
    </div>
    <div class="col-6 col-md-3">
      <div><img class="w-100" src="/images/welcome4.jpg" alt="home img 04"></div>
      <div id="about" class="link w-100"><a class="btn" href="{{ route('about') }}">@lang('website.about')</a></div>
      <div id="contact" class="link w-100"><a class="btn" href="{{ route('contact') }}">@lang('website.contact')</a></div>
    </div>
  </div>
</div>
@endsection
