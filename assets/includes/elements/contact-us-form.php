<form method="post" id="contact-form" class="contact-form-items" autocomplete="off">
    <?= csrf_input_field(); ?>
    <div class="row g-4">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
            <div class="form-clt">
                <span>Your name*</span>
                <input type="text" name="name" id="name" placeholder="Your Name" required>
            </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
            <div class="form-clt">
                <span>Your Email*</span>
                <input type="email" name="email" id="email" placeholder="Your Email" required>
            </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
            <div class="form-clt">
                <span>Write Message*</span>
                <textarea name="message" id="message" placeholder="Write Message" required></textarea>
            </div>
        </div>
        <div class="col-lg-7 wow fadeInUp" data-wow-delay=".9s">
            <button type="submit" class="gt-theme-btn" id="contactFormSubmit">
                Send Message 
            </button>
        </div>
    </div>
</form>

<script>
    // Handle Hero Email Form submit
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.onsubmit = function(e) {
            e.preventDefault();

            const btn = document.getElementById('contactFormSubmit');
            btn.disabled = true;
            btn.textContent = 'Sending...';

            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const message = document.getElementById('message').value.trim();
            const csrfToken = document.querySelector('input[name="csrf_token"]').value;

            if (!email || !name || !message) {
                Swal.fire('Validation Error', 'Please fill all required fields.', 'warning');
                btn.disabled = false;
                btn.textContent = 'Send Message';
                return;
            }

            fetch('<?= get_site_option('site_url') ?>assets/includes/functions/ajax-handlers/ajax-contact-us-form.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: new URLSearchParams({
                    action: 'new_request',
                    name: name,
                    email: email,
                    message: message,
                    csrf_token: csrfToken
                }).toString()
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    contactForm.reset();
                    Swal.fire({
                        title: 'Message Sent!',
                        text: 'Your message has been sent successfully. Our team will contact you shortly.',
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
                    Swal.fire('Error', data.error || 'Failed to send message.', 'error');
                }
            })
            .catch (err => {
                Swal.fire('Error', 'An error occurred while sending your message. Please try again later.', 'error');
            })
            .finally(() => {
                btn.disabled = false;
                btn.textContent = 'Send Message';
            });
        }
    }
</script>