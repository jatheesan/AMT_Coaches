<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <title>@yield('title', 'AMT Coaches | Luxury Coach Hire in London & Minibus Rentals')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <!-- Favicons: bus front view for browser tabs (clear at 16px), full logo for home-screen icons -->
        <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="48x48">
        <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
        <link rel="manifest" href="{{ asset('site.webmanifest') }}">
        <meta name="theme-color" content="#1F2E4E">
        <meta name="keywords" content="@yield('meta_keywords', 'coach hire London, minibus hire London, coach hire with driver, luxury coach hire London, airport coach transfers London, Heathrow coach hire, school trip coach hire, corporate coach hire London, private coach hire, wedding coach hire, rail replacement coaches, 16 seater minibus hire, AMT Coaches')">
        <meta name="description" content="@yield('meta_description', 'AMT Coaches offers luxury coach hire in London and minibus rentals. Reliable, comfortable vehicles, professional drivers, and competitive prices.')">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="@yield('title', 'AMT Coaches | Luxury Coach Hire in London & Minibus Rentals')">
        <meta property="og:description" content="@yield('meta_description', 'AMT Coaches offers luxury coach hire in London and minibus rentals. Reliable, comfortable vehicles, professional drivers, and competitive prices.')">
        <meta property="og:image" content="{{ asset('img/amt-coach1.webp') }}">

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:title" content="@yield('title', 'AMT Coaches | Luxury Coach Hire in London & Minibus Rentals')">
        <meta name="twitter:description" content="@yield('meta_description', 'AMT Coaches offers luxury coach hire in London and minibus rentals. Reliable, comfortable vehicles, professional drivers, and competitive prices.')">
        <meta name="twitter:image" content="{{ asset('img/amt-coach1.webp') }}">


        @php
            $segments = request()->segments();
            if(count($segments) > 0 && in_array($segments[0], config('app.available_locales', ['en', 'fr', 'ta', 'ko']))) {
                array_shift($segments);
            }
            $cleanPath = implode('/', $segments);
        @endphp
        {{-- The homepage is also served at "/" (no redirect, faster first load); its canonical address stays /en --}}
        <link rel="canonical" href="{{ request()->path() === '/' ? url('/en') : url()->current() }}" />
        <link rel="alternate" hreflang="en" href="{{ url('/en/' . $cleanPath) }}" />
        <link rel="alternate" hreflang="ko" href="{{ url('/ko/' . $cleanPath) }}" />
        <link rel="alternate" hreflang="x-default" href="{{ url('/en/' . $cleanPath) }}" />
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        {{-- Nothing below blocks the first paint except Bootstrap's layout CSS:
             - web fonts, icons and animation styles load in the background (text shows straight away in a fallback font)
             - Font Awesome is self-hosted with font-display: swap
             - the template's own CSS is small, so it is inlined --}}
        @foreach ([
            'https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Montserrat:wght@400..900&display=swap',
            asset('lib/fontawesome/css/all.min.css'),
            'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css',
            asset('lib/animate/animate.min.css'),
        ] as $deferredCss)
            <link rel="stylesheet" href="{{ $deferredCss }}" media="print" onload="this.media='all'">
            <noscript><link rel="stylesheet" href="{{ $deferredCss }}"></noscript>
        @endforeach
        <link rel="preload" href="{{ asset('lib/fontawesome/webfonts/fa-solid-900.woff2') }}" as="font" type="font/woff2" crossorigin>

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        {{-- Template stylesheet inlined (image paths rewritten to absolute URLs) --}}
        <style>{!! str_replace('url(../img/', 'url(' . asset('img') . '/', file_get_contents(public_path('css/style.css'))) !!}</style>

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
            "streetAddress": "London Gateway Services, M1",
            "addressLocality": "London",
            "postalCode": "NW7 3HU",
            "addressCountry": "GB"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": 51.6326,
            "longitude": -0.2622
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
                "Saturday",
                "Sunday"
              ],
              "opens": "00:00",
              "closes": "23:59"
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

        {{-- The full-screen loading spinner was removed: it hid the whole page until every script had loaded,
             which delayed the first paint (PageSpeed LCP 5.8s on mobile). --}}

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
                            <a href="https://www.tiktok.com/@amtcoaches" class="btn btn-light btn-sm-square rounded-circle me-3"><i class="fab fa-tiktok"></i></a>
                            <a href="https://www.instagram.com/amtcoaches" class="btn btn-light btn-sm-square rounded-circle me-3"><i class="fab fa-instagram"></i></a>
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
                    <a href="{{ url(app()->getLocale()) }}" class="navbar-brand p-0">
                        <!-- <h1 class="display-6 text-primary"><i class="fas fa-bus me-3"></i>AMT<span class="nav-coach">Coaches<Span></h1> -->
                        <!-- <i class="fa-solid fa-bus me-3"></i> -->
                        <img src="{{ asset('img/amt-coach-logo.webp') }}" width="240" height="240" alt="AMT Coaches - Coach Hire London">
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
                            <a href="{{ url(app()->getLocale()) }}" class="nav-item nav-link active">{{ __('Home') }}</a>
                            <a href="{{ url(app()->getLocale() . '/about') }}" class="nav-item nav-link">{{ __('About Us') }}</a>
                            <!-- <a href="{{ url(app()->getLocale() . '/services') }}" class="nav-item nav-link">{{ __('Service') }}</a> -->
                            <div class="nav-item dropdown">
                                <a href="{{ url(app()->getLocale() . '/services') }}" class="nav-item nav-link" data-bs-toggle="dropdown">{{ __('Service') }}</a>
                                <div class="dropdown-menu m-0">
                                    <a href="{{ url(app()->getLocale() . '/corporate-coach-hire-london') }}" class="dropdown-item">{{ __('Corporate Coach Hire London') }}</a>
                                    <a href="{{ url(app()->getLocale() . '/school-trips-coach-hire-london') }}" class="dropdown-item">{{ __('School Trip Coach Hire London') }}</a>
                                    <a href="{{ url(app()->getLocale() . '/airport-transfers-london') }}" class="dropdown-item">{{ __('Airport Transfers in London') }}</a>
                                    <a href="{{ url(app()->getLocale() . '/minibus-hire-london') }}" class="dropdown-item">{{ __('Minibus Hire London') }}</a>
                                    <a href="{{ url(app()->getLocale() . '/private-coach-hire-london') }}" class="dropdown-item">{{ __('Private Coach Hire London') }}</a>
                                    <a href="{{ url(app()->getLocale() . '/rail-replacement-coach-hire') }}" class="dropdown-item">{{ __('Rail Replacement Coach Hire') }}</a>
                                    <a href="{{ url(app()->getLocale() . '/services') }}" class="dropdown-item">{{ __('All Coach Hire Services') }}</a>
                                </div>
                            </div>
                            {{-- <a href="{{ url()->current() }}?lang=ta">தமிழ்</a> --}}
                            
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-item nav-link" data-bs-toggle="dropdown">{{ __('Our Fleet') }}</a>
                                <div class="dropdown-menu m-0">
                                    <a href="{{ url(app()->getLocale() . '/fleet') }}" class="dropdown-item">{{ __('16 - 61 seats coaches') }}</a>
                                </div>
                            </div>
                            <a href="{{ url(app()->getLocale() . '/contact') }}" class="nav-item nav-link">{{ __('Contact Us') }}</a>
                            @auth
                                <a href="{{ url('/psv-pvc-inspection') }}" class="nav-item nav-link">{{ __('PSV') }}</a>
                            @endauth
                        </div>
                        <a href="{{ url(app()->getLocale() . '/enquiry') }}" class="btn btn-primary rounded-pill py-2 px-4">{{ __('Hire Now') }}</a>
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
                                <a href="{{ url(app()->getLocale()) }}" title="Coach hire in London"><img class="img-width" src="{{ asset('img/amt-coach-logo.webp') }}" width="240" height="240" alt="AMT Coaches Logo - Luxury Coach Hire London" ></a>
                                <p class="mb-3">{{ __('Welcome to AMT Coaches, your trusted provider for') }} <a href="{{ url(app()->getLocale()) }}" class="text-white text-decoration-underline" title="coach hire in London">{{ __('coach hire in London') }}</a>. {{ __('We offer luxury travel for all occasions.') }}</p>
                                <img width="360" height="110" src="{{ asset('img/DBS.webp') }}" alt="DBS Checked - AMT Coaches drivers are DBS checked" title="DBS Checked" loading="lazy" style="width: auto; max-height: 100px;">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h2 class="h4 text-white mb-4">{{ __('Quick Links') }}</h2>
                            <a href="{{ url(app()->getLocale() . '/about') }}"><i class="fas fa-angle-right me-2"></i>{{ __('About') }}</a>
                            <a href="{{ url(app()->getLocale() . '/fleet') }}"><i class="fas fa-angle-right me-2"></i>{{ __('Fleet') }}</a>
                            <a href="{{ url(app()->getLocale() . '/services') }}"><i class="fas fa-angle-right me-2"></i>{{ __('Coach Hire Services') }}</a>
                            <a href="{{ url(app()->getLocale() . '/minibus-hire-london') }}"><i class="fas fa-angle-right me-2"></i>{{ __('Minibus Hire London') }}</a>
                            <a href="{{ url(app()->getLocale() . '/airport-transfers-london') }}"><i class="fas fa-angle-right me-2"></i>{{ __('Airport Transfers') }}</a>
                            <a href="{{ url(app()->getLocale() . '/contact') }}"><i class="fas fa-angle-right me-2"></i>{{ __('Contact us') }}</a>
                            <a href="{{ url(app()->getLocale() . '/enquiry') }}"><i class="fas fa-angle-right me-2"></i>{{ __('Hire Now') }}</a>
                            <a href="{{ url(app()->getLocale() . '/terms-conditions') }}"><i class="fas fa-angle-right me-2"></i>{{ __('Terms & Conditions') }}</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h2 class="h4 text-white mb-4">{{ __('Business Hours') }}</h2>
                            <div class="mb-3">
                                <p class="h6 text-muted mb-0">{{ __('Monday - Sunday:') }}</p>
                                <p class="text-white mb-0">{{ __('Open 24/7') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h2 class="h4 text-white mb-4">{{ __('Contact Info') }}</h2>
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
                                <a class="btn btn-secondary btn-md-square rounded-circle me-3" href="https://www.tiktok.com/@amtcoaches"><i class="fab fa-tiktok text-white"></i></a>
                                <a class="btn btn-secondary btn-md-square rounded-circle me-3" href="https://www.instagram.com/amtcoaches"><i class="fab fa-instagram text-white"></i></a>
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
                        <span class="text-body"><a href="{{ url(app()->getLocale()) }}" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>AMTCoaches</a>, {{ __('All rights reserved.') }}</span>
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
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}?v={{ filemtime(public_path('js/main.js')) }}"></script>
    <script>
        function changeLanguage(locale) {
            let currentPath = window.location.pathname.split('/').slice(2).join('/');
            window.location.href = '/' + locale + '/' + currentPath;
        }
    </script>
    </body>

</html>