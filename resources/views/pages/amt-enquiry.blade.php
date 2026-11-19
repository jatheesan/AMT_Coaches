@extends('layouts.template')
@section('title', __('Get a Coach Hire Quote in London | AMT Coaches'))
@section('meta_description', __('Request a free quote for coach or minibus hire in London. Tell us your date, route and group size and AMT Coaches will reply quickly with a price.'))
@section('content')

<style>
    .enquiry-card {
        animation: fadeInUp 0.8s ease;
        background: #ffffffcc;
        backdrop-filter: blur(6px);
        border-radius: 20px;
        padding: 40px 30px;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
    }

    .form-label {
        font-weight: 600;
        color: #333;
    }

    .form-control {
        border-radius: 12px;
        border: 1px solid #ccc;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #4e54c8;
        box-shadow: 0 0 0 0.15rem rgba(78, 84, 200, 0.25);
    }

    .btn-enquiry {
        background: linear-gradient(to right, #4e54c8, #8f94fb);
        color: white;
        border-radius: 12px;
        font-size: 1.1rem;
        transition: all 0.3s ease;
    }

    .btn-enquiry:hover {
        background: linear-gradient(to right, #3d42a1, #6d73e8);
        transform: translateY(-2px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }

    .section-heading {
        font-size: 1.1rem;
        font-weight: 700;
        color: #4e54c8;
        border-bottom: 2px solid #e0e0ff;
        padding-bottom: 8px;
        margin-bottom: 4px;
    }

    .radio-group {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
    }

    .radio-group .form-check {
        background: #f8f9fa;
        border: 1px solid #ccc;
        border-radius: 12px;
        padding: 12px 24px 12px 40px;
        cursor: pointer;
        transition: all 0.3s ease;
        min-width: 140px;
        text-align: center;
    }

    .radio-group .form-check:hover {
        border-color: #4e54c8;
        background: #f0f0ff;
    }

    .radio-group .form-check-input:checked + .form-check-label {
        color: #4e54c8;
        font-weight: 600;
    }

    .radio-group .form-check-input:checked ~ .form-check-label,
    .radio-group .form-check:has(.form-check-input:checked) {
        border-color: #4e54c8;
        background: #eef0ff;
        box-shadow: 0 0 0 0.15rem rgba(78, 84, 200, 0.15);
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="enquiry-card">
                <h1 class="h2 text-center mb-4 text-primary fw-bold">🚌 {{ __('Coach Bus Enquiry') }}</h1>
                <form method="POST" action="{{ route('enquiry.email') }}" id="contact-form">
                    @csrf
                    <div class="row g-4">
                        {{-- Full Name --}}
                        <div class="col-md-12">
                            <label class="form-label">{{ __('Full Name') }}</label>
                            <input type="text" class="form-control form-control-lg" name="name" required placeholder="{{ __('John Doe') }}">
                        </div>

                        {{-- Business / Organization --}}
                        <div class="col-md-12">
                            <label class="form-label">{{ __('Business / Organization') }}</label>
                            <input type="text" class="form-control form-control-lg" name="business" placeholder="{{ __('Company or Organization name (optional)') }}">
                        </div>

                        {{-- Mobile & Email --}}
                        <div class="col-md-6">
                            <label class="form-label">{{ __('Mobile') }}</label>
                            <input type="tel" class="form-control form-control-lg" name="phone" required placeholder="+1234567890">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">{{ __('Email') }}</label>
                            <input type="email" class="form-control form-control-lg" name="email" required placeholder="email@example.com">
                        </div>

                        {{-- Number of Passengers --}}
                        <div class="col-md-12">
                            <label class="form-label">{{ __('Number Of Passengers') }}</label>
                            <input type="number" class="form-control form-control-lg" name="noofpassenger" placeholder="e.g., 20" min="1" required>
                        </div>

                        {{-- Luggage --}}
                        <div class="col-md-12">
                            <label class="form-label">{{ __('Luggage') }}</label>
                            <div class="radio-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="luggage" id="luggage-yes" value="Yes" required>
                                    <label class="form-check-label" for="luggage-yes">{{ __('Yes') }}</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="luggage" id="luggage-no" value="No">
                                    <label class="form-check-label" for="luggage-no">{{ __('No') }}</label>
                                </div>
                            </div>
                        </div>

                        {{-- ==================== PICKUP ADDRESS SECTION ==================== --}}
                        <div class="col-md-12">
                            <h2 class="h5 section-heading"><i class="fas fa-map-marker-alt text-primary me-2"></i>{{ __('Pickup Address') }}</h2>
                        </div>

                        <div class="col-md-8">
                            <label class="form-label">{{ __('Pickup Address') }}</label>
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bg-white"><i class="fas fa-map-marker-alt text-primary"></i></span>
                                <input type="text" class="form-control" name="pickupaddress" placeholder="{{ __('Enter a City or Airport') }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">{{ __('Postcode') }}</label>
                            <input type="text" class="form-control form-control-lg" name="pickup_postcode" placeholder="{{ __('e.g., SW1A 1AA') }}">
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">{{ __('Pickup Date & Time') }}</label>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <input type="date" class="form-control form-control-lg" name="pickupdate" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="time" class="form-control form-control-lg" name="pickuptime" step="1800" value="07:00" required>
                                </div>
                            </div>
                        </div>

                        {{-- ==================== DESTINATION ADDRESS SECTION ==================== --}}
                        <div class="col-md-12 mt-2">
                            <h2 class="h5 section-heading"><i class="fas fa-map-marker-alt text-danger me-2"></i>{{ __('Destination Address') }}</h2>
                        </div>

                        <div class="col-md-8">
                            <label class="form-label">{{ __('Destination Address') }}</label>
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bg-white"><i class="fas fa-map-marker-alt text-danger"></i></span>
                                <input type="text" class="form-control" name="destinationaddress" placeholder="{{ __('Enter a City or Airport') }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">{{ __('Postcode') }}</label>
                            <input type="text" class="form-control form-control-lg" name="destination_postcode" placeholder="{{ __('e.g., E1 6AN') }}">
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">{{ __('Destination Date & Time') }}</label>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <input type="date" class="form-control form-control-lg" name="destinationdate" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="time" class="form-control form-control-lg" name="destinationtime" step="1800" value="17:00" required>
                                </div>
                            </div>
                        </div>

                        {{-- Journey Type --}}
                        <div class="col-md-12">
                            <label class="form-label">{{ __('Select Journey Type') }}</label>
                            <div class="radio-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="journey_type" id="journey-single" value="Single Trip" required>
                                    <label class="form-check-label" for="journey-single">{{ __('Single Trip') }}</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="journey_type" id="journey-round" value="Round Trip">
                                    <label class="form-check-label" for="journey-round">{{ __('Round Trip') }}</label>
                                </div>
                            </div>
                        </div>

                        {{-- Submit --}}
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-enquiry w-100 py-3">🚀 {{ __('Submit Enquiry') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('pages.amt-enquiry-modal')
@endsection
