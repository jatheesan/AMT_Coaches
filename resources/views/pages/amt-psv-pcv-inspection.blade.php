@extends('layouts.template')
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
                <form method="POST" action="{{ route('inspection.email') }}"  id="contact-form">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-12">
                            <label class="form-label">Driver's Full Name</label>
                            <input type="text" class="form-control form-control-lg" name="name" required placeholder="Driver's Full Name">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Vehicle Registration Number</label>
                            <input type="text" class="form-control form-control-lg" name="registration_number" required placeholder="Vehicle Registration Number">
                        </div>
                         <div class="col-md-12">
                            <label class="form-label">Choose Date</label>
                            <div class="row g-2">
                                <div class="col-md-12">
                                    <input type="date" class="form-control form-control-lg" name="choose_date" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Odometer Reading</label>
                            <input type="text" class="form-control form-control-lg" name="odometer_reading" required placeholder="Odometer Reading">
                        </div>
                        <div class="col-md-12">
                                <label class="form-label">Depot</label>
                                    <select class="form-control form-select" id="depot_name"
                                    name="depot_name" required>
                                      <option value="" disabled selected hidden>Depot</option>
                                        <option>London Gateway Service </option>
                                        <!-- <option>Other</option> -->
                                         <option value="current_location">Get the current location</option>
                                    </select>
                                    <input type="hidden" id="latitude" name="latitude">
                                  <input type="hidden" id="longitude" name="longitude">
                                    <!-- <input type="hidden" id="latitude" name="latitude">
                                    <input type="hidden" id="longitude" name="longitude">
                                    <input type="hidden" id="current_address" name="current_address"> -->
                        </div>
                        @php
                            $inspectionFields = include resource_path('data/inspection_fields.php');
                        @endphp
                        @foreach($inspectionFields as $key => $label)
                            <div class="col-md-12">
                                <label class="form-label">{{ $label }}</label>
                                <input type="hidden" name="fields[{{ $loop->index }}][key]" value="{{ $key }}">
                                <select class="form-control form-select animate__animated animate__fadeIn" name="fields[{{ $loop->index }}][value]" required>
                                    <option value="" disabled selected hidden>{{ $label }}</option>
                                    <option>Okay</option>
                                    <option>Not Okay</option>
                                    <option>Not Applicable</option>
                                </select>
                            </div>
                        @endforeach
                        <!-- <div class="col-md-12">
                                <label class="form-label">Fuel/Oil/Fluid Leaks & Adblue</label>
                                    <select class="form-control form-select" id="fuel_leak"
                                    name="fuel_leak" required>
                                      <option value="" disabled selected hidden>Fuel/Oil/Fluid Leaks & Adblue</option>
                                        <option>Okay</option>
                                        <option>Not Okay</option>
                                        <option>Not Applicable</option>
                                    </select>
                        </div>
                        <div class="col-md-12">
                                <label class="form-label">Battery Security</label>
                                    <select class="form-control form-select" id="battery_security"
                                    name="battery_security" required>
                                      <option value="" disabled selected hidden>Battery Security</option>
                                        <option>Okay</option>
                                        <option>Not Okay</option>
                                        <option>Not Applicable</option>
                                    </select>
                        </div>
                        <div class="col-md-12">
                                <label class="form-label">Wheel,Tyres & Fixings</label>
                                    <select class="form-control form-select" id="wheel_fixings"
                                    name="wheel_fixings" required>
                                      <option value="" disabled selected hidden>Wheel,Tyres & Fixings</option>
                                        <option>Okay</option>
                                        <option>Not Okay</option>
                                        <option>Not Applicable</option>
                                    </select>
                        </div>
                        <div class="col-md-12">
                                <label class="form-label">Spray Suppression</label>
                                    <select class="form-control form-select" id="spray"
                                    name="spray" required>
                                      <option value="" disabled selected hidden>Spray Suppression</option>
                                        <option>Okay</option>
                                        <option>Not Okay</option>
                                        <option>Not Applicable</option>
                                    </select>
                        </div>
                        <div class="col-md-12">
                                <label class="form-label">Registration Plates / License Visible</label>
                                    <select class="form-control form-select" id="registration_plate"
                                    name="registration_plate" required>
                                      <option value="" disabled selected hidden>Registration Plates / License Visible</option>
                                        <option>Okay</option>
                                        <option>Not Okay</option>
                                        <option>Not Applicable</option>
                                    </select>
                        </div>
                          <div class="col-md-12">
                                <label class="form-label">Body Condition, Security & Wings</label>
                                    <select class="form-control form-select" id="body_check"
                                    name="body_check" required>
                                      <option value="" disabled selected hidden>Body Condition, Security & Wings</option>
                                        <option>Okay</option>
                                        <option>Not Okay</option>
                                        <option>Not Applicable</option>
                                    </select>
                        </div>
                          <div class="col-md-12">
                                <label class="form-label">Steering</label>
                                    <select class="form-control form-select" id="steering"
                                    name="steering" required>
                                      <option value="" disabled selected hidden>Steering</option>
                                        <option>Okay</option>
                                        <option>Not Okay</option>
                                        <option>Not Applicable</option>
                                    </select>
                        </div>
                        <div class="col-md-12">
                                <label class="form-label">Brakes Including ABS / EBS</label>
                                    <select class="form-control form-select" id="spray"
                                    name="spray" required>
                                      <option value="" disabled selected hidden>Brakes Including ABS / EBS</option>
                                        <option>Okay</option>
                                        <option>Not Okay</option>
                                        <option>Not Applicable</option>
                                    </select>
                        </div>
                        <div class="col-md-12">
                                <label class="form-label">Air Build Up / Leaks</label>
                                    <select class="form-control form-select" id="spray"
                                    name="spray" required>
                                      <option value="" disabled selected hidden>Air Build Up / Leaks</option>
                                        <option>Okay</option>
                                        <option>Not Okay</option>
                                        <option>Not Applicable</option>
                                    </select>
                        </div>
                        <div class="col-md-12">
                                <label class="form-label">Odometer / Speed Limiter / Warning lights / MIL</label>
                                    <select class="form-control form-select" id="spray"
                                    name="spray" required>
                                      <option value="" disabled selected hidden>Odometer / Speed Limiter / Warning lights / MIL</option>
                                        <option>Okay</option>
                                        <option>Not Okay</option>
                                        <option>Not Applicable</option>
                                    </select>
                        </div>
                        <div class="col-md-12">
                                <label class="form-label">Seat Belts & Cab Interior</label>
                                    <select class="form-control form-select" id="spray"
                                    name="spray" required>
                                      <option value="" disabled selected hidden>Seat Belts & Cab Interior</option>
                                        <option>Okay</option>
                                        <option>Not Okay</option>
                                        <option>Not Applicable</option>
                                    </select>
                        </div>
                        <div class="col-md-12">
                                <label class="form-label">Tachograph / Tachograph rolls</label>
                                    <select class="form-control form-select" id="spray"
                                    name="spray" required>
                                      <option value="" disabled selected hidden>Tachograph / Tachograph rolls</option>
                                        <option>Okay</option>
                                        <option>Not Okay</option>
                                        <option>Not Applicable</option>
                                    </select>
                        </div>
                        <div class="col-md-12">
                                <label class="form-label">Wipers / Washers / Horn / Glass Visibility</label>
                                    <select class="form-control form-select" id="spray"
                                    name="spray" required>
                                      <option value="" disabled selected hidden>Wipers / Washers / Horn / Glass Visibility</option>
                                        <option>Okay</option>
                                        <option>Not Okay</option>
                                        <option>Not Applicable</option>
                                    </select>
                        </div>
                        <div class="col-md-12">
                                <label class="form-label">Exhaust Smoke </label>
                                    <select class="form-control form-select" id="spray"
                                    name="spray" required>
                                      <option value="" disabled selected hidden>Exhaust Smoke</option>
                                        <option>Okay</option>
                                        <option>Not Okay</option>
                                        <option>Not Applicable</option>
                                    </select>
                        </div>
                        <div class="col-md-12">
                                <label class="form-label">Reflectors, Markers,Lights & Indicators Including side Repeaters</label>
                                    <select class="form-control form-select" id="spray"
                                    name="spray" required>
                                      <option value="" disabled selected hidden>Reflectors, Markers,Lights & Indicators Including side Repeaters</option>
                                        <option>Okay</option>
                                        <option>Not Okay</option>
                                        <option>Not Applicable</option>
                                    </select>
                        </div>
                        <div class="col-md-12">
                                <label class="form-label">Height of Vehicle</label>
                                    <select class="form-control form-select" id="spray"
                                    name="spray" required>
                                      <option value="" disabled selected hidden>Height of Vehicle</option>
                                        <option>Okay</option>
                                        <option>Not Okay</option>
                                        <option>Not Applicable</option>
                                    </select>
                        </div>
                        <div class="col-md-12">
                                <label class="form-label">Saloon Lighting & Floor Covering</label>
                                    <select class="form-control form-select" id="spray"
                                    name="spray" required>
                                      <option value="" disabled selected hidden>Saloon Lighting & Floor Covering</option>
                                        <option>Okay</option>
                                        <option>Not Okay</option>
                                        <option>Not Applicable</option>
                                    </select>
                        </div>
                        <div class="col-md-12">
                                <label class="form-label">Heating & Ventilation</label>
                                    <select class="form-control form-select" id="spray"
                                    name="spray" required>
                                      <option value="" disabled selected hidden>Heating & Ventilation</option>
                                        <option>Okay</option>
                                        <option>Not Okay</option>
                                        <option>Not Applicable</option>
                                    </select>
                        </div>
                         <div class="col-md-12">
                                <label class="form-label">Doors & Exits</label>
                                    <select class="form-control form-select" id="spray"
                                    name="spray" required>
                                      <option value="" disabled selected hidden>Doors & Exits</option>
                                        <option>Okay</option>
                                        <option>Not Okay</option>
                                        <option>Not Applicable</option>
                                    </select>
                        </div>
                         <div class="col-md-12">
                                <label class="form-label">Passengers Seat Belts</label>
                                    <select class="form-control form-select" id="spray"
                                    name="spray" required>
                                      <option value="" disabled selected hidden>Passengers Seat Belts</option>
                                        <option>Okay</option>
                                        <option>Not Okay</option>
                                        <option>Not Applicable</option>
                                    </select>
                        </div>
                         <div class="col-md-12">
                                <label class="form-label">Fire Extinguisher, Emergency Hammer & First Eid Kit</label>
                                    <select class="form-control form-select" id="spray"
                                    name="spray" required>
                                      <option value="" disabled selected hidden>Fire Extinguisher, Emergency Hammer & First Eid Kit</option>
                                        <option>Okay</option>
                                        <option>Not Okay</option>
                                        <option>Not Applicable</option>
                                    </select>
                        </div>
                         <div class="col-md-12">
                                <label class="form-label">Wheelchair Accessibility, Tail Lift & Safety Equipment</label>
                                    <select class="form-control form-select" id="spray"
                                    name="spray" required>
                                      <option value="" disabled selected hidden>Wheelchair Accessibility, Tail Lift & Safety Equipment</option>
                                        <option>Okay</option>
                                        <option>Not Okay</option>
                                        <option>Not Applicable</option>
                                    </select>
                        </div>
                         <div class="col-md-12">
                                <label class="form-label">Communication Devices with Driver</label>
                                    <select class="form-control form-select" id="spray"
                                    name="spray" required>
                                      <option value="" disabled selected hidden>Communication Devices with Driver</option>
                                        <option>Okay</option>
                                        <option>Not Okay</option>
                                        <option>Not Applicable</option>
                                    </select>
                        </div>
                         <div class="col-md-12">
                                <label class="form-label">Prominent Warning Signage</label>
                                    <select class="form-control form-select" id="spray"
                                    name="spray" required>
                                      <option value="" disabled selected hidden>Prominent Warning Signage</option>
                                        <option>Okay</option>
                                        <option>Not Okay</option>
                                        <option>Not Applicable</option>
                                    </select>
                        </div>
                        <div class="col-md-12">
                                <label class="form-label">Side Under Run Protection</label>
                                    <select class="form-control form-select" id="spray"
                                    name="spray" required>
                                      <option value="" disabled selected hidden>Side Under Run Protection</option>
                                        <option>Okay</option>
                                        <option>Not Okay</option>
                                        <option>Not Applicable</option>
                                    </select>
                        </div>
                        <div class="col-md-12">
                                <label class="form-label">Mirrors</label>
                                    <select class="form-control form-select" id="spray"
                                    name="spray" required>
                                      <option value="" disabled selected hidden>Mirrors</option>
                                        <option>Okay</option>
                                        <option>Not Okay</option>
                                        <option>Not Applicable</option>
                                    </select>
                        </div>
                        <div class="col-md-12">
                                <label class="form-label">Camera System & Detection Sensors</label>
                                    <select class="form-control form-select" id="spray"
                                    name="spray" required>
                                      <option value="" disabled selected hidden>Camera System & Detection Sensors</option>
                                        <option>Okay</option>
                                        <option>Not Okay</option>
                                        <option>Not Applicable</option>
                                    </select>
                        </div> -->
                         <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control message-box" placeholder="Additional Comments" id="message" name="message"></textarea>
                                    <label for="message">Additional Comments</label>
                                </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-enquiry w-100 py-3">🚀 Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const depotSelect = document.getElementById('depot_name');
    const latitudeInput = document.getElementById('latitude');
    const longitudeInput = document.getElementById('longitude');
    
    depotSelect.addEventListener('change', function() {
        if (this.value === 'current_location') {
            getCurrentLocation();
        }
    });
    
    function getCurrentLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                function(position) {
                    // Success callback
                    latitudeInput.value = position.coords.latitude;
                    longitudeInput.value = position.coords.longitude;
                    
                    // Optionally update the select to show coordinates
                    const option = depotSelect.querySelector('option[value="current_location"]');
                    option.textContent = `Current Location (${position.coords.latitude.toFixed(4)}, ${position.coords.longitude.toFixed(4)})`;
                },
                function(error) {
                    // Error callback
                    console.error('Error getting location:', error);
                    alert('Could not get your location. Please ensure location services are enabled.');
                    depotSelect.value = '';
                }
            );
        } else {
            alert('Geolocation is not supported by your browser.');
            depotSelect.value = '';
        }
    }
});
</script>
@endsection
