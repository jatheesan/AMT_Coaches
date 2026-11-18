@extends('layouts.template')
@section('title', __('Luxury Coach Fleet | Minibus & Coach Hire London - AMT Coaches'))
@section('meta_description', __('Explore our fleet of luxury 16 to 61 seater coaches. Perfect for corporate hire, school trips, and airport transfers in London.'))
@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5 about-container">
        <h1 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{ __('Luxury Coaches') }}</h1>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('Home') }}</a></li>
            <li class="breadcrumb-item"><a href="#">{{ __('Pages') }}</a></li>
            <li class="breadcrumb-item active text-primary">{{ __('Our fleet') }}</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-fluid overflow-hidden about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-item">
                    <div class="pb-5">
                        <h2 class="display-5 text-capitalize">{{ __('Luxury') }} <span class="text-primary">{{ __('Coaches') }}</span></h2>
                        <p class="mb-0">{{ __('Luxury Coaches Para 1') }}
                        </p>
                    </div>
                    <p class="text-item my-4">{{ __('Our modern fleet is maintained to the highest standards, making us the premier choice for') }} <a href="{{ url('/') }}" class="text-body text-decoration-underline" title="luxury coach hire in London">{{ __('luxury coach hire in London') }}</a> {{ __('and the surrounding boroughs.') }}
                    </p>
                    <!-- <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="text-center rounded bg-secondary p-4">
                                        <h1 class="display-6 text-white">25</h1>
                                        <h5 class="text-light mb-0">Years Of Experience</h5>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="rounded">
                                        <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Eco-friendly vehicles</p>
                                        <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Professional, courteous drivers</p>
                                        <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Integrity and care</p>
                                        <p class="mb-0"><i class="fa fa-check-circle text-primary me-1"></i> service quality</p>
                                    </div>
                                </div>
                            </div> -->
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="about-img">
                    <div class="img-1">
                        <img src="{{ asset('img/fleet-3.jpeg') }}" class="img-fluid rounded h-100 w-100" alt="AMT Coaches fleets">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Features Start -->
<div class="container-fluid feature py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp about-feature" data-wow-delay="0.1s">
            <h2 class="display-5 text-capitalize mb-3"><span class="text-primary">{{ __('Highlights') }}</span> {{ __('of Our Luxury Coaches') }}</h2>
        </div>
        <div class="row g-4">
            <div class="col-xl-6">
                <div class="row gy-4 gx-0">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item">
                            <div class="ms-4">
                                <h5 class="mb-3">{{ __('Comfort & Seating') }}</h5>
                                <div class="rounded">
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('Deluxe half-leather reclining seats with added padding and extra legroom') }}</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('Seat-back tables and magazine nets for personal storage') }}</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('Individual footrests and armrests for enhanced comfort') }}</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('Climate control system with central heating and air conditioning') }}</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('Remote pre-heater to warm the interior before boarding') }}</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('Kneeling suspension to lower the coach for easy access') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item">
                            <div class="ms-4">
                                <h5 class="mb-3">{{ __('Entertainment & Connectivity') }}</h5>
                                <div class="rounded">
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('Multi-screen DVD system and integrated radio/PA system') }}</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('Forward-facing camera view displayed on passenger screens') }}</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('USB charging points at every seat') }}</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('Wi-Fi available on request') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item">
                            <div class="ms-4">
                                <h5 class="mb-3">{{ __('Design & Practicality') }}</h5>
                                <div class="rounded">
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('Tinted, double-glazed panoramic windows with curtains') }}</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('Luxurious Flotex carpeted interior') }}</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('Additional central entrance/exit door for smooth boarding') }}</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('Maximum luggage space for group travel') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="row gy-4 gx-0">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item">
                            <div class="me-4">
                                <h5 class="mb-3">{{ __('Safety Features') }}</h5>
                                <div class="rounded">
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('Hand sanitiser dispenser to promote onboard hygiene and passenger health') }}</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('Advanced braking systems, including engine braking, ABS (Anti-lock Braking System), and ASR (Anti-Slip Regulation) for optimal control') }}</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('Electronic Stability Program (ESP) to enhance vehicle stability in poor driving conditions') }}</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('Autonomous Emergency Braking System (AEBS) for collision prevention during sudden stops') }}</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('Adaptive cruise control to maintain safe following distances on motorways and long routes') }}</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('GPS satellite navigation system for precise route tracking and efficient travel') }}</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('Modern coach construction that complies with the latest UK and EU safety standards') }}</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('Three-point seat belts installed for every passenger to ensure secure seating') }}</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('Regular six-week maintenance inspections for mechanical integrity and reliability') }}</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('Euro 6 compliant engine for reduced emissions and environmental responsibility') }}</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('Fogmaker engine fire suppression system for rapid response in case of overheating or fire') }}</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('Eight-camera onboard CCTV system to monitor passenger areas and enhance safety') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item">
                            <div class="me-4">
                                <h5 class="mb-3">{{ __('Onboard Facilities') }}</h5>
                                <div class="rounded">
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('Toilet and washroom equipped with hand dryer') }}</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('Kitchen with hot and cold drinks facilities') }}</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('Two onboard fridges for food and beverages') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->

<!-- Banner Start -->
<div class="container-fluid banner pb-5 wow zoomInDown" data-wow-delay="0.1s">
    <div class="container pb-5">
        <div class="banner-item rounded">
            <img src="{{ asset('img/amt-coach1.png') }}" class="img-fluid rounded w-100" alt="AMT Coaches | Coach Hire Services London">
            <div class="banner-content">
                <h3 class="text-primary">{{ __('Hire Coach') }}</h3>
                <h2 class="text-white h1">{{ __('Affordable Coach Hire in London') }}</h2>
                <p class="text-white">{{ __('Don\'t hesitate and send us a message.') }}</p>
                <div class="banner-btn">
                    <a href="https://wa.me/+447564447775" class="btn btn-secondary rounded-pill py-3 px-4 px-md-5 me-2">{{ __('WhatsApp') }}</a>
                    <a href="{{ url('/contact') }}" class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2">{{ __('Contact Us') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->
@endsection