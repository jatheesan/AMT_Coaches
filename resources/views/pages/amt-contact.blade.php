@extends('layouts.template')
@section('title', __('Contact AMT Coaches | Coach Hire Quotes in London'))
@section('meta_description', __('Get in touch with AMT Coaches for reliable and affordable coach hire and minibus rentals in London. Request a quote or book your trip today.'))
@section('content')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5 about-container">
        <h1 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{ __('Contact Us') }}</h1>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url(app()->getLocale()) }}">{{ __('Home') }}</a></li>
            <li class="breadcrumb-item"><a href="#">{{ __('Pages') }}</a></li>
            <li class="breadcrumb-item active text-primary">{{ __('Contact') }}</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Contact Start -->
<div class="container-fluid contact py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp about-feature" data-wow-delay="0.1s">
            <h2 class="display-5 text-capitalize mb-3">{{ __('Request a') }} <span class="text-primary">{{ __('Coach Hire Quote') }}</span></h2>
            <p class="mb-0">{{ __('Contact Para')}}</p>
        </div>
        <div class="row g-5">
            <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="contact-add-item p-4">
                            <div class="contact-icon mb-4">
                                <i class="fas fa-map-marker-alt fa-2x"></i>
                            </div>
                            <div>
                                <h3 class="h4">{{ __('Address')}}</h3>
                                <p class="mb-0">London Gateway Services,</br>
                                    M1, London</br>
                                    NW7 3HU, UK</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="contact-add-item p-4">
                            <div class="contact-icon mb-4">
                                <i class="fas fa-envelope fa-2x"></i>
                            </div>
                            <div>
                                <h3 class="h4">{{ __('Mail Us')}}</h3>
                                <p class="mb-0">info@amtcoaches.co.uk</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="contact-add-item p-4">
                            <div class="contact-icon mb-4">
                                <i class="fa fa-phone-alt fa-2x"></i>
                            </div>
                            <div>
                                <h3 class="h4">{{ __('Telephone')}}</h3>
                                <p class="mb-0"> +447564447775</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="contact-add-item p-4">
                            <div class="contact-icon mb-4">
                                <i class="fab fa-firefox-browser fa-2x"></i>
                            </div>
                            <div>
                                <h3 class="h4">{{ __('WhatsApp')}}</h3>
                                <a href="https://wa.me/+447564447775" class="mb-0">+447564447775</a>
                                <!-- <p class="mb-0"> +447564447775</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         
            <div class="offset-xl-2 col-xl-8 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-secondary p-5 rounded">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <h3 class="h4 text-primary mb-4">{{ __('Send Your Message')}}</h3>
                    <form method="post" action="{{ route('contact.email') }}" id="contact-form"#>
                        {{ csrf_field() }}

                        <!-- <div class="col-12"  required>
                                hellooooooooooooooo
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                            <div id="recaptcha-error" class="text-danger" style="display: none;">Please verify that you're not a robot.</div>
                        </div> -->
                      
                        <div class="row g-4">
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="{{ __('Your Name')}}">
                                    <label for="name">{{ __('Your Name')}}</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="phone" class="form-control" id="phone" name="phone"  placeholder="{{ __('Your Phone No')}}">
                                    <label for="phone">{{ __('Your Phone No')}}</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="{{ __('Your Email')}}">
                                    <label for="email">{{ __('Your Email')}}</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control message-box" placeholder="{{ __('Leave a message here')}}" id="message" name="message"></textarea>
                                    <label for="message">{{ __('Message')}}</label>
                                </div>
                            </div>
                            <div class="col-12" required>
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display(['data-theme' => 'light']) !!}
                                <div id="recaptcha-error" class="text-danger recapcha-display">{{ __('Please verify that you are not a robot.')}}</div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-light w-100 py-3">{{ __('Send Message')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12">
                <div class="rounded">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2476.57178941541!2d-0.2649952!3d51.6310528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487617836255d657%3A0xb622e9c1e09afea4!2sLondon%20Gateway%20Coach%20Parking!5e0!3m2!1sen!2suk!4v1782587913962!5m2!1sen!2suk"  style="height: 400px; width: 100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2367.5874094644555!2d-0.4156480237191787!3d51.43200071620915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876737d088bebc5%3A0xe36ca81edd6f92bc!2sThe%20Reeves%2C%20Snakey%20Ln%2C%20Feltham%20TW13%207NB!5e1!3m2!1sen!2suk!4v1750358864616!5m2!1sen!2suk" 
                        style="height: 400px; width: 100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Contact End -->

<!-- <script>
        $(document).ready(function() {
            // This function will be called when reCAPTCHA is verified
            window.recaptchaVerified = function() {
                $('#recaptcha-error').hide();
            };

            $('#contact-form').on('submit', function(e) {
                var recaptchaResponse = grecaptcha.getResponse();
                
                if (recaptchaResponse.length === 0) {
                    $('#recaptcha-error').show();
                    e.preventDefault();
                    
                    // Optional: Scroll to the reCAPTCHA to make it more visible
                    $('html, body').animate({
                        scrollTop: $('#recaptcha-container').offset().top - 100
                    }, 500);
                }
            });
        });
    </script> -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection