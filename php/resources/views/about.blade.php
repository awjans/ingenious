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
<div class='float-left'><img src="{{ asset('images/about-kathy.jpg') }}" alt="@lang('about.person.kathy.alt')"></div>
<div>@lang('about.person.kathy.text')</div>
</div>
<div class='row'>
<div class='float-left'><img src="{{ asset('images/about-andrea.jpg') }}" alt="@lang('about.person.andrea.alt')"></div>
<div>@lang('about.person.andrea.text')</div>
</div>
@endsection
