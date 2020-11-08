@extends('website')

@section('title')
@lang('website.testimonials')
@endsection

@section('description')
@endsection

@section('content')
<h1>@lang('website.testimonials')</h1>
<blockquote class="testimonial col-9">
<p>@lang('testimonials.testimonial.hsi.quote')</p>
<footer>&dash;&nbsp;<cite>@lang('testimonials.testimonial.hsi.attribution')</cite></footer>
</blockquote>
<blockquote class="testimonial col-9">
<p>@lang('testimonials.testimonial.ct.quote')</p>
<footer>&dash;&nbsp;<cite>@lang('testimonials.testimonial.ct.attribution')</cite></footer>
</blockquote>
<blockquote class="testimonial col-9">
<p>@lang('testimonials.testimonial.gps.quote')</p>
<footer>&dash;&nbsp;<cite>@lang('testimonials.testimonial.gps.attribution')</cite></footer>
</blockquote>
@endsection
