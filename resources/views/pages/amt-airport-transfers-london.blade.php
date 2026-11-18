@extends('layouts.template')
@section('title', __('Airport Transfers Coach Hire London | AMT Coaches'))
@section('meta_description', __('Reliable and comfortable coach and minibus hire for London airport transfers. We serve Heathrow, Gatwick, Stansted, and Luton airports.'))
@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5 about-container">
        <h1 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{ __('Airport Transfers in London') }}</h1>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('Home') }}</a></li>
            <li class="breadcrumb-item"><a href="#">{{ __('Pages') }}</a></li>
            <li class="breadcrumb-item active text-primary">{{ __('Airport Transfers') }}</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Content Start -->
<div class="container-fluid feature py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="display-5 text-capitalize mb-3">{{ __('Premium Airport Coach Transfers') }} <span class="text-primary">{{ __('London') }}</span></h2>
                <p class="mb-4">{{ __('Airport Transfers in London Para 1') }}</p>
                <p class="mb-4">{{ __('Airport Transfers in London Para 2') }} <a href="{{ url('/') }}" class="text-primary fw-bold">{{ __(' luxury coach hire in London') }}</a> {{ __('experience') }}.</p>
                
                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-plane fa-2x text-primary me-3"></i>
                            <h6 class="mb-0">{{ __('Flight Monitoring') }}</h6>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-suitcase fa-2x text-primary me-3"></i>
                            <h6 class="mb-0">{{ __('Ample Luggage Space') }}</h6>
                        </div>
                    </div>
                </div>
                <a href="{{ url('/enquiry') }}" class="btn btn-primary rounded-pill py-3 px-5 mt-3">{{ __('Book Your Transfer') }}</a>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <img src="{{ asset('img/AMT-Coach-AirportHire2.png') }}" class="img-fluid rounded w-100" alt="{{ __('Luxury coach at London Heathrow airport for hire') }}">
            </div>
        </div>
    </div>
</div>
<!-- Content End -->

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Airport Transfers Coach Hire London",
  "provider": {
    "@type": "LocalBusiness",
    "name": "AMT Coaches"
  },
  "areaServed": "London",
  "description": "Reliable and comfortable coach and minibus hire for London airport transfers including Heathrow, Gatwick, Stansted, and Luton."
}
</script>
@endsection
