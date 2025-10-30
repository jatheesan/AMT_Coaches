@extends('layouts.template')
@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5 about-container">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Luxury Coaches</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Our fleet</li>
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
                        <h2 class="display-5 text-capitalize">Luxury <span class="text-primary">Coaches</span></h2>
                        <p class="mb-0">We have 16 - 61 seat luxury coches. Our Luxury coaches are the ideal solution for large group travel, offering
                            the perfect balance of space, comfort, and efficiency. Designed for long-distance journeys,
                            school trips, corporate outings, and event transfers, each coach features reclining seats,
                            climate control, onboard entertainment, and ample luggage space. With a professional driver
                            at the wheel and high safety standards throughout, our luxury coaches ensure a smooth and
                            enjoyable experience for every passenger.
                        </p>
                    </div>
                    <p class="text-item my-4">Experience group travel at its finest with our luxury coaches—perfect for weddings, 
                        guided tours, and corporate events. Each vehicle is equipped with
                        plush reclining seats, air conditioning, panoramic tinted windows, and entertainment systems to
                        ensure every journey is as enjoyable as the destination. Whether you're transporting guests to a
                        venue or exploring scenic routes across the UK, our spacious interiors and professional drivers
                        guarantee comfort, class, and peace of mind from start to finish.
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
                        <img src="{{ asset('img/bus-5.jpg') }}" class="img-fluid rounded h-100 w-100" alt="AMT Coaches fleets">
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
            <h2 class="display-5 text-capitalize mb-3"><span class="text-primary">Highlights</span> of Our Luxury Coaches</h2>
        </div>
        <div class="row g-4">
            <div class="col-xl-6">
                <div class="row gy-4 gx-0">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item">
                            <div class="ms-4">
                                <h5 class="mb-3">Comfort & Seating</h5>
                                <div class="rounded">
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Deluxe
                                        half-leather reclining seats with added padding and extra legroom</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Seat-back
                                        tables and magazine nets for personal storage</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Individual
                                        footrests and armrests for enhanced comfort</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Climate control
                                        system with central heating and air conditioning</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Remote
                                        pre-heater to warm the interior before boarding</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Kneeling
                                        suspension to lower the coach for easy access</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item">
                            <div class="ms-4">
                                <h5 class="mb-3">Entertainment & Connectivity</h5>
                                <div class="rounded">
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Multi-screen
                                        DVD system and integrated radio/PA system</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Forward-facing
                                        camera view displayed on passenger screens</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> USB charging
                                        points at every seat</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Wi-Fi available
                                        on request</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item">
                            <div class="ms-4">
                                <h5 class="mb-3">Design & Practicality</h5>
                                <div class="rounded">
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Tinted,
                                        double-glazed panoramic windows with curtains</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Luxurious
                                        Flotex carpeted interior</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Additional
                                        central entrance/exit door for smooth boarding</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Maximum luggage
                                        space for group travel</p>
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
                                <h5 class="mb-3">Safety Features</h5>
                                <div class="rounded">
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Hand sanitiser
                                        dispenser to promote onboard hygiene and passenger health</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Advanced
                                        braking systems, including engine braking, ABS (Anti-lock Braking System), and
                                        ASR (Anti-Slip Regulation) for optimal control</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Electronic
                                        Stability Program (ESP) to enhance vehicle stability in poor driving conditions
                                    </p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Autonomous
                                        Emergency Braking System (AEBS) for collision prevention during sudden stops*
                                    </p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Adaptive cruise
                                        control to maintain safe following distances on motorways and long routes*</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> GPS satellite
                                        navigation system for precise route tracking and efficient travel</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Modern coach
                                        construction that complies with the latest UK and EU safety standards</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Three-point
                                        seat belts installed for every passenger to ensure secure seating</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Regular
                                        six-week maintenance inspections for mechanical integrity and reliability</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Euro 6
                                        compliant engine for reduced emissions and environmental responsibility</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Fogmaker engine
                                        fire suppression system for rapid response in case of overheating or fire*</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Eight-camera
                                        onboard CCTV system to monitor passenger areas and enhance safety</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item">
                            <div class="me-4">
                                <h5 class="mb-3">Onboard Facilities</h5>
                                <div class="rounded">
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Toilet and
                                        washroom equipped with hand dryer</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Kitchen with
                                        hot and cold drinks facilities</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Two onboard
                                        fridges for food and beverages</p>
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
            <img src="{{ asset('') }}img/coach3.jpg" class="img-fluid rounded w-100" alt="AMT Coaches | Coach Hire Services London">
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