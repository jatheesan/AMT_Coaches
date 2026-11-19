@extends('layouts.template')
@section('title', __('School Trip Coach Hire London | DBS Checked Drivers | AMT Coaches'))
@section('meta_description', __('Safe, reliable coach hire for school trips, colleges, and university outings in London. Fully DBS-checked drivers and highly maintained vehicles.'))
@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5 about-container">
        <h1 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{ __('School Trip Coach Hire London') }}</h1>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url(app()->getLocale()) }}">{{ __('Home') }}</a></li>
            <li class="breadcrumb-item"><a href="#">{{ __('Pages') }}</a></li>
            <li class="breadcrumb-item active text-primary">{{ __('School Trips') }}</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Content Start -->
<div class="container-fluid feature py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="display-5 text-capitalize mb-3">{{ __('Safe & Secure Transport for') }} <span class="text-primary">{{ __('Schools') }}</span></h2>
                <p class="mb-4">{{ __('School Trip Coach Hire London Para 1') }}</p>
                <p class="mb-4">{{ __('School Trip Coach Hire London Para 2') }} <a href="{{ url(app()->getLocale()) }}" class="text-primary fw-bold">{{ __(' luxury coach hire in London') }}</a>.</p>
                
                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-id-badge fa-2x text-primary me-3"></i>
                            <h3 class="h6 mb-0">{{ __('DBS Checked Drivers') }}</h3>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-shield-alt fa-2x text-primary me-3"></i>
                            <h3 class="h6 mb-0">{{ __('Advanced Safety Features') }}</h3>
                        </div>
                    </div>
                </div>
                <a href="{{ url(app()->getLocale() . '/enquiry') }}" class="btn btn-primary rounded-pill py-3 px-5 mt-3">{{ __('Get a Quote for Your School') }}</a>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <img width="900" height="514" src="{{ asset('img/AMT-Coach-SchoolHire.webp') }}" class="img-fluid rounded w-100" alt="{{ __('Safe school trip coach and minibus hire in London') }}">
            </div>
        </div>
    </div>
</div>
<!-- Content End -->

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "School Trip Coach Hire London",
  "provider": {
    "@type": "LocalBusiness",
    "name": "AMT Coaches"
  },
  "areaServed": "London",
  "description": "Safe, reliable coach hire for school trips, colleges, and university outings in London with fully DBS-checked drivers."
}
</script>
@endsection
