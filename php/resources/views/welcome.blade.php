@extends('website')

@section('title')
@lang('website.welcome')
@endsection

@section('description')
Ingenious Partners, LLC is a professional IT service based in Ewa Beach, Hawaii offering cost-effective Technical Support from experienced technicians you can trust.
@endsection

@section('content')
  <div class="row">
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
  <div class="col-12">
    <h1>Need IT help? We’ve got you covered!</h1>
    <p>Ingenious Partners, LLC is a professional IT service based in Ewa Beach, Hawaii offering cost-effective Technical Support from experienced technicians you can trust.</p> 
    <p>Our friendly team members can assist remotely or in-person when needed. We specialize in helping small businesses that don’t have their own in-house IT department, but we are available for individuals or larger companies too.</p>
    <p>We are flexible and available to meet any of your technology needs. Our efficient service will exceed your expectations. Let us handle your IT challenges so you can focus on your business needs.</p>
  </div>
@endsection
