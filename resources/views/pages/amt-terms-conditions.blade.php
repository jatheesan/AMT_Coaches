@extends('layouts.template')
@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5 about-container">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{ __('Terms & Conditions') }}</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('Home') }}</a></li>
            <li class="breadcrumb-item"><a href="#">{{ __('Pages') }}</a></li>
            <li class="breadcrumb-item active text-primary">{{ __('Terms & Conditions') }}</li>
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
                    <h5 class="mb-3">Phone Reservation</h5>
                    <p class="mb-0">Book your coach quickly and easily with our dedicated phone reservation
                        service—speak directly with our team for instant support and availability.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fa fa-money-bill-alt fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Special Rates</h5>
                    <p class="mb-0">Enjoy competitive pricing and exclusive discounts for group bookings, schools, and
                        long-term hire—quality travel that fits your budget.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fa fa-road fa-2x"></i>
                    </div>
                    <h5 class="mb-3">One Way Hire</h5>
                    <p class="mb-0">Need a single drop-off? Our one-way coach hire service offers flexibility and
                        convenience for events, airport transfers, or city departures.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fa fa-umbrella fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Pristine Presentation</h5>
                    <p class="mb-0">Our coaches arrive spotless, polished, and presentation-ready—reflecting the high
                        standards your journey deserves.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fa fa-building fa-2x"></i>
                    </div>
                    <h5 class="mb-3">City to City</h5>
                    <p class="mb-0">ravel seamlessly between major cities with our reliable city-to-city coach
                        hire—comfortable, timely transport for groups of any size.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fa fa-car-alt fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Professional Maintenance</h5>
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
            <h2 class="display-5 text-capitalize mb-3">{{ __('Terms & Conditions') }}</h2>
            <p class="mb-0">
                {{ __('Terms & Conditions Intro') }}
            </p>
        </div>
    </div>
    <div class="container">
        <div class="pb-4 text-justify">
            <h3><span class="tx-secondary">{{ __('Quotations') }}</span> - {{ __('Coach Hire Pricing Made Clear') }}</h3>
            <p>
                {{ __('Quotations Para 1') }}
            </p>
            <p>
                {{ __('Quotations Para 2') }}
            </p>
            <p>
                {{ __('Quotations Para 3') }}
            </p>
            <p>
                {{ __('Quotations Para 4') }}
            </p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">{{ __('Price Guarantee') }}</span> - {{ __('No Hidden Surprises') }}</h3>
            <p>
                {{ __('Price Guarantee Para 1') }}
            </p>
            <p>
                {{ __('Price Guarantee Para 2') }}
            </p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">{{ __('Payment of Balance') }}</span> - {{ __('Settle Up Before You Set Off') }}</h3>
            <p>
                {{ __('Payment Balance Para 1') }}
            </p>
            <p>
                {{ __('Payment Balance Para 2') }}
            </p>
            <p>
                {{ __('Payment Balance Para 3') }}
            </p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">{{ __('Cancellation Policy') }}</span> - {{ __('Coach Hire Bookings') }}</h3>
            <p>
                {{ __('Cancellation Policy Para 1') }}
            </p>
            <p>
                {{ __('Cancellation Policy Para 2') }}
            </p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">{{ __('Coach Hire Cancellation Policy') }}</span></h3>
            <p>
                {{ __('Cancellation Notice') }}
            </p>
            <ul>
                <li>{{ __('Cancellation More Than 14 Days') }}</li>
                <li>{{ __('Cancellation 14 Days to 48 Hours') }}</li>
                <li>{{ __('Cancellation Less Than 48 Hours') }}</li>
            </ul>
            <p>
                {{ __('Cancellation Policy Final Note') }}
            </p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">{{ __('Route & Time Variations') }}</span> - {{ __(' Staying on Track') }}</h3>
            <p>
                {{ __('Route & Time Para 1') }}
            </p>
            <p>
                {{ __('Route & Time Para 2') }}
            </p>
            <p>
                {{ __('Route & Time Para 3') }}
            </p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">{{ __('Use of Vehicle') }}</span> - {{ __('During Your Hire') }}</h3>
            <p>{{ __('Use of Vehicle Para') }}</p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">{{ __('Seating Capacity') }}</span> - {{ __('Know Your Coach Limits') }}</h3>
            <p>
                {{ __('Seating Capacity Para') }}
            </p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">{{ __('Vehicle Provision') }}</span> - {{ __('Luxury & Executive Coach Hire') }}</h3>
            <p>      
                {{ __('Vehicle Provision Para 1') }}
            </p>
            <p>
                {{ __('Vehicle Provision Para 2') }}
            </p>
            {{-- <p>
                {{ __('Vehicle Provision Para 3') }}
            </p> --}}
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">{{ __('Breakdowns & Delays') }}</span></h3>
            <p>
                {{ __('Breakdowns & Delays Para') }}
            </p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">{{ __('Changes to Itinerary') }}</span></h3>
            <p>
                {{ __('Changes to Itinerary Para') }}
            </p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">{{ __('Belongings Header') }}</span></h3>
            <p>
                {{ __('Belongings Para 1') }}
            </p>
            <p>
                {{ __('Belongings Para 2') }}
            </p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">{{ __('Passenger Conduct') }}</span> – {{ __('Keeping It Safe & Respectful Onboard') }}</h3>
            <p>{{ __('Passenger Conduct Para') }}</p>
            <ul>
                <li>
                    {!! __('Conduct Rule 1') !!}
                </li>
                <li>
                    {!! __('Conduct Rule 2') !!}
                </li>
                <li>
                    {!! __('Conduct Rule 3') !!}
                </li>
                <li>
                    {!! __('Conduct Rule 4') !!}
                </li>
                <li>
                    {!! __('Conduct Rule 5') !!}
                </li>
                <li>
                    {!! __('Conduct Rule 6') !!}
                </li>
                <li>
                    {!! __('Conduct Rule 7') !!}
                </li>
            </ul>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">{{ __('Currency & Travel Documents') }}</span></h3>
            <p>
                {{ __('Currency Para') }}
            </p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">{{ __('Duty-Free & Luggage Regulations') }}</span></h3>
            <p>
                {{ __('Duty-Free Para 1') }}
            </p>
            <p>
                {!! __('Duty-Free Para 2') !!}
            </p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">{{ __('Travel Insurance') }}</span></h3>
            <p>
                {{ __('Insurance Para') }}
            </p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">{{ __('Our Responsibilities to You') }}</span></h3>
            <p>
                {{ __('Responsibilities Para') }}
            </p>
            <p></p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">{{ __('Complaints Procedure') }}</span> - {{ __('We\'re Here to Help') }}</h3>
            <p>
                {{ __('Complaints Para 1') }}
            </p>
            <p>
                {{ __('Complaints Para 2') }}
                <pre>
                    AMT Coaches Ltd
                    London Gateway Services,
                    M1, London, 
                    NW7 3HU,
                    UK
                </pre>
            </p>
            <p>
                {{ __('Complaints Para 3') }}
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">{{ __('Contract Terms') }}</span> - {{ __('Your Agreement with AMT Coaches') }}</h3>
            <p>
                {{ __('Contract Terms Para') }}
            </p>
        </div>
        <div class="pb-4 tx-justify">
            <h3></h3>
            <p></p>
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
                                <h4>Person Name</h4>
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
                                <h4>Person Name</h4>
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
                                <h4>Person Name</h4>
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
            <img src="{{ asset('img/amt-coach1.png') }}" class="img-fluid rounded w-100" alt="AMT Coaches | Coach Hire Services London">
            <div class="banner-content">
                <h2 class="text-primary">{{ __('Hire Coach') }}</h2>
                <h1 class="text-white">{{ __('') }}</h1>
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