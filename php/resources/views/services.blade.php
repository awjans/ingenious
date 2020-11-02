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
<div class="col-8 col-md-9">
<h2>@lang('services.types.tech_support')</h2>
<p>@lang('services.detail.tech_support')</p>
<h2>@lang('services.types.sys_admin')</h2>
<p>@lang('services.detail.sys_admin')</p>
<h2>@lang('services.types.strategic_advice')</h2>
<p>@lang('services.detail.strategic_advice')</p>
<h2>@lang('services.types.custom_software')</h2>
<p>@lang('services.detail.custom_software')</p>
<h2>@lang('services.types.web_design')</h2>
<p>@lang('services.detail.web_design')</p>
</div><div class="col-4 col-md-3">
  <img class="w-100" src="{{ asset('images/services.jpg') }}" alt="@lang('website.services-alt')">
</div></div>
@endsection
