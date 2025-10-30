@extends('layouts.template')
@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5 about-container">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">About</li>
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
                        <h2 class="display-5 text-capitalize">AMTCoaches <span class="text-primary">About</span></h2>
                        <p class="mb-0">AMTCoaches specialises in providing superior coach and minibus hire services throughout
                            the United Kingdom. We are happy to serve private groups, business clients, educational
                            institutions, and tour operators. Our reputation is built on dependability, safety, and great
                            customer service.
                        </p>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="about-item-inner border p-4">
                                <div class="about-icon mb-4">
                                    <img src="{{ asset('img/about-icon-1.png') }}" class="img-fluid w-50 h-50" alt="AMT Coaches Vision">
                                </div>
                                <h5 class="mb-3">Our Vision</h5>
                                <p class="mb-0">To become the most trusted and chosen coach hire operator in the UK,
                                    known for our commitment to safety, luxury, and service quality, all while promoting
                                    innovation and sustainability in the group transport sector.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-item-inner border p-4">
                                <div class="about-icon mb-4">
                                    <img src="{{ asset('img/about-icon-2.png') }}" class="img-fluid h-50 w-50" alt="AMT Coaches Mission">
                                </div>
                                <h5 class="mb-3">Our Mision</h5>
                                <p class="mb-0">To deliver secure, dependable, and pleasant coach hiring options that
                                    are adapted to our clients’ requirements.</p>
                            </div>
                        </div>
                    </div>
                    <p class="text-item my-4"> Our current fleet includes well-maintained luxury vehicles with cutting-edge amenities such
 as reclining seats, air conditioning, Wi-Fi, and entertainment systems.
                    </p>
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="text-center rounded bg-secondary p-4">
                                <!-- <h1 class="display-6 text-white">25</h1> -->
                                <h5 class="text-light mb-0">Experienced Drivers</h5>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="rounded">
                                <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Eco-friendly vehicles</p>
                                <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Professional drivers</p>
                                <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Care and integrity
                                </p>
                                <p class="mb-0"><i class="fa fa-check-circle text-primary me-1"></i> Quality service</p>
                            </div>
                        </div>
                        <!-- <div class="col-lg-5 d-flex align-items-center">
                            <a href="#" class="btn btn-primary rounded py-3 px-5">More About Us</a>
                        </div> -->
                        <!-- <div class="col-lg-7">
                            <div class="d-flex align-items-center">
                                <img src="img/attachment-img.jpg"
                                    class="img-fluid rounded-circle border border-4 border-secondary"
                                    style="width: 100px; height: 100px;" alt="Image">
                                <div class="ms-4">
                                    <h4>Mahinthan</h4>
                                    <p class="mb-0">Founder</p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="about-img">
                    <div class="img-1">
                        <img src="{{ asset('img/bus-5.jpg') }}" class="img-fluid rounded h-100 w-100" alt="AMT Coaches | Coach Hire Services London">
                    </div>
                    <div class="img-2">
                        <img src="{{ asset('img/bus-4.jpg') }}" class="img-fluid rounded w-100" alt="AMT Coaches | Coach Hire Services London">
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
                    <h4 class="text-white mb-0">Happy Clients</h4>
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

<!-- Features Start -->
<div class="container-fluid feature py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp about-feature" data-wow-delay="0.1s">
            <h2 class="display-5 text-capitalize mb-3">AMTCoaches <span class="text-primary">Services</span></h2>
            <p class="mb-0">The Smart Choice for Affordable Coach Hire in London
            </p>
        </div>
        <div class="row">
            <div class="col-xl-6 offset-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="feature-item">
                    <div class="feature-icon">
                        <span class="fa fa-plane fa-2x"></span>
                    </div>
                    <div class="ms-4">
                        <h5 class="mb-3">Airport Hire</h5>
                        <p class="mb-0">Start or end your journey stress-free with our professional airport transfer coach hire. Whether it's Heathrow, Gatwick, Luton, or Stansted, our punctual and spacious coaches ensure timely pickups, ample luggage space, and a smooth ride for groups of all sizes. Ideal for corporate travel, tours, or family holidays.</p>
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
                            <div class="ms-4">
                                <h5 class="mb-3">Private Hire</h5>
                                <p class="mb-0">Our coaches are ideal for private group travel, with soft reclining seats, climate control,
                                    and a smooth ride, ensuring a proper first-class experience across cities.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <span class="fa fa-road fa-2x"></span>
                            </div>
                            <div class="ms-4">
                                <h5 class="mb-3">Corporate Hire</h5>
                                <p class="mb-0">With our luxury mini-coach hire, you can impress clients and reward your team while
 also ensuring comfort, punctuality, and professionalism. Discover the benefits of hiring
 a corporate coach.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                <img src="{{ asset('img/bus-2.png') }}" class="img-fluid w-100 about-bus-img"  alt="AMT Coaches | Coach Hire Services London">
            </div>
            <div class="col-xl-4">
                <div class="row gy-4 gx-0">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item justify-content-end">
                            <div class="text-end me-4">
                                <h5 class="mb-3">Tour Operators</h5>
                                <p class="mb-0"> Deliver outstanding sightseeing experiences with our executive coaches and professional
                                    drivers, ensuring that your clients enjoy London’s best destinations in comfort, safety,
                                    and style.</p>
                            </div>
                            <div class="feature-icon">
                                <span class="fa fa-tag fa-2x"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item justify-content-end">
                            <div class="text-end me-4">
                                <h5 class="mb-3">Schools & Colleges</h5>
                                <p class="mb-0">Our minibus and coach hire services are deliberately designed for educational travel,
                                    ensuring that your children have a safe and comfortable ride every time.</p>
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
                    <div class="ms-4">
                        <h5 class="mb-3">Rail Replacement</h5>
                        <p class="mb-0">Ensure seamless travel during rail disruptions with our dependable rail replacement coach hire. Our fleet offers comfortable seating, punctual schedules, and experienced drivers to keep passengers moving safely and efficiently. Perfect for planned maintenance or emergency service interruptions.</p>
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
            <h2 class="display-5 text-capitalize text-white mb-3">AMTCoaches<span class="text-primary"> Process</span>
            </h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="steps-item p-4 mb-4">
                    <h4>Request a Quote</h4>
                    <p class="mb-0">Fill out our online form or call us directly with your travel details—date,
                        destination, group size, and any special requirements.</p>
                    <div class="setps-number">01.</div>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="steps-item p-4 mb-4">
                    <h4>Receive a Tailored Offer</h4>
                    <p class="mb-0">We’ll send you a personalised quote based on your needs, including coach type,
                        pricing, and availability—no hidden fees.</p>
                    <div class="setps-number">02.</div>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="steps-item p-4 mb-4">
                    <h4>Confirm Your Booking</h4>
                    <p class="mb-0">Once you're happy with the details, confirm your booking with a deposit or full
                        payment. We'll send a confirmation with your journey details.</p>
                    <div class="setps-number">03.</div>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="steps-item p-4 mb-4">
                    <h4>Travel with Confidence</h4>
                    <p class="mb-0">On the day of travel, your professional driver will arrive on time with a clean,
                        fully-inspected vehicle ready for a smooth journey.</p>
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
            <img src="{{ asset('img/coach3.jpg') }}" class="img-fluid rounded w-100" alt="AMT Coaches | Coach Hire Services London">
            <div class="banner-content">
                <h2 class="text-primary">Hire Coach</h2>
                <h1 class="text-white">Interested in Renting?</h1>
                <p class="text-white">Don't hesitate and send us a message.</p>
                <div class="banner-btn">
                    <a href="https://wa.me/+447564447775" class="btn btn-secondary rounded-pill py-3 px-4 px-md-5 me-2">WhatsApp</a>
                    <a href="{{ url('/contact') }}" class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->
@endsection