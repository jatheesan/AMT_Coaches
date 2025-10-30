@extends('layouts.template')
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
                <img src="{{ asset('img/coach6.jpeg') }}" class="img-fluid w-100" alt="AMT Coaches | Coach Hire Services London" />
                <div class="carousel-caption">
                    <div class="container py-4">
                        <div class="row g-5">
                            <div class="col-lg-6 d-none d-lg-flex fadeInRight animated animation-style" data-animation="fadeInRight"
                                data-delay="1s">
                                <div class="text-start tx-center">
                                    <h1 class="display-5 text-white">Luxury Coach Hire, Anywhere You Go</h1>
                                    <p>Travel in style and comfort with our premium fleet and professional drivers.</p>
                                    <a href="{{ url('/contact') }}" class="btn btn-primary rounded py-3 px-5">Contact Us</a>
                                </div>
                            </div>
                            <div class="col-lg-6 fadeInLeft animated animation-style" data-animation="fadeInLeft" data-delay="1s">
                                <div class="bg-secondary rounded p-5">
                                    <h4 class="text-white mb-4">MAKE YOUR ENQUIRY</h4>
                                     <form method="post" action="{{ route('enquiry.email') }}" id="contact-form">
                                        {{ csrf_field() }}
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <input type="text" class="form-control" id="name" name="name" placeholder ="Name" required>
                                            </div>
                                            <div class="col-6">
                                                <input type="phone" class="form-control" id="phone" name="phone" placeholder ="Mobile" required>
                                            </div>
                                            <div class="col-6">
                                                <input type="email" class="form-control" id="email" name="email" placeholder ="Email" required>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                        <span class="fas fa-map-marker-alt"></span> <span class="ms-1">Pick Up</span>
                                                    </div>
                                                    <input class="form-control" type="text" name="pickupaddress" placeholder="Enter a City or Airport" aria-label="Enter a City or Airport" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <a href="#" class="text-start text-white d-block mb-2">Need a different drop-off location?</a>
                                                <div class="input-group">
                                                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                        <span class="fas fa-map-marker-alt"></span><span class="ms-1">Drop off</span>
                                                    </div>
                                                    <input class="form-control" type="text" name="dropoffaddress" placeholder="Enter a City or Airport" aria-label="Enter a City or Airport" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                        <span class="fas fa-calendar-alt"></span><span class="ms-1">Pick Up</span>
                                                    </div>
                                                    <input class="form-control" type="date" name="pickupdate" require>
                                                    <input type="time" class="form-control ms-3" id="pickuptime" name="pickuptime" step="1800" value="07:00" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                        <span class="fas fa-calendar-alt"></span><span class="ms-1">Drop off</span>
                                                    </div>
                                                    <input class="form-control" type="date" name="dropoffdate" require>
                                                    <input type="time" class="form-control ms-3" id="dropofftime" name="dropofftime" step="1800" value="17:00" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <input type="number" class="form-control" id="noofpassenger" name="noofpassenger" placeholder = "Number Of Passenger" required>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-light w-100 py-3"  id="submit-btn">Enquiry Now</button>
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
                <img src="{{ asset('img/coach2.jpg') }}" class="img-fluid w-100" alt="AMT Coaches | Coach Hire Services London" />
                <div class="carousel-caption">
                    <div class="container py-4">
                        <div class="row g-5">
                            <div class="col-lg-6 d-none d-lg-flex fadeInRight animated animation-style" data-animation="fadeInRight"
                                data-delay="1s">
                                <div class="text-start">
                                    <h1 class="display-5 text-white">Luxury Minibuses & Coaches</h1>
                                    <p>From city tours to cross-country travel—we’ve got you covered.</p>
                                    <a href="{{ url('/contact') }}" class="btn btn-primary rounded py-3 px-5">Contact Us</a>
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
                <img src="{{ asset('img/bus-2.png') }}" class="img-fluid w-100 about-bus-img" alt="AMT Coaches | Coach Hire Services London">
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
                                    <img src="{{ asset('img/about-icon-1.png') }}" class="img-fluid w-50 h-50"
                                        alt="AMT Coaches vision">
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
                                    <img src="{{ asset('img/about-icon-2.png') }}" class="img-fluid h-50 w-50"
                                        alt="AMT Coaches mission">
                                </div>
                                <h5 class="mb-3">Our Mision</h5>
                                <p class="mb-0">To deliver secure, dependable, and pleasant coach hiring options that
                                    are adapted to our clients’ requirements.</p>
                            </div>
                        </div>
                    </div>
                    <p class="text-item my-4">Our current fleet includes well-maintained luxury vehicles with cutting-edge amenities such
 as reclining seats, air conditioning, Wi-Fi, and entertainment systems.
                    </p>
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="text-center rounded bg-secondary p-4">
                                <h5 class="text-light mb-0">Experienced Drivers</h5>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="rounded">
                                <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Eco-friendly vehicles</p>
                                <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Professional drivers </p>
                                <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Care and integrity
                                </p>
                                <p class="mb-0"><i class="fa fa-check-circle text-primary me-1"></i> Quality service</p>
                            </div>
                        </div>
                        <div class="col-lg-5 d-flex align-items-center">
                            <a href="{{ url('/about') }}" class="btn btn-primary rounded py-3 px-5">More About Us</a>
                        </div>
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
            <h2 class="display-5 text-capitalize mb-3">AMTCoaches <span class="text-primary">Features</span></h2>
            <p class="mb-0">Whether you’re planning a corporate event, a school trip, an airport transfer, or a sightseeing
 tour, AMTCoaches is your reliable partner for smooth, comfortable group transport.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fa fa-phone-alt fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Phone Reservation</h5>
                    <p class="mb-0">Book your coach fast and easily using our specialised phone reservation service—speak with
 our experts for immediate support and availability.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fa fa-money-bill-alt fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Special Rates</h5>
                    <p class="mb-0">Enjoy competitive pricing and exclusive savings for group reservations, schools, and long-term
 rentals—quality travel within your budget.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fa fa-road fa-2x"></i>
                    </div>
                    <h5 class="mb-3">One Way Hire</h5>
                    <p class="mb-0">Need a single drop-off? Our one-way bus hire service provides flexibility and convenience for
 events, airport transfers, and city departures.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fa fa-umbrella fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Pristine Presentation</h5>
                    <p class="mb-0">Our coaches are immaculate, polished, and presentation-ready, reflecting the high standards
 your journey deserves.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fa fa-building fa-2x"></i>
                    </div>
                    <h5 class="mb-3">City to City</h5>
                    <p class="mb-0"> Travel seamlessly between major cities with our dependable city-to-city coach hire—comfortable,
 timely transportation for groups of any size.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fa fa-car-alt fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Professional Maintenance</h5>
                    <p class="mb-0">Every vehicle in our fleet receives routine, expert maintenance to ensure top performance,
 safety, and dependability on every journey.</p>
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

@include('pages.amt-enquiry-modal')
<!-- Banner End -->


@endsection