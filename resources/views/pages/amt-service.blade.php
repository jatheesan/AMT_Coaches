@extends('layouts.template')
@section('title', __('Coach Hire Services in London | AMT Coaches'))
@section('meta_description', __('Coach hire services in London: airport transfers, private and wedding hire, corporate events, school trips and rail replacement. Coaches and minibuses.'))
@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5 about-container">
        <h1 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{ __('Coach Hire Services in London') }}</h1>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url(app()->getLocale()) }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Service</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Services Start -->
<!-- <div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">AMTCoaches <span class="text-primary">Services</span></h1>
            <p class="mb-0">Whether you're planning a corporate event, school trip, airport transfer, or sightseeing
                tour, AMTCoaches is your trusted partner in seamless, comfortable group travel.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fa fa-phone-alt fa-2x"></i>
                    </div>
                    <h3 class="h5 mb-3">Phone Reservation</h3>
                    <p class="mb-0">Book your coach quickly and easily with our dedicated phone reservation
                        service—speak directly with our team for instant support and availability.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fa fa-money-bill-alt fa-2x"></i>
                    </div>
                    <h3 class="h5 mb-3">Special Rates</h3>
                    <p class="mb-0">Enjoy competitive pricing and exclusive discounts for group bookings, schools, and
                        long-term hire—quality travel that fits your budget.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fa fa-road fa-2x"></i>
                    </div>
                    <h3 class="h5 mb-3">One Way Hire</h3>
                    <p class="mb-0">Need a single drop-off? Our one-way coach hire service offers flexibility and
                        convenience for events, airport transfers, or city departures.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fa fa-umbrella fa-2x"></i>
                    </div>
                    <h3 class="h5 mb-3">Pristine Presentation</h3>
                    <p class="mb-0">Our coaches arrive spotless, polished, and presentation-ready—reflecting the high
                        standards your journey deserves.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fa fa-building fa-2x"></i>
                    </div>
                    <h3 class="h5 mb-3">City to City</h3>
                    <p class="mb-0">ravel seamlessly between major cities with our reliable city-to-city coach
                        hire—comfortable, timely transport for groups of any size.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fa fa-car-alt fa-2x"></i>
                    </div>
                    <h3 class="h5 mb-3">Professional Maintenance</h3>
                    <p class="mb-0">Each vehicle in our fleet undergoes regular, expert maintenance to ensure peak
                        performance, safety, and reliability on every trip.</p>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Services End -->

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
                                <h3 class="h5 mb-3"><a href="{{ url(app()->getLocale() . '/corporate-coach-hire-london') }}" class="text-dark">{{ __('Corporate Hire') }}</a></h3>
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
                    <h3 class="h4 text-white mb-0">Happy Clients</h3>
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

<!-- Testimonial Start -->
<!-- <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize mb-3">Our Clients<span class="text-primary"> Riviews</span></h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut amet nemo expedita asperiores commodi accusantium at cum harum, excepturi, quia tempora cupiditate! Adipisci facilis modi quisquam quia distinctio,
                    </p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="testimonial-inner p-4">
                            <img src="img/testimonial-1.jpg" class="img-fluid" alt="">
                            <div class="ms-4">
                                <h3 class="h4">Person Name</h3>
                                <p>Profession</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top rounded-bottom p-4">
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam soluta neque ab repudiandae reprehenderit ipsum eos cumque esse repellendus impedit.</p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="testimonial-inner p-4">
                            <img src="img/testimonial-2.jpg" class="img-fluid" alt="">
                            <div class="ms-4">
                                <h3 class="h4">Person Name</h3>
                                <p>Profession</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-body"></i>
                                    <i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top rounded-bottom p-4">
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam soluta neque ab repudiandae reprehenderit ipsum eos cumque esse repellendus impedit.</p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="testimonial-inner p-4">
                            <img src="img/testimonial-3.jpg" class="img-fluid" alt="">
                            <div class="ms-4">
                                <h3 class="h4">Person Name</h3>
                                <p>Profession</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-body"></i>
                                    <i class="fas fa-star text-body"></i>
                                    <i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top rounded-bottom p-4">
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam soluta neque ab repudiandae reprehenderit ipsum eos cumque esse repellendus impedit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
<!-- Testimonial End -->

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