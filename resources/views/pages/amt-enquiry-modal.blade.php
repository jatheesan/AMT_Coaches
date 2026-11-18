<!-- Confirmation Modal -->
<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel">Confirm Your Enquiry</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3"><strong>Name:</strong> <span id="confirm-name"></span></div>
                <div class="mb-3"><strong>Business / Organization:</strong> <span id="confirm-business"></span></div>
                <div class="mb-3"><strong>Mobile:</strong> <span id="confirm-phone"></span></div>
                <div class="mb-3"><strong>Email:</strong> <span id="confirm-email"></span></div>
                <div class="mb-3"><strong>No. of Passengers:</strong> <span id="confirm-noofpassenger"></span></div>

                <hr>
                <h6 class="fw-bold text-primary">Pickup Details</h6>
                <div class="mb-3"><strong>Pickup Address:</strong> <span id="confirm-pickupaddress"></span></div>
                <div class="mb-3"><strong>Pickup Postcode:</strong> <span id="confirm-pickup-postcode"></span></div>
                <div class="mb-3"><strong>Pickup Date & Time:</strong> <span id="confirm-pickupdate"></span> at <span
                        id="confirm-pickuptime"></span></div>

                <hr>
                <h6 class="fw-bold text-danger">Destination Details</h6>
                <div class="mb-3"><strong>Destination Address:</strong> <span id="confirm-destinationaddress"></span>
                </div>
                <div class="mb-3"><strong>Destination Postcode:</strong> <span id="confirm-destination-postcode"></span>
                </div>
                <div class="mb-3"><strong>Destination Date & Time:</strong> <span id="confirm-destinationdate"></span>
                    at <span id="confirm-destinationtime"></span></div>

                <hr>
                <div class="mb-3"><strong>Luggage:</strong> <span id="confirm-luggage"></span></div>
                <div class="mb-3"><strong>Journey Type:</strong> <span id="confirm-journey-type"></span></div>

                <div class="mb-3" id="recaptcha-container" required>
                    {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display(['data-callback' => 'recaptchaVerified']) !!}
                    <div id="recaptcha-error" class="text-danger recaptcha-error-display">Please verify that you're not
                        a robot.</div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Edit Details</button>
                <button type="button" class="btn btn-primary" id="final-submit-btn">Confirm & Submit</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('contact-form');
        const submitBtn = document.getElementById('submit-btn');
        const finalSubmitBtn = document.getElementById('final-submit-btn');
        const modal = new bootstrap.Modal(document.getElementById('confirmationModal'));

        // reCAPTCHA verification callback
        window.recaptchaVerified = function (response) {
            $('#recaptcha-error').hide();
        };

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            if (!form.checkValidity()) {
                form.classList.add('was-validated');
                return;
            }

            // Populate modal with form data
            document.getElementById('confirm-name').textContent = form.name.value;
            document.getElementById('confirm-business').textContent = form.business.value || 'Not provided';
            document.getElementById('confirm-phone').textContent = form.phone.value;
            document.getElementById('confirm-email').textContent = form.email.value;
            document.getElementById('confirm-noofpassenger').textContent = form.noofpassenger.value;

            // Pickup section
            document.getElementById('confirm-pickupaddress').textContent = form.pickupaddress.value;
            document.getElementById('confirm-pickup-postcode').textContent = form.pickup_postcode.value || 'Not provided';

            const pickupDate = new Date(form.pickupdate.value);
            document.getElementById('confirm-pickupdate').textContent = pickupDate.toLocaleDateString();
            document.getElementById('confirm-pickuptime').textContent = form.pickuptime.value;

            // Destination section
            document.getElementById('confirm-destinationaddress').textContent = form.destinationaddress.value;
            document.getElementById('confirm-destination-postcode').textContent = form.destination_postcode.value || 'Not provided';

            const destinationDate = new Date(form.destinationdate.value);
            document.getElementById('confirm-destinationdate').textContent = destinationDate.toLocaleDateString();
            document.getElementById('confirm-destinationtime').textContent = form.destinationtime.value;

            // Radio buttons
            const luggageEl = form.querySelector('input[name="luggage"]:checked');
            document.getElementById('confirm-luggage').textContent = luggageEl ? luggageEl.value : '';

            const journeyEl = form.querySelector('input[name="journey_type"]:checked');
            document.getElementById('confirm-journey-type').textContent = journeyEl ? journeyEl.value : '';

            $('#recaptcha-error').hide();

            // Show the modal
            modal.show();
        });

        finalSubmitBtn.addEventListener('click', function () {
            // Get recaptcha response and add to form
            const recaptchaResponse = grecaptcha.getResponse();

            if (recaptchaResponse.length === 0) {
                $('#recaptcha-error').show();
                e.preventDefault();

                // Optional: Scroll to the reCAPTCHA to make it more visible
                $('html, body').animate({
                    scrollTop: $('#recaptcha-container').offset().top - 100
                }, 500);
            }
            finalSubmitBtn.disabled = true;
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'g-recaptcha-response';
            input.value = recaptchaResponse;
            form.appendChild(input);

            // Submit the form
            form.removeEventListener('submit', arguments.callee);
            form.submit();
        });
    });
</script>