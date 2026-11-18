@extends('layouts.template')
@section('title', __('Corporate Coach & Minibus Hire London | AMT Coaches'))
@section('meta_description', __('Executive coach hire in London for corporate events, team building, conferences, and business travel. Premium reliable transport for your team.'))
@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5 about-container">
        <h1 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{ __('Corporate Coach Hire London') }}</h1>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('Home') }}</a></li>
            <li class="breadcrumb-item"><a href="#">{{ __('Pages') }}</a></li>
            <li class="breadcrumb-item active text-primary">{{ __('Corporate Hire') }}</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Content Start -->
<div class="container-fluid feature py-5">
    <div class="container py-5">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="display-5 text-capitalize mb-3">{{ __('Executive Corporate Transport') }} <span class="text-primary">{{ __('London') }}</span></h2>
                <p class="mb-4">{{ __('Corporate Coach Hire London Para 1') }}</p>
                <p class="mb-4">{{ __('Corporate Coach Hire London Para 2') }} <a href="{{ url('/') }}" class="text-primary fw-bold">{{ __(' luxury coach hire in London') }}</a>.</p>
                
                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-briefcase fa-2x text-primary me-3"></i>
                            <h6 class="mb-0">{{ __('Professional Drivers') }}</h6>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-plug fa-2x text-primary me-3"></i>
                            <h6 class="mb-0">{{ __('On-board Power/USB') }}</h6>
                        </div>
                    </div>
                </div>
                <a href="{{ url('/enquiry') }}" class="btn btn-primary rounded-pill py-3 px-5 mt-3">{{ __('Request Corporate Quote') }}</a>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <img src="{{ asset('img/AMT-Coach-CoporateHire.png') }}" class="img-fluid rounded w-100" alt="{{ __('Corporate professionals boarding an AMT luxury coach in London') }}">
            </div>
        </div>
    </div>
</div>
<!-- Content End -->

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Corporate Coach Hire London",
  "provider": {
    "@type": "LocalBusiness",
    "name": "AMT Coaches"
  },
  "areaServed": "London",
  "description": "Executive coach hire in London for corporate events, team building, conferences, and business travel."
}
</script>
@endsection
