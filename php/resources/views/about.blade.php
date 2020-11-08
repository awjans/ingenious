@extends('website')

@section('title')
@lang('website.about')
@endsection

@section('description')
@lang('about.description')
@endsection

@section('content')
<div class='row'>@lang('about.companyHistory')</div>
<div class='row'>
<div class='float-left col-2 w-100'><img src="{{ asset('images/about-kathy.jpg') }}" alt="@lang('about.person.kathy.alt')"></div>
<div class='col-4'>@lang('about.person.kathy.text')</div>
<div class='float-left col-2 w-100'><img src="{{ asset('images/about-andrea.jpg') }}" alt="@lang('about.person.andrea.alt')"></div>
<div class='col-4'>@lang('about.person.andrea.text')</div>
</div>
@endsection
