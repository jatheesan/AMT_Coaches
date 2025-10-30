@extends('layouts.template')
@section('content')

<style>
    /* body {
        background: linear-gradient(135deg, #4e54c8, #8f94fb);
    } */

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
                <h2 class="text-center mb-4 text-primary fw-bold">🚌 Coach Bus Enquiry</h2>
                <form method="POST" action="{{ route('enquiry.email') }}" id="contact-form">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-12">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control form-control-lg" name="name" required placeholder="John Doe">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Phone</label>
                            <input type="tel" class="form-control form-control-lg" name="phone" required placeholder="+1234567890">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control form-control-lg" name="email" required placeholder="email@example.com">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Pickup Address</label>
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bg-white"><i class="fas fa-map-marker-alt text-primary"></i></span>
                                <input type="text" class="form-control" name="pickupaddress" placeholder="Enter a City or Airport" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Drop-off Address</label>
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bg-white"><i class="fas fa-map-marker-alt text-danger"></i></span>
                                <input type="text" class="form-control" name="dropoffaddress" placeholder="Enter a City or Airport" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Pickup Date & Time</label>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <input type="date" class="form-control form-control-lg" name="pickupdate" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="time" class="form-control form-control-lg" name="pickuptime" step="1800" value="07:00" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Drop-off Date & Time</label>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <input type="date" class="form-control form-control-lg" name="dropoffdate" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="time" class="form-control form-control-lg" name="dropofftime" step="1800" value="17:00" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Number of Passengers</label>
                            <input type="number" class="form-control form-control-lg" name="noofpassenger" placeholder="e.g., 20" min="1" required>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-enquiry w-100 py-3">🚀 Submit Enquiry</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('pages.amt-enquiry-modal')
@endsection
