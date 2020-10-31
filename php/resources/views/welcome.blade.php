@extends('website')

@section('title')
@lang('website.welcome')
@endsection

@section('description')
@lang('welcome.description')
@endsection

@section('content')
  <div id='menu' class="row">
    <div class="col-6 col-md-3">
      <div id="services" class="services link w-100"><a class="btn" href="{{ route('services') }}">@lang('website.services')</a></div>
      <div><img class="w-100" src="{{ asset('images/welcome1.jpg') }}" alt="@lang('website.welcome1-alt')"></div>
    </div>
    <div class="col-6 col-md-3">
      <div><img class="w-100" src="{{ asset('images/welcome2.jpg') }}" alt="@lang('website.welcome2-alt')"></div>
      <div id="portfolio" class="portfolio link w-100"><a class="btn" href="{{ route('portfolio') }}">@lang('website.portfolio')</a></div>
    </div>
    <div class="col-6 col-md-3">
      <div id="testimonials" class="testimonials link w-100"><a class="btn" href="{{ route('testimonials') }}">@lang('website.testimonials')</a></div>
      <div><img class="w-100" src="{{ asset('images/welcome3.jpg') }}" alt="@lang('website.welcome3-alt')"></div>
    </div>
    <div class="col-6 col-md-3">
      <div><img class="w-100" src="{{ asset('images/welcome4.jpg') }}" alt="@lang('website.welcome4-alt')"></div>
      <div id="about" class="about link w-100"><a class="btn" href="{{ route('about') }}">@lang('website.about')</a></div>
    </div>
  </div>
  <div id='blurb' class="col-12">@lang('welcome.blurb')</div>
@endsection
