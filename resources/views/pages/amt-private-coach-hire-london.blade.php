@extends('layouts.template')
@section('title', __('Private & Wedding Coach Hire London | AMT Coaches'))
@section('meta_description', __('Private coach hire with driver in London for weddings, parties, sports clubs, day trips and tours. Luxury 16 to 61 seat coaches. Request your free quote today.'))
@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5 about-container">
        <h1 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{ __('Private Coach Hire London') }}</h1>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url(app()->getLocale()) }}">{{ __('Home') }}</a></li>
            <li class="breadcrumb-item"><a href="{{ url(app()->getLocale() . '/services') }}">{{ __('Service') }}</a></li>
            <li class="breadcrumb-item active text-primary">{{ __('Private Hire') }}</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Content Start -->
<div class="container-fluid feature py-5">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="display-5 text-capitalize mb-3">{{ __('Coach Hire with Driver for') }} <span class="text-primary">{{ __('Every Occasion') }}</span></h2>
                <p class="mb-4">{{ __('Private Coach Hire London Para 1') }}</p>
                <p class="mb-4">{{ __('Private Coach Hire London Para 2') }} <a href="{{ url(app()->getLocale()) }}" class="text-primary fw-bold">{{ __('luxury coach hire in London') }}</a>.</p>

                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-ring fa-2x text-primary me-3"></i>
                            <h3 class="h6 mb-0">{{ __('Wedding Coach Hire') }}</h3>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-map-marked-alt fa-2x text-primary me-3"></i>
                            <h3 class="h6 mb-0">{{ __('Day Trips & Tours') }}</h3>
                        </div>
                    </div>
                </div>
                <a href="{{ url(app()->getLocale() . '/enquiry') }}" class="btn btn-primary rounded-pill py-3 px-5 mt-3">{{ __('Get a Free Quote') }}</a>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <img width="900" height="514" src="{{ asset('img/AMT-Coach-PrivateHire.webp') }}" class="img-fluid rounded w-100" loading="lazy" alt="{{ __('Private coach hire with driver for weddings and events in London') }}">
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h2 class="display-6 text-capitalize mb-3">{{ __('Popular Private') }} <span class="text-primary">{{ __('Coach Hire Trips') }}</span></h2>
            <p class="mb-0">{{ __('Private Coach Hire London Para 3') }}</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3"><p class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i>{{ __('Wedding guest transport') }}</p></div>
            <div class="col-md-6 col-lg-3"><p class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i>{{ __('Parties, concerts and nights out') }}</p></div>
            <div class="col-md-6 col-lg-3"><p class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i>{{ __('Sports clubs and away days') }}</p></div>
            <div class="col-md-6 col-lg-3"><p class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i>{{ __('Seaside day trips and UK tours') }}</p></div>
        </div>
    </div>
</div>
<!-- Content End -->

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Private Coach Hire London",
  "serviceType": "Private coach hire with driver",
  "provider": {
    "@type": "LocalBusiness",
    "name": "AMT Coaches",
    "telephone": "+447564447775",
    "url": "{{ url('/') }}"
  },
  "areaServed": "London",
  "description": "Private coach hire with driver in London for weddings, parties, sports clubs, day trips and tours."
}
</script>
@endsection
