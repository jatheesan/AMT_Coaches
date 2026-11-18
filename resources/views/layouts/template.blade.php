<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>@yield('title', 'AMT Coaches | Luxury Coach Hire in London & Minibus Rentals')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="keywords" content="@yield('meta_keywords', 'luxury coach hire, coach hire London, minibus hire, luxury coach rental, airport coach transfer, group travel services, school trip transport, executive coach hire, UK coach hire, rail replacement bus, corporate coach services, 53-seater coach, 36-seater minibus, AMT Coaches, private coach hire UK, luxury minibus hire with driver')">
        <meta name="description" content="@yield('meta_description', 'AMT Coaches offers luxury coach hire in London and minibus rentals. Reliable, comfortable vehicles, professional drivers, and competitive prices.')">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="@yield('title', 'AMT Coaches | Luxury Coach Hire in London & Minibus Rentals')">
        <meta property="og:description" content="@yield('meta_description', 'AMT Coaches offers luxury coach hire in London and minibus rentals. Reliable, comfortable vehicles, professional drivers, and competitive prices.')">
        <meta property="og:image" content="{{ asset('img/amt-coach-logo.png') }}">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta property="twitter:title" content="@yield('title', 'AMT Coaches | Luxury Coach Hire in London & Minibus Rentals')">
        <meta property="twitter:description" content="@yield('meta_description', 'AMT Coaches offers luxury coach hire in London and minibus rentals. Reliable, comfortable vehicles, professional drivers, and competitive prices.')">
        <meta property="twitter:image" content="{{ asset('img/amt-coach-logo.png') }}">


        @php
            $segments = request()->segments();
            if(count($segments) > 0 && in_array($segments[0], config('app.available_locales', ['en', 'fr', 'ta', 'ko']))) {
                array_shift($segments);
            }
            $cleanPath = implode('/', $segments);
        @endphp
        <link rel="canonical" href="{{ url()->current() }}" />
        <link rel="alternate" hreflang="en" href="{{ url('/en/' . $cleanPath) }}" />
        <link rel="alternate" hreflang="ko" href="{{ url('/ko/' . $cleanPath) }}" />
        <link rel="alternate" hreflang="x-default" href="{{ url('/en/' . $cleanPath) }}" />
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

        <!-- LocalBusiness Schema Markup -->
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "LocalBusiness",
          "name": "AMT Coaches",
          "image": "{{ asset('img/amt-coach-logo.png') }}",
          "@id": "{{ url('/') }}",
          "url": "{{ url('/') }}",
          "telephone": "+447564447775",
          "email": "info@amtcoaches.co.uk",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "London Gateway Services",
            "addressLocality": "London",
            "postalCode": "NW7 3HU",
            "addressCountry": "UK"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": 51.4320007,
            "longitude": -0.4156480
          },
          "openingHoursSpecification": [
            {
              "@type": "OpeningHoursSpecification",
              "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday"
              ],
              "opens": "09:00",
              "closes": "19:00"
            }
          ]
        }
        </script>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-B36KR2B3N9"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

  gtag('config', 'G-B36KR2B3N9');
</script>

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
                            <a href="https://maps.app.goo.gl/adELgwyuVAKSnpda6" class="text-muted me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>{{ __('Find A Location') }}</a>
                            <a href="tel:+447564447775" class="text-muted me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+447564447775</a>
                            <a href="javascript:location.href='mailto:'+['info','amtcoaches.co.uk'].join('@')" class="text-muted me-0"><i class="fas fa-envelope text-primary me-2"></i>{{ __('Email Us') }}</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="language-switcher">
                                <select class="language-select" onchange="changeLanguage(this.value)">
                                    <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>
                                        English
                                    </option>
                                    <option value="ko" {{ app()->getLocale() == 'ko' ? 'selected' : '' }}>
                                        한국어
                                    </option>
                                </select>
                            </div>
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
                        <img src="{{ asset('img/amt-coach-logo.png') }}" alt="Logo">
                    </a>
                    <div class="d-flex">
                        <div class="language-switch">
                            <select class="language-select" onchange="changeLanguage(this.value)">
                                <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>
                                    English
                                </option>
                                <option value="ko" {{ app()->getLocale() == 'ko' ? 'selected' : '' }}>
                                    한국어
                                </option>
                            </select>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="fa fa-bars"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto py-0">
                            <a href="{{ url('/') }}" class="nav-item nav-link active">{{ __('Home') }}</a>
                            <a href="{{ url('/about') }}" class="nav-item nav-link">{{ __('About Us') }}</a>
                            <!-- <a href="{{ url('/services') }}" class="nav-item nav-link">{{ __('Service') }}</a> -->
                            <div class="nav-item dropdown">
                                <a href="{{ url('/services') }}" class="nav-item nav-link" data-bs-toggle="dropdown">{{ __('Service') }}</a>
                                <div class="dropdown-menu m-0">
                                    <a href="{{ url('/corporate-coach-hire-london') }}" class="dropdown-item">{{ __('Corporate Coach Hire London') }}</a>
                                    <a href="{{ url('/school-trips-coach-hire-london') }}" class="dropdown-item">{{ __('School Trip Coach Hire London') }}</a>
                                    <a href="{{ url('/airport-transfers-london') }}" class="dropdown-item">{{ __('Airport Transfers in London') }}</a>
                                </div>
                            </div>
                            {{-- <a href="{{ url()->current() }}?lang=ta">தமிழ்</a> --}}
                            
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-item nav-link" data-bs-toggle="dropdown">{{ __('Our Fleet') }}</a>
                                <div class="dropdown-menu m-0">
                                    <a href="{{ url('/fleet') }}" class="dropdown-item">{{ __('16 - 61 seats coaches') }}</a>
                                </div>
                            </div>
                            <a href="{{ url('/contact') }}" class="nav-item nav-link">{{ __('Contact Us') }}</a>
                            @auth
                                <a href="{{ url('/psv-pvc-inspection') }}" class="nav-item nav-link">{{ __('PSV') }}</a>
                            @endauth
                        </div>
                        <a href="{{ url('/enquiry') }}" class="btn btn-primary rounded-pill py-2 px-4">{{ __('Hire Now') }}</a>
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
                                <a href="{{ url('/') }}" title="Coach hire in London"><img class="img-width" src="{{ asset('img/amt-coach-logo.png') }}" alt="AMT Coaches Logo - Luxury Coach Hire London" ></a>
                                <p class="mb-3">{{ __('Welcome to AMT Coaches, your trusted provider for') }} <a href="{{ url('/') }}" class="text-white text-decoration-underline" title="coach hire in London">{{ __('coach hire in London') }}</a>. {{ __('We offer luxury travel for all occasions.') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">{{ __('Quick Links') }}</h4>
                            <a href="{{ url('/about') }}"><i class="fas fa-angle-right me-2"></i>{{ __('About') }}</a>
                            <a href="{{ url('/fleet') }}"><i class="fas fa-angle-right me-2"></i>{{ __('Fleet') }}</a>
                            <a href="{{ url('/contact') }}"><i class="fas fa-angle-right me-2"></i>{{ __('Contact us') }}</a>
                            <a href="{{ url('/enquiry') }}"><i class="fas fa-angle-right me-2"></i>{{ __('Hire Now') }}</a>
                            <a href="{{ url('/terms-conditions') }}"><i class="fas fa-angle-right me-2"></i>{{ __('Terms & Conditions') }}</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">{{ __('Business Hours') }}</h4>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">{{ __('Mon - Saturday:') }}</h6>
                                <p class="text-white mb-0">{{ __('09:00 to 19:00 pm') }}</p>
                            </div>
                            {{-- <div class="mb-3">
                                <h6 class="text-muted mb-0">Saturday:</h6>
                                <p class="text-white mb-0">10:00 am to 17:00 pm</p>
                            </div> --}}
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">{{ __('Sunday:') }}</h6>
                                <p class="text-white mb-0">{{ __('Closed') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">{{ __('Contact Info') }}</h4>
                            <a href="#"><i class="fa fa-map-marker-alt me-2"></i> 
                                    London Gateway Services,</br>
                                    M1, London</br>
                                    NW7 3HU,</br>
                                    UK
                            </a>
                            <a href="javascript:location.href='mailto:'+['info','amtcoaches.co.uk'].join('@')"><i class="fas fa-envelope me-2"></i> {{ __('Email Us') }}</a>
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
                        <span class="text-body"><a href="{{ url('/') }}" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>AMTCoaches</a>, {{ __('All rights reserved.') }}</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
                        {{ __('Developed By') }} <a class="border-bottom text-white" href="https://itirepairs.co.uk/"> ITIRepairs Ltd</a>
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
    <script>
        function changeLanguage(locale) {
            let currentPath = window.location.pathname.split('/').slice(2).join('/');
            window.location.href = '/' + locale + '/' + currentPath;
        }
    </script>
    </body>

</html>