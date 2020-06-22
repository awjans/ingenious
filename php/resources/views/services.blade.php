@extends('website')

@section('title')
@lang('website.services')
@endsection

@section('content')
<h1>Services</h1>
<p>At Ingenious Partners we believe that <strong>technology should be a help, not a hinderence</strong>. It is not practical for every company to have an IT department. We step in to provide for your technology needs. We offer cost effective, experienced support at any level.</p>
<div class="row">
<div class="col-8 col-md-9">
  <h2>Technical Support</h2>
  <p>Sometimes even the most experienced user needs help. Whatever your problems, printer, software, computer or phone, we will come to your aid. Most of the time this can be done remotely. When neccessary, we will be there in person. </p>
  <h2>Systems Administration</h2>
  <p>We can manage the servers and networks neccessary for your business to thrive. </p>
  <h2>Strategic Advice</h2>
  <p>Wondering how to use technology to grow your business but are not sure how to proceed? We can help! With over 30 years in Information Technology, we understand the current trends and how they effect your business.</p>
  <h2>Custom Software Development</h2>
  <p>Sometimes you can't find what you need in the <a href="https://www.microsoft.com/en-us/store/apps/windows">Microsoft</a>, <a href="https://play.google.com/store">Google</a> or <a href="https://www.apple.com/ios/app-store/">Apple</a> stores. Are you looking for something that will make your job more efficient or your customer's happier? We can create something as simple as an Excel Macro or a full fledged phone app. Call today to talk to our expert.</p>
</div><div class="col-4 col-md-3">
  <img class="w-100" src="{{ asset('images/services.jpg') }}" alt="@lang('website.services-alt')">
</div></div>
@endsection
