@extends('layouts.template')
@section('title', __('Minibus Hire London with Driver | 16 Seater Minibus | AMT Coaches'))
@section('meta_description', __('Minibus hire with driver in London. Comfortable 16 seater minibuses and larger coaches for airport transfers, school trips, events and days out. Get a free quote.'))
@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5 about-container">
        <h1 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{ __('Minibus Hire London') }}</h1>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url(app()->getLocale()) }}">{{ __('Home') }}</a></li>
            <li class="breadcrumb-item"><a href="{{ url(app()->getLocale() . '/services') }}">{{ __('Service') }}</a></li>
            <li class="breadcrumb-item active text-primary">{{ __('Minibus Hire') }}</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Content Start -->
<div class="container-fluid feature py-5">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="display-5 text-capitalize mb-3">{{ __('Minibus Hire with Driver') }} <span class="text-primary">{{ __('in London') }}</span></h2>
                <p class="mb-4">{{ __('Minibus Hire London Para 1') }}</p>
                <p class="mb-4">{{ __('Minibus Hire London Para 2') }} <a href="{{ url(app()->getLocale() . '/fleet') }}" class="text-primary fw-bold">{{ __('our coach and minibus fleet') }}</a>.</p>

                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-user-tie fa-2x text-primary me-3"></i>
                            <h3 class="h6 mb-0">{{ __('Professional Drivers') }}</h3>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-users fa-2x text-primary me-3"></i>
                            <h3 class="h6 mb-0">{{ __('16 Seater Minibuses') }}</h3>
                        </div>
                    </div>
                </div>
                <a href="{{ url(app()->getLocale() . '/enquiry') }}" class="btn btn-primary rounded-pill py-3 px-5 mt-3">{{ __('Get a Free Quote') }}</a>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <img src="{{ asset('img/amt-coach3.webp') }}" class="img-fluid rounded w-100" loading="lazy" alt="{{ __('16 seater minibus hire with driver in London') }}">
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h2 class="display-6 text-capitalize mb-3">{{ __('What Our Minibus Hire') }} <span class="text-primary">{{ __('Is Used For') }}</span></h2>
            <p class="mb-0">{{ __('Minibus Hire London Para 3') }}</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3"><p class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i><a href="{{ url(app()->getLocale() . '/airport-transfers-london') }}" class="text-dark">{{ __('Airport minibus transfers') }}</a></p></div>
            <div class="col-md-6 col-lg-3"><p class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i><a href="{{ url(app()->getLocale() . '/school-trips-coach-hire-london') }}" class="text-dark">{{ __('School and college trips') }}</a></p></div>
            <div class="col-md-6 col-lg-3"><p class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i><a href="{{ url(app()->getLocale() . '/corporate-coach-hire-london') }}" class="text-dark">{{ __('Corporate and staff transport') }}</a></p></div>
            <div class="col-md-6 col-lg-3"><p class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i><a href="{{ url(app()->getLocale() . '/private-coach-hire-london') }}" class="text-dark">{{ __('Weddings, parties and days out') }}</a></p></div>
        </div>
    </div>
</div>
<!-- Content End -->

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Minibus Hire London",
  "serviceType": "Minibus hire with driver",
  "provider": {
    "@type": "LocalBusiness",
    "name": "AMT Coaches",
    "telephone": "+447564447775",
    "url": "{{ url('/') }}"
  },
  "areaServed": "London",
  "description": "Minibus hire with driver in London: 16 seater minibuses and larger coaches for airport transfers, school trips, corporate travel, events and days out."
}
</script>
@endsection
