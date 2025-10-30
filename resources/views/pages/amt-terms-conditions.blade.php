@extends('layouts.template')
@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5 about-container">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Terms and Conditions</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Terms & Conditions</li>
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
            <h2 class="display-5 text-capitalize mb-3">Terms & Conditions</h2>
            <p class="mb-0">
                These Terms and Conditions apply to all bookings made with AMT Coaches, whether confirmed verbally, in writing, or through electronic communication.
            </p>
        </div>
    </div>
    <div class="container">
        <div class="pb-4 text-justify">
            <h3><span class="tx-secondary">Quotations</span> - Coach Hire Pricing Made Clear</h3>
            <p>
                All coach hire quotes are based on the most direct route and the details you provide at the time of enquiry. If you’ve got a preferred route in mind, just let us know — we’ll include it in the quote. Otherwise, the route will be left to our driver’s discretion to ensure a smooth and timely journey.
            </p>
            <p>
                All coach hire quotations are subject to vehicle availability when you decide to go ahead. Our quotes are valid for 28 days, unless we say otherwise, so don’t hang about!
            </p>
            <p>
                To lock in your booking, you’ll need to send an agreed deposit to our office along with the full details of your trip. Once that’s in, we’ll email or post you a booking confirmation with everything clearly laid out. Be sure to check it over and let us know straight away if anything looks off or needs tweaking.
            </p>
            <p>
                Unless we’ve stated it upfront, all quotes include the coach and driver hire only. Things like entry tickets, tolls, or parking fees aren’t included and would be your responsibility.
            </p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">Price Guarantee</span> - No Hidden Surprises</h3>
            <p>
                Once you’ve booked, the price we quote for your coach hire service is locked in – as long as you stick to the agreed payment schedule and don’t make major changes to the trip details. That means no hidden extras or last-minute surprises from our side.
            </p>
            <p>
                However, if your journey involves third-party suppliers (like ferry bookings or accommodation), especially outside the UK, their prices may vary due to exchange rates or external levies. If we know third-party services will be part of your booking, we’ll flag this clearly in your booking confirmation, so you’re always in the loop.
            </p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">Payment of Balance</span> - Settle Up Before You Set Off</h3>
            <p>
                To keep your coach hire running smoothly, the remaining balance must be paid no later than 14 days before your departure date. If you're booking within 14 days of travel, the full amount is due at the time of booking.
            </p>
            <p>
                We accept bank transfers, cheques, cash, credit/debit cards, and banker’s drafts. If you’re paying by cheque, make sure it reaches us at least 14 working days before travel to allow time for it to clear.
            </p>
            <p>
                If payment isn’t made on time, we reserve the right to charge interest at 2.5% per annum above the current Santander Bank base rate, calculated from the due date until payment is received in full.
            </p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">Cancellation Policy</span> - Coach Hire Bookings</h3>
            <p>
                If you need to cancel your coach hire booking, please give us a ring as soon as possible to let us know. After that, you’ll need to confirm your cancellation in writing – either by email or post – so we have it on record.
            </p>
            <p>
                Cancellation fees may apply depending on how close to the travel date you cancel. These charges help cover admin costs and the allocation of our vehicles and drivers. Full details of our cancellation terms and refund policy will be provided in your booking confirmation.
            </p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">Coach Hire Cancellation Policy</span></h3>
            <p>
                We understand that plans can change. If you need to cancel your coach hire booking, the following charges apply based on how much notice we receive in writing:
            </p>
            <ul>
                <li>More than 14 days before departure - Deposit only is retained</li>
                <li>Between 14 days and 48 hours before departure - 50% of the total hire cost is charged</li>
                <li>Less than 48 hours before departure - 100% of the total hire cost is charged</li>
            </ul>
            <p>
                All cancellations must be submitted in writing. These terms ensure fairness and allow us to manage our scheduling effectively.
            </p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">Route & Time Variations</span> - Staying on Track</h3>
            <p>
                We reserve the right to apply additional charges if your journey runs over the agreed mileage or hire time. Any extras will be fair and based on the actual costs we incur – no surprises.
            </p>
            <p>
                Your coach will depart at the times agreed in advance, so it’s your responsibility to ensure all passengers are ready and accounted for. We can’t be held liable for anyone left behind due to late arrivals or miscommunication within your group.
            </p>
            <p>
                The hire hours agreed at the time of booking must be followed, except in the case of a genuine emergency or diversion. Please note that we strictly follow UK laws on driver working hours and rest breaks – and under no circumstances can these be exceeded, no matter the circumstances.
            </p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">Use of Vehicle</span> - During Your Hire</h3>
            <p>Unless we've confirmed it in writing beforehand, please don't assume the coach will stay on-site between your outbound and return trips. Our vehicles aren’t guaranteed to remain with your group during stopovers or be available for extra use while parked at your destination. All coach usage beyond the agreed itinerary must be arranged in advance.</p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">Seating Capacity</span> - Know Your Coach Limits</h3>
            <p>
                When we confirm your coach hire booking, we’ll also confirm the seating capacity of the vehicle assigned. For everyone’s safety and comfort, the number of passengers must not exceed the maximum capacity stated for that coach. Overloading isn’t allowed under any circumstances, and it could lead to delays or refusal of service.
            </p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">Vehicle Provision</span> - Luxury & Executive Coach Hire</h3>
            <p>      
                We always aim to provide the exact luxury or executive coach specified in your booking. However, there may be occasions where the requested vehicle is temporarily unavailable due to unforeseen circumstances.
            </p>
            <p>
                In such cases, we’ll supply the highest quality vehicle available at the time — this may include a coach from one of our trusted partner operators. Rest assured, it will meet our usual high standards to ensure a comfortable and reliable journey.
            </p>
            <p>
                We also reserve the right to upgrade your hire to a larger vehicle at no extra cost. However, if your group uses additional seats beyond your original booking, a pro rata charge may apply for the extra capacity.
            </p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">Breakdowns & Delays</span></h3>
            <p>
                While we aim to keep your journey smooth and punctual, traffic and the unexpected can sometimes get in the way. We provide travel time estimates in good faith, but AMT Coaches cannot guarantee arrival or completion of a trip at a set time. We’re not liable for any delays, missed connections, or losses caused by vehicle breakdowns, roadworks, traffic congestion, or other situations beyond our control.
            </p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">Changes to Itinerary</span></h3>
            <p>
                Occasionally, we may need to tweak your planned itinerary — due to operational reasons or unavoidable circumstances. Where possible, AMT Coaches will inform you in advance of any changes to routes, schedules, or pick-up/drop-off points, and we’ll do our best to minimise any disruption to your travel plans.
            </p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">Passengers’ Belongings & Lost Property Policy</span></h3>
            <p>
                For safety reasons, all our coaches follow legal limits on how much luggage can be carried. Our drivers have the final say on what luggage can be taken onboard and how it’s stored. As a general rule, we allow one medium suitcase and one piece of hand luggage per passenger.
            </p>
            <p>
                Please note, AMT Coaches cannot accept responsibility for any personal items lost or damaged during travel or items left behind in the vehicle. If you leave something behind, don’t worry — all lost property found on our coaches is kept safely at our depot for up to three months, after which it will be securely disposed of if unclaimed.
            </p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">Passenger Conduct</span> – Keeping It Safe & Respectful Onboard</h3>
            <p>To make sure every journey runs smoothly and comfortably, all passengers are expected to follow a few simple rules while travelling with AMT Coaches:</p>
            <ul>
                <li>
                    <b>Respectful Behaviour:</b> For everyone’s peace and quiet, personal music players, radios, or musical instruments can’t be used onboard unless we’ve given the go-ahead. If permission is granted, it’ll be clearly stated in your booking confirmation.
                </li>
                <li>
                    <b>Drugs & Alcohol Policy:</b> Strictly no illegal drugs are allowed on board, whether for carrying or consumption. Prescription or over-the-counter medication is fine, but you may be asked to show proof, especially when travelling internationally.
                </li>
                <li>
                    <b>Driver Authority:</b> Our driver is in charge of the vehicle and has the authority to remove any passenger whose behaviour is abusive, unruly, or breaks the law. As the hirer, you’re responsible for your group’s behaviour and any damage caused during your coach hire.
                </li>
                <li>
                    <b>Safety While Moving:</b> For your own safety, never try to board or exit the coach while it’s moving. We’re not liable for any injury or loss resulting from unsafe behaviour.
                </li>
                <li>
                    <b>Alcohol & Food:</b> No alcohol is allowed onboard without written permission. It is against UK law to carry or drink alcohol on coaches travelling to or from designated sporting events. Eating and drinking (except small snacks like sweets or chocolate) is not permitted unless the vehicle is set up for it, or you’ve had it cleared with us or the driver in advance.
                </li>
                <li>
                    <b>Animals:</b> Only registered assistance dogs (guide dogs or hearing dogs) are allowed on board, and only if you let us know in advance. No other animals are permitted.
                </li>
                <li>
                    <b>Posters & Promotions:</b> No posters, leaflets or advertisements can be displayed on any of our coaches without prior written consent from AMT Coaches.
                </li>
            </ul>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">Currency & Travel Documents</span></h3>
            <p>
                When travelling abroad with AMT Coaches, it's your responsibility to carry the correct currency, a valid passport, and any required visas for the countries you’re visiting. Make sure everything’s in order before departure to avoid any travel disruptions.
            </p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">Duty-Free & Luggage Regulations</span></h3>
            <p>
                You are solely responsible for complying with current duty-free and duty-paid laws. We accept no liability for any delays, fines, or confiscations caused by failure to follow customs rules. You can check the latest guidelines at any UK port or airport.
            </p>
            <p>
                <b>Please note:</b> our driver will assess how much luggage and duty-free goods can legally be carried on board. Their decision is final to keep things safe and within legal limits.
            </p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">Travel Insurance</span></h3>
            <p>
                While coach travel insurance isn't mandatory, we strongly recommend it - especially for trips outside the UK. It's your responsibility to make sure you're adequately insured and have all the necessary travel documents in place for your journey.
            </p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">Our Responsibilities to You</span></h3>
            <p>
                We promise to deliver the coach hire service exactly as outlined in your booking confirmation. AMT Coaches is fully insured and accepts responsibility for the actions of our staff. We hold comprehensive public liability and passenger insurance to cover any personal injury or third-party incident that may occur during your journey.
            </p>
            <p></p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">Complaints Procedure</span> - We're Here to Help</h3>
            <p>
                At AMT Coaches, we pride ourselves on delivering top-quality coach hire services — but if something’s not quite right, we want to know. Most issues can be sorted quickly and easily at the time. If you experience a problem during your journey, please inform the driver or an AMT representative as soon as possible. We’ll do our best to put things right there and then.
            </p>
            <p>
                If your issue isn’t resolved to your satisfaction, please send your complaint in writing within 14 days of your hire date to:
                <pre>
                    AMT Coaches
                    The Reeves,
                    Snakey Ln, Feltham 
                    TW13 7NB,
                    UK
                </pre>
            </p>
            <p>
                We’ll acknowledge your complaint within 14 days and aim to provide a full response within 28 days.
            </p>
        </div>
        <div class="pb-4 tx-justify">
            <h3><span class="tx-secondary">Contract Terms</span> - Your Agreement with AMT Coaches</h3>
            <p>
                When you book with us, your contract is formed based on these Terms & Conditions and the written confirmation we send once we’ve received your deposit. This agreement is legally binding and governed by the laws of England and Wales, with any disputes handled exclusively by the Courts in that jurisdiction.
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