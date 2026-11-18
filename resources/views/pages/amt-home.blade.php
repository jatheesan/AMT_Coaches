@extends('layouts.template')
@section('title', __('AMT Coaches | Luxury Coach Hire in London & Minibus Rentals'))
@section('meta_description', __('AMT Coaches offers luxury coach hire in London and minibus rentals. Reliable, comfortable vehicles, professional drivers, and competitive prices.'))
@section('content')
    <!-- Carousel Start -->
    <div class="header-carousel">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ asset('img/amt-coach2.png') }}" class="img-fluid w-100"
                        alt="{{ __('AMT Coaches | Luxury 53-seater coach exterior - coach hire in London') }}" />
                    <div class="carousel-caption">
                        <div class="container py-4">
                            <div class="row g-5">
                                <div class="col-lg-6 d-none d-lg-flex fadeInRight animated animation-style"
                                    data-animation="fadeInRight" data-delay="1s">
                                    <div class="text-start tx-center">
                                        <h1 class="display-5 text-white">{{ __('Luxury Coach Hire in London') }}</h1>
                                        <p>{{ __('Travel in style and comfort with our premium fleet and professional drivers.') }}
                                        </p>
                                        <a href="{{ url('/contact') }}"
                                            class="btn btn-primary rounded py-3 px-5">{{ __('Contact Us') }}</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 fadeInLeft animated animation-style" data-animation="fadeInLeft"
                                    data-delay="1s">
                                    <style>
                                        .hero-form-card {
                                            padding: 16px 20px !important;
                                        }

                                        .hero-form-card h4 {
                                            margin-bottom: 8px !important;
                                            font-size: 1.15rem !important;
                                            font-weight: 700;
                                            text-align: center;
                                        }

                                        .hero-form-card .form-control {
                                            font-size: 0.85rem !important;
                                            padding: 4px 8px !important;
                                            height: 34px !important;
                                            border-radius: 6px !important;
                                        }

                                        .hero-form-card .input-group-text,
                                        .hero-form-card .input-group .bg-light {
                                            font-size: 0.75rem !important;
                                            padding: 4px 8px !important;
                                            height: 34px !important;
                                            display: flex;
                                            align-items: center;
                                            border-radius: 6px 0 0 6px !important;
                                        }

                                        .hero-form-card .form-check-input {
                                            width: 13px;
                                            height: 13px;
                                            margin-top: 4px;
                                        }

                                        .hero-form-card .form-check-label {
                                            font-size: 0.8rem !important;
                                        }

                                        .hero-form-card .small,
                                        .hero-form-card small {
                                            font-size: 0.75rem !important;
                                        }

                                        .hero-form-card .btn-light {
                                            padding-top: 6px !important;
                                            padding-bottom: 6px !important;
                                            font-size: 0.9rem !important;
                                            border-radius: 6px !important;
                                        }

                                        .hero-form-row {
                                            --bs-gutter-y: 0.35rem !important;
                                            --bs-gutter-x: 0.35rem !important;
                                        }

                                        .hero-form-row>* {
                                            margin-top: 0.35rem !important;
                                        }
                                    </style>
                                    <div class="bg-secondary rounded p-3 p-md-4 p-lg-5 hero-form-card">
                                        <h4 class="text-white mb-4">{{ __('MAKE YOUR ENQUIRY') }}</h4>
                                        <form method="post" action="{{ route('enquiry.email') }}" id="contact-form">
                                            {{ csrf_field() }}
                                            <div class="row hero-form-row mt-n2">
                                                <div class="col-6">
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        placeholder="{{ __('Name') }}" required>
                                                </div>
                                                <div class="col-6">
                                                    <input type="text" class="form-control" id="business" name="business"
                                                        placeholder="{{ __('Business / Organization (optional)') }}">
                                                </div>
                                                <div class="col-6">
                                                    <input type="phone" class="form-control" id="phone" name="phone"
                                                        placeholder="{{ __('Mobile') }}" required>
                                                </div>
                                                <div class="col-6">
                                                    <input type="email" class="form-control" id="email" name="email"
                                                        placeholder="{{ __('Email') }}" required>
                                                </div>
                                                <div class="col-6">
                                                    <input type="number" class="form-control" id="noofpassenger"
                                                        name="noofpassenger" placeholder="{{ __('Number Of Passengers') }}"
                                                        required>
                                                </div>
                                                <div class="col-6 d-flex flex-column justify-content-center">
                                                    <label class="d-flex text-white mb-1 small"
                                                        style="line-height:1">{{ __('Luggage') }}</label>
                                                    <div class="d-flex gap-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="luggage"
                                                                id="hero-luggage-yes" value="Yes" required>
                                                            <label class="form-check-label text-white"
                                                                for="hero-luggage-yes">{{ __('Yes') }}</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="luggage"
                                                                id="hero-luggage-no" value="No">
                                                            <label class="form-check-label text-white"
                                                                for="hero-luggage-no">{{ __('No') }}</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Pickup Address Section --}}
                                                <div class="col-12 mt-1">
                                                    <small class="d-flex text-light fw-bold"><i
                                                            class="fas fa-map-marker-alt me-1"></i>{{ __('Pickup Details') }}</small>
                                                </div>
                                                <div class="col-8">
                                                    <div class="input-group">
                                                        {{-- <div class="d-flex align-items-center bg-light text-body rounded-start px-2"
                                                            style="font-size:0.75rem; border-radius: 6px 0 0 6px;">
                                                            <span class="fas fa-map-marker-alt"></span> <span
                                                                class="ms-1">{{ __('Pick Up') }}</span>
                                                        </div> --}}
                                                        <input class="form-control" type="text" name="pickupaddress"
                                                            placeholder="{{ __('Pickup Address') }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <input type="text" class="form-control" name="pickup_postcode"
                                                        placeholder="{{ __('Postcode') }}">
                                                </div>
                                                <div class="col-6">
                                                    <div class="input-group">
                                                        {{-- <div class="d-flex align-items-center bg-light text-body rounded-start px-2"
                                                            style="font-size:0.75rem; border-radius: 6px 0 0 6px;">
                                                            <span class="fas fa-calendar-alt"></span><span
                                                                class="ms-1">{{ __('Pick Up') }}</span>
                                                        </div> --}}
                                                        <input class="form-control" type="date" name="pickupdate" required>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <input type="time" class="form-control" id="pickuptime"
                                                        name="pickuptime" step="1800" value="07:00" required>
                                                </div>

                                                {{-- Destination Address Section --}}
                                                <div class="col-12 mt-1">
                                                    <small class="d-flex text-light fw-bold"><i
                                                            class="fas fa-map-marker-alt me-1"></i>{{ __('Destination Details') }}</small>
                                                </div>
                                                <div class="col-8">
                                                    <div class="input-group">
                                                        {{-- <div class="d-flex align-items-center bg-light text-body rounded-start px-2"
                                                            style="font-size:0.75rem; border-radius: 6px 0 0 6px;">
                                                            <span class="fas fa-map-marker-alt"></span><span
                                                                class="ms-1">{{ __('Destination') }}</span>
                                                        </div> --}}
                                                        <input class="form-control" type="text" name="destinationaddress"
                                                            placeholder="{{ __('Destination Address') }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <input type="text" class="form-control" name="destination_postcode"
                                                        placeholder="{{ __('Postcode') }}">
                                                </div>
                                                <div class="col-6">
                                                    <div class="input-group">
                                                        {{-- <div class="d-flex align-items-center bg-light text-body rounded-start px-2"
                                                            style="font-size:0.75rem; border-radius: 6px 0 0 6px;">
                                                            <span class="fas fa-calendar-alt"></span><span
                                                                class="ms-1">{{ __('Destination') }}</span>
                                                        </div> --}}
                                                        <input class="form-control" type="date" name="destinationdate"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <input type="time" class="form-control" id="destinationtime"
                                                        name="destinationtime" step="1800" value="17:00" required>
                                                </div>

                                                {{-- Journey Type --}}
                                                <div class="col-12 mt-1">
                                                    <label class="d-flex text-white mb-1 small"
                                                        style="line-height:1">{{ __('Select Journey Type') }}</label>
                                                    <div class="d-flex gap-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="journey_type"
                                                                id="hero-journey-single" value="Single Trip" required>
                                                            <label class="form-check-label text-white"
                                                                for="hero-journey-single">{{ __('Single Trip') }}</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="journey_type"
                                                                id="hero-journey-round" value="Round Trip">
                                                            <label class="form-check-label text-white"
                                                                for="hero-journey-round">{{ __('Round Trip') }}</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 mt-2">
                                                    <button type="submit" class="btn btn-light w-100 py-3"
                                                        id="submit-btn">{{ __('Enquiry Now') }}</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/amt-coach3.png') }}" class="img-fluid w-100"
                        alt="{{ __('AMT Coaches | Luxury Minibuses & Coaches for hire in London') }}" />
                    <div class="carousel-caption">
                        <div class="container py-4">
                            <div class="row g-5">
                                <div class="col-lg-6 d-none d-lg-flex fadeInRight animated animation-style"
                                    data-animation="fadeInRight" data-delay="1s">
                                    <div class="text-start">
                                        <h2 class="display-5 text-white">{{ __('Luxury Minibuses & Coaches') }}</h2>
                                        <p>{{ __('From city tours to cross-country travel—we’ve got you covered.') }}</p>
                                        <a href="{{ url('/contact') }}"
                                            class="btn btn-primary rounded py-3 px-5">{{ __('Contact Us') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Features Start -->
    <div class="container-fluid feature py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp about-feature" data-wow-delay="0.1s">
                <h2 class="display-5 text-capitalize mb-3">{{ __('AMTCoaches')}} <span
                        class="text-primary">{{ __('Services')}}</span></h2>
                <p class="mb-0">{{ __('The Smart Choice for Affordable Coach Hire in London') }}
                </p>
            </div>
            <div class="row">
                <div class="col-xl-6 offset-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <span class="fa fa-plane fa-2x"></span>
                        </div>
                        <div class="ms-4 hover-box">
                            <h5 class="mb-3">{{ __('Airport Hire') }}</h5>
                            <p class="mb-0">{{ __('Airport Hire Para') }}</p>
                            <img loading="lazy" class="hover-image" src="{{ asset('img/AMT-Coach-AirportHire2.png') }}"
                                alt="Airport Hire Image">
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
                                    <h5 class="mb-3">{{ __('Private Hire') }}</h5>
                                    <p class="mb-0">{{ __('Private Hire Para') }}</p>
                                    <img loading="lazy" class="hover-image"
                                        src="{{ asset('img/AMT-Coach-PrivateHire.png') }}" alt="Private Hire Image">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <span class="fa fa-road fa-2x"></span>
                                </div>
                                <div class="ms-4 hover-box">
                                    <h5 class="mb-3">{{ __('Corporate Hire')}}</h5>
                                    <p class="mb-0">{{ __('Corporate Hire Para') }}</p>
                                    <img loading="lazy" class="hover-image"
                                        src="{{ asset('img/AMT-Coach-CoporateHire.png') }}" alt="Corporate Hire Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <img loading="lazy" src="{{ asset('img/amt-coach6.png') }}" class="img-fluid w-100 about-bus-img"
                        alt="AMT Coaches | Coach Hire Services London">
                </div>
                <div class="col-xl-4">
                    <div class="row gy-4 gx-0">
                        <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="feature-item justify-content-end">
                                <div class="text-end me-4 hover-box">
                                    <h5 class="mb-3">{{ __('Tour Operators') }}</h5>
                                    <p class="mb-0"> {{ __('Tour Operators Para') }}</p>
                                    <img loading="lazy" class="hover-image" src="{{ asset('img/AMT-Coach-tour.png') }}"
                                        alt="Tour Operators Image">
                                </div>
                                <div class="feature-icon">
                                    <span class="fa fa-tag fa-2x"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="feature-item justify-content-end">
                                <div class="text-end me-4 hover-box">
                                    <h5 class="mb-3">{{ __('Schools & Colleges') }}</h5>
                                    <p class="mb-0">{{ __('Schools & Colleges Hire Para') }}</p>
                                    <img loading="lazy" class="hover-image"
                                        src="{{ asset('img/AMT-Coach-SchoolHire.png') }}"
                                        alt="Schools & Colleges Hire Image">
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
                            <h5 class="mb-3">{{ __('Rail Replacement') }}</h5>
                            <p class="mb-0">{{ __('Rail Replacement Para') }}</p>
                            <img loading="lazy" class="hover-image" src="{{ asset('img/AMT-Coach-RailReplacement.png') }}"
                                alt="Rail Replacement Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- About Start -->
    <div class="container-fluid overflow-hidden about py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-item">
                        <div class="pb-5">
                            <h2 class="display-5 text-capitalize">{{ __('AMTCoaches') }} <span
                                    class="text-primary">{{ __('About') }}</span></h2>
                            <p class="mb-0">{{ __('AMTCoaches About Para') }}
                            </p>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="about-item-inner border p-4">
                                    <div class="about-icon mb-4">
                                        <img loading="lazy" src="{{ asset('img/about-icon-1.png') }}"
                                            class="img-fluid w-50 h-50" alt="AMT Coaches vision">
                                    </div>
                                    <h5 class="mb-3">{{ __('Our Vision') }}</h5>
                                    <p class="mb-0">{{ __('Our Vision Para') }}</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="about-item-inner border p-4">
                                    <div class="about-icon mb-4">
                                        <img loading="lazy" src="{{ asset('img/about-icon-2.png') }}"
                                            class="img-fluid h-50 w-50" alt="AMT Coaches mission">
                                    </div>
                                    <h5 class="mb-3">{{ __('Our Mission') }}</h5>
                                    <p class="mb-0">{{ __('Our Mission Para') }}</p>
                                </div>
                            </div>
                        </div>
                        <p class="text-item my-4">{{ __('AMTCoaches Facility Para') }}
                        </p>
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="text-center rounded bg-secondary p-4">
                                    <h5 class="text-light mb-0">{{ __('Experienced Drivers') }}</h5>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="rounded">
                                    <p class="mb-2"><i
                                            class="fa fa-check-circle text-primary me-1"></i>{{ __('Eco-friendly vehicles') }}
                                    </p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i>
                                        {{ __('DBS check drivers') }} </p>
                                    <p class="mb-2"><i
                                            class="fa fa-check-circle text-primary me-1"></i>{{ __('Care and integrity') }}
                                    </p>
                                    <p class="mb-0"><i class="fa fa-check-circle text-primary me-1"></i>
                                        {{ __('Quality service')}}</p>
                                </div>
                            </div>
                            <div class="col-lg-5 d-flex align-items-center">
                                <a href="{{ url('/about') }}"
                                    class="btn btn-primary rounded py-3 px-5">{{ __('More About Us')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="about-img">
                        <div class="img-1">
                            <img loading="lazy" src="{{ asset('img/fleet-2.jpeg') }}" class="img-fluid rounded h-100 w-100"
                                alt="AMT Coaches | Coach Hire Services London">
                        </div>
                        <div class="img-2">
                            <img loading="lazy" src="{{ asset('img/amt-coach7.png') }}" class="img-fluid rounded w-100"
                                alt="AMT Coaches | Coach Hire Services London">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Fact Counter -->
    <!-- <div class="container-fluid counter bg-secondary py-5">
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
                                    <h4 class="text-white mb-0">Happy Clients</h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="counter-item text-center">
                                    <div class="counter-item-icon mx-auto">
                                        <i class="fas fa-bus fa-2x"></i>
                                    </div>
                                    <div class="counter-counting my-3">
                                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">56</span>
                                        <span class="h1 fw-bold text-white">+</span>
                                    </div>
                                    <h4 class="text-white mb-0">Number of Coaches</h4>
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
                                    <h4 class="text-white mb-0">Coach Center</h4>
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
                                    <h4 class="text-white mb-0">Total kilometers</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
    <!-- Fact Counter -->

    <!-- Services Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp about-feature" data-wow-delay="0.1s">
                <h2 class="display-5 text-capitalize mb-3">{{ __('AMTCoaches') }} <span
                        class="text-primary">{{ __('Features') }}</span></h2>
                <p class="mb-0">{{ __('Features Para') }}
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item p-4">
                        <div class="service-icon mb-4">
                            <i class="fa fa-phone-alt fa-2x"></i>
                        </div>
                        <h5 class="mb-3">{{ __('Phone Reservation') }}</h5>
                        <p class="mb-0">{{ __('Phone Reservation Para') }}</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="service-icon mb-4">
                            <i class="fa fa-money-bill-alt fa-2x"></i>
                        </div>
                        <h5 class="mb-3">{{ __('Special Rates') }}</h5>
                        <p class="mb-0">{{ __('Special Rates Para') }}</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="service-icon mb-4">
                            <i class="fa fa-road fa-2x"></i>
                        </div>
                        <h5 class="mb-3">{{ __('One Way Hire') }}</h5>
                        <p class="mb-0">{{ __('One Way Hire Para') }}</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item p-4">
                        <div class="service-icon mb-4">
                            <i class="fa fa-umbrella fa-2x"></i>
                        </div>
                        <h5 class="mb-3">{{ __('Pristine Presentation') }}</h5>
                        <p class="mb-0">{{ __('Pristine Presentation Para') }}</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="service-icon mb-4">
                            <i class="fa fa-building fa-2x"></i>
                        </div>
                        <h5 class="mb-3">{{ __('City to City') }}</h5>
                        <p class="mb-0"> {{ __('City to City Para') }}</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="service-icon mb-4">
                            <i class="fa fa-car-alt fa-2x"></i>
                        </div>
                        <h5 class="mb-3">{{ __('Professional Maintenance') }}</h5>
                        <p class="mb-0">{{ __('Professional Maintenance Para') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Banner Start -->
    <div class="container-fluid banner pb-5 wow zoomInDown" data-wow-delay="0.1s">
        <div class="container pb-5">
            <div class="banner-item rounded">
                <img loading="lazy" src="{{ asset('img/amt-coach1.png') }}" class="img-fluid rounded w-100"
                    alt="AMT Coaches | Coach Hire Services London">
                <div class="banner-content">
                    <h3 class="text-primary">{{ __('Hire Coach') }}</h3>
                    <h2 class="text-white h1">{{ __('Affordable Coach Hire in London') }}</h2>
                    <p class="text-white">{{ __('Don\'t hesitate and send us a message.') }}</p>
                    <div class="banner-btn">
                        <a href="https://wa.me/+447564447775"
                            class="btn btn-secondary rounded-pill py-3 px-4 px-md-5 me-2">{{ __('WhatsApp') }}</a>
                        <a href="{{ url('/contact') }}"
                            class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2">{{ __('Contact Us') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('pages.amt-enquiry-modal')
    <!-- Banner End -->


@endsection