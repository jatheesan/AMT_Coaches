@extends('layouts.template')
@section('title', __('About AMT Coaches | Coach & Minibus Hire Company in London'))
@section('meta_description', __('About AMT Coaches: luxury coach and minibus hire in London with professional, DBS-checked drivers for airport transfers, tours, schools and corporate events.'))
@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5 about-container">
        <h1 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{ __('About AMT Coaches') }}</h1>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url(app()->getLocale()) }}">{{ __('Home') }}</a></li>
            <li class="breadcrumb-item"><a href="#">{{ __('Pages') }}</a></li>
            <li class="breadcrumb-item active text-primary">{{ __('About') }}</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-fluid overflow-hidden about py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-item">
                    <div class="pb-5">
                        <h2 class="display-5 text-capitalize">{{ __('Your Trusted') }} <span class="text-primary">{{ __('London Coach Hire Company') }}</span></h2>
                        <p class="mb-0">{{ __('AMTCoaches About Para') }}
                        </p>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="about-item-inner border p-4">
                                <div class="about-icon mb-4">
                                    <img width="100" height="100" src="{{ asset('img/about-icon-1.webp') }}" class="img-fluid w-50 h-50"
                                        alt="AMT Coaches vision">
                                </div>
                                <h3 class="h5 mb-3">{{ __('Our Vision') }}</h3>
                                <p class="mb-0">{{ __('Our Vision Para') }}</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-item-inner border p-4">
                                <div class="about-icon mb-4">
                                    <img width="100" height="100" src="{{ asset('img/about-icon-2.webp') }}" class="img-fluid h-50 w-50"
                                        alt="AMT Coaches mission">
                                </div>
                                <h3 class="h5 mb-3">{{ __('Our Mission') }}</h3>
                                <p class="mb-0">{{ __('Our Mission Para') }}</p>
                            </div>
                        </div>
                    </div>
                    <p class="text-item my-4">{{ __('AMTCoaches Facility Para') }}
                    </p>
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="text-center rounded bg-secondary p-4">
                                <h3 class="h5 text-light mb-0">{{ __('Experienced Drivers') }}</h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="rounded">
                                <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i>{{ __('Eco-friendly vehicles') }}</p>
                                <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('DBS check drivers') }} </p>
                                <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i>{{ __('Care and integrity') }}
                                </p>
                                <p class="mb-0"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('Quality service')}}</p>
                            </div>
                        </div>
                        <div class="col-lg-5 d-flex align-items-center">
                            <a href="{{ url(app()->getLocale() . '/about') }}" class="btn btn-primary rounded py-3 px-5">{{ __('More About Us')}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="about-img">
                    <div class="img-1">
                        <img width="1600" height="1200" src="{{ asset('img/fleet-1.webp') }}" class="img-fluid rounded h-100 w-100" alt="AMT Coaches | Coach Hire Services London">
                    </div>
                    <div class="img-2">
                        <img width="1344" height="768" src="{{ asset('img/amt-coach7.webp') }}" class="img-fluid rounded w-100" alt="AMT Coaches | Coach Hire Services London">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Fact Counter -->
<!-- <div class="container-fluid counter py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="counter-item text-center">
                    <div class="counter-item-icon mx-auto">
                        <i class="fas fa-thumbs-up fa-2x"></i>
                    </div>
                    <div class="counter-counting my-3">
                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">829</span>
                        <span class="h1 fw-bold text-white">+</span>
                    </div>
                    <h3 class="h4 text-white mb-0">Happy Clients</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="counter-item text-center">
                    <div class="counter-item-icon mx-auto">
                        <i class="fas fa-car-alt fa-2x"></i>
                    </div>
                    <div class="counter-counting my-3">
                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">56</span>
                        <span class="h1 fw-bold text-white">+</span>
                    </div>
                    <h3 class="h4 text-white mb-0">Number of Coaches</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="counter-item text-center">
                    <div class="counter-item-icon mx-auto">
                        <i class="fas fa-building fa-2x"></i>
                    </div>
                    <div class="counter-counting my-3">
                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">127</span>
                        <span class="h1 fw-bold text-white">+</span>
                    </div>
                    <h3 class="h4 text-white mb-0">Coach Center</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="counter-item text-center">
                    <div class="counter-item-icon mx-auto">
                        <i class="fas fa-clock fa-2x"></i>
                    </div>
                    <div class="counter-counting my-3">
                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">589</span>
                        <span class="h1 fw-bold text-white">k+</span>
                    </div>
                    <h3 class="h4 text-white mb-0">Total kilometers</h3>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Fact Counter -->

<!-- Features Start -->
<div class="container-fluid feature py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp about-feature" data-wow-delay="0.1s">
            <h2 class="display-5 text-capitalize mb-3">{{ __('Coach & Minibus Hire') }} <span class="text-primary">{{ __('Services in London') }}</span></h2>
            <p class="mb-0">{{ __('The Smart Choice for Affordable') }} <a href="{{ url(app()->getLocale()) }}" title="Coach hire in London" class="text-body text-decoration-underline">{{ __('Coach hire in London') }}</a>
            </p>
        </div>
        <div class="row">
            <div class="col-xl-6 offset-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="feature-item">
                    <div class="feature-icon">
                        <span class="fa fa-plane fa-2x"></span>
                    </div>
                    <div class="ms-4 hover-box">
                        <h3 class="h5 mb-3"><a href="{{ url(app()->getLocale() . '/airport-transfers-london') }}" class="text-dark">{{ __('Airport Hire') }}</a></h3>
                        <p class="mb-0">{{ __('Airport Hire Para') }}</p>
                        <img width="900" height="514" class="hover-image" src="{{ asset('img/AMT-Coach-AirportHire2.webp') }}" alt="Airport coach transfers to Heathrow, Gatwick, Stansted and Luton">
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-4 align-items-center">
            <div class="col-xl-4">
                <div class="row gy-4 gx-0">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <span class="fa fa-trophy fa-2x"></span>
                            </div>
                            <div class="ms-4 hover-box">
                                <h3 class="h5 mb-3"><a href="{{ url(app()->getLocale() . '/private-coach-hire-london') }}" class="text-dark">{{ __('Private Hire') }}</a></h3>
                                <p class="mb-0">{{ __('Private Hire Para') }}</p>
                                <img width="900" height="514" class="hover-image" src="{{ asset('img/AMT-Coach-PrivateHire.webp') }}" alt="Private coach hire with driver in London">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <span class="fa fa-road fa-2x"></span>
                            </div>
                            <div class="ms-4 hover-box">
                                <h3 class="h5 mb-3"><a href="{{ url(app()->getLocale() . '/corporate-coach-hire-london') }}" class="text-dark">{{ __('Corporate Hire')}}</a></h3>
                                <p class="mb-0">{{ __('Corporate Hire Para') }}</p>
                                <img width="900" height="514" class="hover-image" src="{{ asset('img/AMT-Coach-CoporateHire.webp') }}" alt="Corporate coach hire for business events in London">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                <img width="1920" height="1237" src="{{ asset('img/amt-coach6.webp') }}" class="img-fluid w-100 about-bus-img" alt="AMT Coaches | Coach Hire Services London">
            </div>
            <div class="col-xl-4">
                <div class="row gy-4 gx-0">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item justify-content-end">
                            <div class="text-end me-4 hover-box">
                                <h3 class="h5 mb-3">{{ __('Tour Operators') }}</h3>
                                <p class="mb-0"> {{ __('Tour Operators Para') }}</p>
                                <img width="900" height="514" class="hover-image" src="{{ asset('img/AMT-Coach-tour.webp') }}" alt="Coach hire for tour operators and sightseeing tours">
                            </div>
                            <div class="feature-icon">
                                <span class="fa fa-tag fa-2x"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item justify-content-end">
                            <div class="text-end me-4 hover-box">
                                <h3 class="h5 mb-3"><a href="{{ url(app()->getLocale() . '/school-trips-coach-hire-london') }}" class="text-dark">{{ __('Schools & Colleges') }}</a></h3>
                                <p class="mb-0">{{ __('Schools & Colleges Hire Para') }}</p>
                                <img width="900" height="514" class="hover-image" src="{{ asset('img/AMT-Coach-SchoolHire.webp') }}" alt="School trip coach hire for schools and colleges">
                            </div>
                            <div class="feature-icon">
                                <span class="fa fa-map-pin fa-2x"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 offset-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="feature-item">
                    <div class="feature-icon">
                        <span class="fa fa-train fa-2x"></span>
                    </div>
                    <div class="ms-4 hover-box">
                        <h3 class="h5 mb-3"><a href="{{ url(app()->getLocale() . '/rail-replacement-coach-hire') }}" class="text-dark">{{ __('Rail Replacement') }}</a></h3>
                        <p class="mb-0">{{ __('Rail Replacement Para') }}</p>
                        <img width="900" height="514" class="hover-image" src="{{ asset('img/AMT-Coach-RailReplacement.webp') }}" alt="Rail replacement coach services in London">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->

<!-- Car Steps Start -->
<div class="container-fluid steps py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp about-car-step" data-wow-delay="0.1s" >
            <h2 class="display-5 text-capitalize text-white mb-3">{{ __('How to Book') }}<span class="text-primary"> {{ __('Your Coach Hire') }}</span>
            </h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="steps-item p-4 mb-4">
                    <h3 class="h4">{{ __('Request a Quote') }}</h3>
                    <p class="mb-0">{{ __('Request a Quote Para') }}</p>
                    <div class="setps-number">01.</div>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="steps-item p-4 mb-4">
                    <h3 class="h4">{{ __('Receive a Tailored Offer') }}</h3>
                    <p class="mb-0">{{ __('Receive a Tailored Offer Para') }}</p>
                    <div class="setps-number">02.</div>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="steps-item p-4 mb-4">
                    <h3 class="h4">{{ __('Confirm Your Booking') }}</h3>
                    <p class="mb-0">{{ __('Confirm Your Booking Para') }}</p>
                    <div class="setps-number">03.</div>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="steps-item p-4 mb-4">
                    <h3 class="h4">{{ __('Travel with Confidence') }}</h3>
                    <p class="mb-0">{{ __('Travel with Confidence Para') }}</p>
                    <div class="setps-number">04.</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Car Steps End -->

<!-- Banner Start -->
<div class="container-fluid banner pb-5 wow zoomInDown" data-wow-delay="0.1s">
    <div class="container pb-5">
        <div class="banner-item rounded">
            <img width="1344" height="768" src="{{ asset('img/amt-coach1.webp') }}" class="img-fluid rounded w-100" alt="AMT Coaches | Coach Hire Services London">
            <div class="banner-content">
                <h3 class="text-primary">{{ __('Hire Coach') }}</h3>
                <h2 class="text-white h1">{{ __('Affordable Coach Hire in London') }}</h2>
                <p class="text-white">{{ __('Don\'t hesitate and send us a message.') }}</p>
                <div class="banner-btn">
                    <a href="https://wa.me/+447564447775" class="btn btn-secondary rounded-pill py-3 px-4 px-md-5 me-2">{{ __('WhatsApp') }}</a>
                    <a href="{{ url(app()->getLocale() . '/contact') }}" class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2">{{ __('Contact Us') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->
@endsection