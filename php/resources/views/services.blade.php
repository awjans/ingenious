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
<h2>@lang('services.tech_support.name')</h2>
<p>@lang('services.tech_support.detail')</p>
<h2>@lang('services.sys_admin.name')</h2>
<p>@lang('services.sys_admin.detail')</p>
<h2>@lang('services.strategic_advice.name')</h2>
<p>@lang('services.strategic_advice.detail')</p>
<h2>@lang('services.custom_software.name')</h2>
<p>@lang('services.custom_software.detail')</p>
<h2>@lang('services.web_design.name')</h2>
<p>@lang('services.web_design.detail')</p>
</div><div class="col-4 col-md-3">
  <img class="w-100" src="{{ asset('images/services.jpg') }}" alt="@lang('website.services-alt')">
</div></div>
@endsection
