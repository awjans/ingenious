@extends('website')

@section('title')
@lang('website.services')
@endsection

@section('description')
At Ingenious Partners we believe that technology should be a help, not a hinderence. We know you are busy and dealing with IT issues can be time-consuming and confusing. Let our experts ease those frustrations for you. We will step in to provide any level of support you may need.
@endsection

@section('content')
<h1>Services</h1>
<p>At Ingenious Partners we believe that <strong>technology should be a help, not a hinderence</strong>. We know you are busy and dealing with IT issues can be time-consuming and confusing. Let our experts ease those frustrations for you. We will step in to provide any level of support you may need.</p>
<div class="row">
<div class="col-8 col-md-9">
  <h2>Technical Support</h2>
  <p>Technology savvy users still need occasional IT help. Whatever your IT problem may be, we have a solution! Technical support is not solely for computer or software issues. We can assist with phones, printers, and everything else in between. We are available to help in person if preferred, but most issues can be resolved remotely.</p>
  <h2>Systems Administration</h2>
  <p>Managing servers and networks can be daunting and overwhelming for a small business owner. Let our specialists take that task off your hands. We will manage your Systems so that your business can thrive.</p>
  <h2>Strategic Advice</h2>
  <p>If you know that technology is a great tool to grow your business, but you are not sure where to start, let us guide you! Our team has over 30 years of experience in Information Technology. We understand how the current trends can affect your business and will help you formulate a plan to use these insights to your advantage.</p>
  <h2>Custom Software Development</h2>
  <p>Do you have an idea that would add efficiency and customer satisfaction to your business, but you have not been able to find what you are looking for? We can create it! This may be hard to believe but, <a href="https://www.microsoft.com/en-us/store/apps/windows">Microsoft</a>, <a href="https://play.google.com/store">Google</a> and <a href="https://www.apple.com/ios/app-store/">Apple</a> have not thought of everything yet. Our expert can develop custom software, excel macros, or smartphone applications to meet your unique business needs. Intrigued? Reach out today to learn more!</p>
</div><div class="col-4 col-md-3">
  <img class="w-100" src="{{ asset('images/services.jpg') }}" alt="@lang('website.services-alt')">
</div></div>
@endsection
