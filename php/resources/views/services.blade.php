@extends('website')

@section('title')
@lang('website.services')
@endsection

@section('description')
@lang('services.description')
@endsection

@section('content')
@lang('services.summary')
<div class="row">
<div class="col-8 col-md-9">@lang('services.detail')</div><div class="col-4 col-md-3">
  <img class="w-100" src="{{ asset('images/services.jpg') }}" alt="@lang('website.services-alt')">
</div></div>
@endsection
