
<!-- Confirmation Modal -->
<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel">Confirm Your Enquiry</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3"><strong>Name:</strong> <span id="confirm-name"></span></div>
                <div class="mb-3"><strong>Mobile:</strong> <span id="confirm-phone"></span></div>
                <div class="mb-3"><strong>Email:</strong> <span id="confirm-email"></span></div>
                <div class="mb-3"><strong>Pickup Address:</strong> <span id="confirm-pickupaddress"></span></div>
                <div class="mb-3"><strong>Dropoff Address:</strong> <span id="confirm-dropoffaddress"></span></div>
                <div class="mb-3"><strong>Pickup Date & Time:</strong> <span id="confirm-pickupdate"></span> at <span id="confirm-pickuptime"></span></div>
                <div class="mb-3"><strong>Dropoff Date & Time:</strong> <span id="confirm-dropoffdate"></span> at <span id="confirm-dropofftime"></span></div>
                <div class="mb-3"><strong>Number of Passengers:</strong> <span id="confirm-noofpassenger"></span></div>
                 <div class="mb-3" id="recaptcha-container" required>
                {!! NoCaptcha::renderJs() !!}
                {!! NoCaptcha::display(['data-callback' => 'recaptchaVerified']) !!}
                <div id="recaptcha-error" class="text-danger recaptcha-error-display">Please verify that you're not a robot.</div>
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
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact-form');
    const submitBtn = document.getElementById('submit-btn');
    const finalSubmitBtn = document.getElementById('final-submit-btn');
    // const recaptchaError = document.getElementById('recaptcha-error');
    const modal = new bootstrap.Modal(document.getElementById('confirmationModal'));
    
    // let isRecaptchaVerified = false;

    // reCAPTCHA verification callback
    window.recaptchaVerified = function(response) {
         $('#recaptcha-error').hide();
        // isRecaptchaVerified = true;
        // finalSubmitBtn.disabled = false;
        // recaptchaError.style.display = 'none';
    };

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        if (!form.checkValidity()) {
            form.classList.add('was-validated');
            return;
        }
        
        // Populate modal with form data
        document.getElementById('confirm-name').textContent = form.name.value;
        document.getElementById('confirm-phone').textContent = form.phone.value;
        document.getElementById('confirm-email').textContent = form.email.value;
        document.getElementById('confirm-pickupaddress').textContent = form.pickupaddress.value;
        document.getElementById('confirm-dropoffaddress').textContent = form.dropoffaddress.value;
        
        // Format dates for display
        const pickupDate = new Date(form.pickupdate.value);
        const dropoffDate = new Date(form.dropoffdate.value);
        document.getElementById('confirm-pickupdate').textContent = pickupDate.toLocaleDateString();
        document.getElementById('confirm-dropoffdate').textContent = dropoffDate.toLocaleDateString();
        
        document.getElementById('confirm-pickuptime').textContent = form.pickuptime.value;
        document.getElementById('confirm-dropofftime').textContent = form.dropofftime.value;
        document.getElementById('confirm-noofpassenger').textContent = form.noofpassenger.value;
        
        $('#recaptcha-error').hide();
        // Reset recaptcha state when modal shows
        // isRecaptchaVerified = false;
        // finalSubmitBtn.disabled = true;
        // recaptchaError.style.display = 'none';
        
        // Show the modal
        modal.show();
    });
    
    finalSubmitBtn.addEventListener('click', function() {
        // if (!isRecaptchaVerified) {
        //     recaptchaError.style.display = 'block';
        //     return;
        // }

        // recaptchaError.style.display = 'none';
        // finalSubmitBtn.disabled = false;
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