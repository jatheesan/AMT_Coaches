@extends('layouts.template')
@section('content')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5 about-container">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Contact</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Contact Start -->
<div class="container-fluid contact py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp about-feature" data-wow-delay="0.1s">
            <h2 class="display-5 text-capitalize text-primary mb-3">Contact Us</h2>
            <p class="mb-0">Have questions or ready to book your journey? Our friendly team is here to help with quotes,
                bookings, and any travel inquiries.</p>
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
                                <h4>Address</h4>
                                <p class="mb-0">The Reeves,</br>
                                    Snakey Ln, Feltham</br>
                                    TW13 7NB, UK</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="contact-add-item p-4">
                            <div class="contact-icon mb-4">
                                <i class="fas fa-envelope fa-2x"></i>
                            </div>
                            <div>
                                <h4>Mail Us</h4>
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
                                <h4>Telephone</h4>
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
                                <h4>WhatsApp</h4>
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
                    <h4 class="text-primary mb-4">Send Your Message</h4>
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
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="phone" class="form-control" id="phone" name="phone"  placeholder="Phone">
                                    <label for="phone">Your Phone</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control message-box" placeholder="Leave a message here" id="message" name="message"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12" required>
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display(['data-theme' => 'light']) !!}
                                <div id="recaptcha-error" class="text-danger recapcha-display">Please verify that you're not a robot.</div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-light w-100 py-3">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12">
                <div class="rounded">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2367.5874094644555!2d-0.4156480237191787!3d51.43200071620915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876737d088bebc5%3A0xe36ca81edd6f92bc!2sThe%20Reeves%2C%20Snakey%20Ln%2C%20Feltham%20TW13%207NB!5e1!3m2!1sen!2suk!4v1750358864616!5m2!1sen!2suk" 
                        style="height: 400px; width: 100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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