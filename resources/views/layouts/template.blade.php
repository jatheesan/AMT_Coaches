<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>AMT Coaches | Luxury Coach Hire London | Minibus & Coach Rentals</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="keywords" content="luxury coach hire, coach hire London, minibus hire, luxury coach rental, airport coach transfer, group travel services, school trip transport, executive coach hire, UK coach hire, rail replacement bus, corporate coach services, 53-seater coach, 36-seater minibus, AMT Coaches, private coach hire UK, luxury minibus hire with driver">
        <meta name="description" content="AMT Coaches offers reliable luxury coach hire and minibus rentals in London. Comfortable vehicles, professional drivers, and competitive prices.">


        <link rel="canonical" href="https://www.amtcoaches.co.uk/" />
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@eonasdan/tempus-dominus@6.8.0/dist/css/tempus-dominus.min.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link  href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        

    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary template-spinner"  role="status">
                <span class="sr-only">AMT</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid topbar bg-secondary d-none d-xl-block w-100">
            <div class="container">
                <div class="row gx-0 align-items-center template-topbar">
                    <div class="col-lg-6 text-center text-lg-start mb-lg-0">
                        <div class="d-flex flex-wrap">
                            <a href="https://maps.app.goo.gl/adELgwyuVAKSnpda6" class="text-muted me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                            <a href="tel:+447564447775" class="text-muted me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+447564447775</a>
                            <a href="mailto:info@amtcoaches.co.uk" class="text-muted me-0"><i class="fas fa-envelope text-primary me-2"></i>info@amtcoaches.co.uk</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end">
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="https://www.facebook.com/profile.php?id=61577832150237" class="btn btn-light btn-sm-square rounded-circle me-3"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.tiktok.com/@user5741077271614" class="btn btn-light btn-sm-square rounded-circle me-3"><i class="fab fa-tiktok"></i></a>
                            <a href="https://www.tiktok.com/@user5741077271614" class="btn btn-light btn-sm-square rounded-circle me-3"><i class="fab fa-instagram"></i></a>
                            <a href="https://wa.me/+447564447775" class="btn btn-light btn-sm-square rounded-circle me-3"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar sticky-top px-0 px-lg-4 py-2 py-lg-0">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a href="" class="navbar-brand p-0">
                        <!-- <h1 class="display-6 text-primary"><i class="fas fa-bus me-3"></i>AMT<span class="nav-coach">Coaches<Span></h1> -->
                        <!-- <i class="fa-solid fa-bus me-3"></i> -->
                        <img src="{{ asset('img/amt-logos.png') }}" alt="Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto py-0">
                            <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                            <a href="{{ url('/about') }}" class="nav-item nav-link">About Us</a>
                            <a href="{{ url('/services') }}" class="nav-item nav-link">Service</a>
                            
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-item nav-link" data-bs-toggle="dropdown">Our Fleet</a>
                                <div class="dropdown-menu m-0">
                                    <a href="{{ url('/fleet') }}" class="dropdown-item">16 - 61 seats coaches</a>
                                </div>
                            </div>
                            <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact Us</a>
                            @auth
                                <a href="{{ url('/psv-pvc-inspection') }}" class="nav-item nav-link">PSV</a>
                            @endauth
                        </div>
                        <a href="{{ url('/enquiry') }}" class="btn btn-primary rounded-pill py-2 px-4">Hire Now</a>
                        @auth
                            <div class="nav-item dropdown ms-2 my-2">
                                <a href="#" class="btn btn-secondary rounded-pill" data-bs-toggle="dropdown"><i class="fas fa-user"></i></a>
                                <div class="dropdown-menu m-0">
                                    <div class="ps-2">{{ Auth::user()->name }}</div>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <a class="ps-2" href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </a>
                                    </form>
                                </div>
                            </div>
                        @endauth
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Content Start -->
        <section>
            <div>
                @yield('content')
            </div>
        </section>
        <!-- Content End -->


        <!-- Footer Start -->
        <div class="container-fluid footer py-2 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <div class="footer-item">
                                <!-- <h4 class="text-primary mb-4">
                                    <i class="fas fa-bus me-2"></i>AMT<span class="nav-coach">Coaches<Span></Span>
                                </h4> -->
                                <img class="img-width" src="{{ asset('img/amt-logos.png') }}" alt="Logo" >
                                <p class="mb-3">At AMTCoaches, we specialize in delivering premium coaches and minibuses hire services across
                                    the UK.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Quick Links</h4>
                            <a href="{{ url('/about') }}"><i class="fas fa-angle-right me-2"></i> About</a>
                            <a href="{{ url('/fleet') }}"><i class="fas fa-angle-right me-2"></i> Fleet</a>
                            <a href="{{ url('/contact') }}"><i class="fas fa-angle-right me-2"></i> Contact us</a>
                            <a href="{{ url('/enquiry') }}"><i class="fas fa-angle-right me-2"></i> Hire Now</a>
                            <a href="{{ url('/terms-conditions') }}"><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Business Hours</h4>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Mon - Friday:</h6>
                                <p class="text-white mb-0">09:00 to 19:00 pm</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Saturday:</h6>
                                <p class="text-white mb-0">10:00 am to 17:00 pm</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Sunday:</h6>
                                <p class="text-white mb-0">Closed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Contact Info</h4>
                            <a href="#"><i class="fa fa-map-marker-alt me-2"></i> 
                                    The Reeves,</br>
                                    Snakey Ln, Feltham</br>
                                    TW13 7NB,</br>
                                    UK
                            </a>
                            <a href="mailto:info@example.com"><i class="fas fa-envelope me-2"></i> info@amtcoaches.co.uk</a>
                            <a href="tel:+447564447775"><i class="fas fa-phone me-2"></i> +447564447775</a>
                            <div class="d-flex">
                                <a class="btn btn-secondary btn-md-square rounded-circle me-3" href="https://www.facebook.com/profile.php?id=61577832150237"><i class="fab fa-facebook-f text-white"></i></a>
                                <a class="btn btn-secondary btn-md-square rounded-circle me-3" href="https://www.tiktok.com/@user5741077271614"><i class="fab fa-tiktok text-white"></i></a>
                                <a class="btn btn-secondary btn-md-square rounded-circle me-3" href="https://www.tiktok.com/@user5741077271614"><i class="fab fa-instagram text-white"></i></a>
                                <a class="btn btn-secondary btn-md-square rounded-circle me-3" href="https://wa.me/+447564447775"><i class="fab fa-whatsapp text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="{{ url('/') }}" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>AMTCoaches</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
                        Designed By <a class="border-bottom text-white" href="https://itirepairs.co.uk/">ITIRepairs Ltd</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>

    </body>

</html>