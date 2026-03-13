<?php 
    if (get_hero_section_data('show_email_form') === 'on') {
?>
<form method="post" id="heroEmailForm" class="wow fadeInUp" data-wow-delay=".5s" autocomplete="off">
    <?= csrf_input_field(); ?>
    <input type="email" id="heroEmailFormEmail" name="heroEmailFormEmail" placeholder="Enter Email" required>
    <button type="submit" id="heroEmailFormSubmit" name="heroEmailFormSubmit" class="gt-theme-btn">
        Get Free Quote
    </button>
</form>

<?php
    }
?>

<script>
    // Handle Hero Email Form submit
    const heroEmailForm = document.getElementById('heroEmailForm');
    if (heroEmailForm) {
        heroEmailForm.onsubmit = function(e) {
            e.preventDefault();

            const btn = document.getElementById('heroEmailFormSubmit');
            btn.disabled = true;
            btn.textContent = 'Requesting...';

            const email = document.getElementById('heroEmailFormEmail').value.trim();
            const csrfToken = document.querySelector('input[name="csrf_token"]').value;

            if (!email) {
                Swal.fire('Validation Error', 'Please enter a valid email address.', 'warning');
                btn.disabled = false;
                btn.textContent = 'Get Free Quote';
                return;
            }

            fetch('./assets/includes/functions/ajax-handlers/ajax-hero-email-form.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: new URLSearchParams({
                    action: 'new_request',
                    hero_email: email,
                    csrf_token: csrfToken
                }).toString()
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    heroEmailForm.reset();
                    Swal.fire({
                        title: 'Request Received!',
                        text: 'Your request for a free quote has been sent successfully. Our team will contact you shortly.',
                        icon: 'success',
                        timer: 2000,
                        timerProgressBar: true,
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        allowEnterKey: false,
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        }
                    });
                } else {
                    Swal.fire('Error', data.error || 'Failed to send request.', 'error');
                }
            })
            .catch (err => {
                Swal.fire('Error', 'An error occurred while sending your request. Please try again later.', 'error');
            })
            .finally(() => {
                btn.disabled = false;
                btn.textContent = 'Get Free Quote';
            });
        }
    }
</script>
