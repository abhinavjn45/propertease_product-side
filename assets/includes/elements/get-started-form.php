<div id="registration-container">
    <form id="get-started-form" method="POST" autocomplete="off">
        <div class="row g-4">
            <!-- Full Name -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                <div style="position:relative;">
                    <label style="display:block;font-size:13px;font-weight:600;color:#1a1a2e;margin-bottom:8px;">
                        <i class="fa-regular fa-user" style="color:#2D31FA;margin-right:6px;"></i>Full Name*
                    </label>
                    <input type="text" name="name" id="name" placeholder="E.g. Rajesh Malhotra" required style="
                            width:100%;padding:14px 18px;
                            border:1.5px solid #e2e5f1;
                            border-radius:12px;
                            font-size:14px;
                            color: #1a1a2e;
                            background:#fff;
                            transition:all 0.3s ease;
                            outline:none;
                        "
                        onfocus="this.style.borderColor='#2D31FA';this.style.boxShadow='0 0 0 3px rgba(45,49,250,0.08)'"
                        onblur="this.style.borderColor='#e2e5f1';this.style.boxShadow='none'">
                </div>
            </div>

            <!-- Email Address -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                <div style="position:relative;">
                    <label style="display:block;font-size:13px;font-weight:600;color:#1a1a2e;margin-bottom:8px;">
                        <i class="fa-regular fa-envelope" style="color:#2D31FA;margin-right:6px;"></i>Professional
                        Email*
                    </label>
                    <input type="email" name="email" id="email" placeholder="secretary@yoursociety.com" required style="
                            width:100%;padding:14px 18px;
                            border:1.5px solid #e2e5f1;
                            border-radius:12px;
                            font-size:14px;
                            color: #1a1a2e;
                            background:#fff;
                            transition:all 0.3s ease;
                            outline:none;
                        "
                        onfocus="this.style.borderColor='#2D31FA';this.style.boxShadow='0 0 0 3px rgba(45,49,250,0.08)'"
                        onblur="this.style.borderColor='#e2e5f1';this.style.boxShadow='none'">
                </div>
            </div>

            <!-- Mobile Number -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                <div style="position:relative;">
                    <label style="display:block;font-size:13px;font-weight:600;color:#1a1a2e;margin-bottom:8px;">
                        <i class="fa-solid fa-mobile-screen-button" style="color:#2D31FA;margin-right:6px;"></i>Mobile
                        Number*
                    </label>
                    <input type="tel" name="mobile" id="mobile" placeholder="E.g. 9876543210" required style="
                            width:100%;padding:14px 18px;
                            border:1.5px solid #e2e5f1;
                            border-radius:12px;
                            font-size:14px;
                            color: #1a1a2e;
                            background:#fff;
                            transition:all 0.3s ease;
                            outline:none;
                        "
                        onfocus="this.style.borderColor='#2D31FA';this.style.boxShadow='0 0 0 3px rgba(45,49,250,0.08)'"
                        onblur="this.style.borderColor='#e2e5f1';this.style.boxShadow='none'">
                </div>
            </div>

            <!-- Designation -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                <div style="position:relative;">
                    <label style="display:block;font-size:13px;font-weight:600;color:#1a1a2e;margin-bottom:8px;">
                        <i class="fa-solid fa-users-gear" style="color:#2D31FA;margin-right:6px;"></i>Your Designation*
                    </label>
                    <select name="designation" id="designation" required style="
                            width:100%;padding:14px 18px;
                            border:1.5px solid #e2e5f1;
                            border-radius:12px;
                            font-size:14px;
                            color: #1a1a2e;
                            background:#fff;
                            transition:all 0.3s ease;
                            outline:none;
                            appearance: none;
                        "
                        onfocus="this.style.borderColor='#2D31FA';this.style.boxShadow='0 0 0 3px rgba(45,49,250,0.08)'"
                        onblur="this.style.borderColor='#e2e5f1';this.style.boxShadow='none'">
                        <option value="" disabled selected>Select your designation</option>
                        <option value="Secretary">Secretary</option>
                        <option value="Chairman">Chairman</option>
                        <option value="Treasurer">Treasurer</option>
                        <option value="Committee Member">Committee Member</option>
                        <option value="Builder/Developer">Builder/Developer</option>
                        <option value="Resident">Resident</option>
                        <option value="Other">Other</option>
                    </select>
                    <div style="position:absolute;right:18px;top:42px;pointer-events:none;color:#2D31FA;">
                        <i class="fa-solid fa-chevron-down" style="font-size:12px;"></i>
                    </div>
                </div>
            </div>

            <!-- Password -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".6s">
                <div style="position:relative;">
                    <label style="display:block;font-size:13px;font-weight:600;color:#1a1a2e;margin-bottom:8px;">
                        <i class="fa-solid fa-lock" style="color:#2D31FA;margin-right:6px;"></i>Create Password*
                    </label>
                    <div style="position:relative;">
                        <input type="password" name="password" id="password" placeholder="••••••••" required style="
                                width:100%;padding:14px 45px 14px 18px;
                                border:1.5px solid #e2e5f1;
                                border-radius:12px;
                                font-size:14px;
                                color: #1a1a2e;
                                background:#fff;
                                transition:all 0.3s ease;
                                outline:none;
                            "
                            onfocus="this.style.borderColor='#2D31FA';this.style.boxShadow='0 0 0 3px rgba(45,49,250,0.08)'"
                            onblur="this.style.borderColor='#e2e5f1';this.style.boxShadow='none'">
                        <i class="fa-solid fa-eye-slash toggle-password" data-target="password" style="position:absolute; right:15px; top:50%; transform:translateY(-50%); cursor:pointer; color:#666; font-size:16px;"></i>
                    </div>
                </div>
            </div>

            <!-- Confirm Password -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".7s">
                <div style="position:relative;">
                    <label style="display:block;font-size:13px;font-weight:600;color:#1a1a2e;margin-bottom:8px;">
                        <i class="fa-solid fa-key" style="color:#2D31FA;margin-right:6px;"></i>Confirm Password*
                    </label>
                    <div style="position:relative;">
                        <input type="password" name="confirm_password" id="confirm_password" placeholder="••••••••" required
                            style="
                                width:100%;padding:14px 45px 14px 18px;
                                border:1.5px solid #e2e5f1;
                                border-radius:12px;
                                font-size:14px;
                                color: #1a1a2e;
                                background:#fff;
                                transition:all 0.3s ease;
                                outline:none;
                            "
                            onfocus="this.style.borderColor='#2D31FA';this.style.boxShadow='0 0 0 3px rgba(45,49,250,0.08)'"
                            onblur="this.style.borderColor='#e2e5f1';this.style.boxShadow='none'">
                        <i class="fa-solid fa-eye-slash toggle-password" data-target="confirm_password" style="position:absolute; right:15px; top:50%; transform:translateY(-50%); cursor:pointer; color:#666; font-size:16px;"></i>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".8s">
                <button type="submit" id="registerBtn" style="
                    width:100%;
                    padding:16px 32px;
                    background: linear-gradient(135deg, #2D31FA 0%, #1a1d8f 100%);
                    color:#fff;
                    border:none;
                    border-radius:12px;
                    font-size:16px;
                    font-weight:600;
                    cursor:pointer;
                    transition:all 0.3s ease;
                    letter-spacing:0.5px;
                " onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 8px 25px rgba(45,49,250,0.35)'"
                    onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='none'">
                    <i class="fa-regular fa-calendar-check" style="margin-right:8px;"></i>
                    Register Now
                </button>
            </div>

            <!-- Security Note -->
            <div class="col-lg-12" style="text-align:center;padding-top:4px;">
                <p style="color:#999;font-size:12px;margin:0;">
                    <i class="fa-solid fa-lock" style="margin-right:4px;"></i>
                    Your information is 100% secure. OTP will be sent to your email.
                </p>
            </div>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const registerForm = document.getElementById('get-started-form');
        const registerBtn = document.getElementById('registerBtn');

        if (registerForm) {
            registerForm.onsubmit = function (e) {
                e.preventDefault();

                const password = document.getElementById('password').value;
                const confirmPassword = document.getElementById('confirm_password').value;

                if (password !== confirmPassword) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Passwords do not match!',
                        timer: 2000,
                        showConfirmButton: false
                    });
                    return;
                }

                registerBtn.disabled = true;
                registerBtn.innerHTML = '<i class="fa-solid fa-circle-notch fa-spin"></i> Processing...';

                const formData = new FormData(registerForm);

                fetch('../assets/includes/functions/ajax-handlers/ajax-register-user.php', {
                    method: 'POST',
                    body: formData
                })
                    .then(response => {
                        console.log('Raw Registration response:', response);
                        return response.json();
                    })
                    .then(data => {
                        if (data.success) {
                            const userEmail = formData.get('email'); // Capture email for OTP delivery

                            const container = document.getElementById('registration-container');
                            container.style.opacity = '0';
                            container.style.transition = 'opacity 0.5s ease';

                            setTimeout(() => {
                                container.innerHTML = `
                            <div class="text-center py-5 wow fadeInUp" data-wow-delay=".2s" id="success-state">
                                <div class="mb-4">
                                    <i class="fa-solid fa-circle-check" style="font-size: 80px; color: #2D31FA;"></i>
                                </div>
                                <h3 class="mb-3" style="font-weight: 700; color: #1a1a2e;">Registration Successful!</h3>
                                <p class="mb-5" style="color: #666; font-size: 16px; max-width: 400px; margin: 0 auto;">
                                    Your account has been created. A verification code is ready to be sent to <strong>${userEmail}</strong>. Click below to proceed.
                                </p>
                                <button id="sendOtpBtn" class="gt-theme-btn" style="
                                    width: 100%;
                                    padding: 16px 32px;
                                    background: linear-gradient(135deg, #2D31FA 0%, #1a1d8f 100%);
                                    color: #fff;
                                    border: none;
                                    border-radius: 12px;
                                    font-size: 16px;
                                    font-weight: 600;
                                    cursor: pointer;
                                    transition: all 0.3s ease;
                                " onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 8px 25px rgba(45,49,250,0.3)'" onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='none'">
                                    <i class="fa-solid fa-paper-plane" style="margin-right: 8px;"></i>
                                    Send OTP to Email
                                </button>
                                <div class="mt-4">
                                    <a href="javascript:void(0)" id="editEmailBtn" style="color: #666; font-size: 14px; text-decoration: none; font-weight: 500;">
                                        <i class="fa-solid fa-pen-to-square" style="margin-right: 5px;"></i> Edit Email Address
                                    </a>
                                </div>
                            </div>
                        `;
                                container.style.opacity = '1';

                                // --- SUCCESS STATE ACTIONS ---
                                
                                // Send OTP Action
                                document.getElementById('sendOtpBtn').onclick = function() {
                                    const btn = this;
                                    btn.disabled = true;
                                    btn.innerHTML = '<i class="fa-solid fa-circle-notch fa-spin"></i> Sending code...';
                                    
                                    const otpData = new FormData();
                                    otpData.append('email', userEmail);
                                    
                fetch('../assets/includes/functions/ajax-handlers/ajax-send-otp.php', {
                                        method: 'POST',
                                        body: otpData
                                    })
                                    .then(res => {
                                        console.log('Raw Send OTP response:', res);
                                        return res.json();
                                    })
                                    .then(res => {
                                        if (res.success) {
                                            showOtpInputState(userEmail);
                                        } else {
                                            btn.disabled = false;
                                            btn.innerHTML = '<i class="fa-solid fa-paper-plane" style="margin-right: 8px;"></i> Send OTP to Email';
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Failed to Send',
                                                text: res.error || 'Please try again.',
                                                timer: 5000,
                                                showConfirmButton: true
                                            });
                                        }
                                    })
                                    .catch(err => {
                                        btn.disabled = false;
                                        btn.innerHTML = '<i class="fa-solid fa-paper-plane" style="margin-right: 8px;"></i> Send OTP to Email';
                                        console.error('Fetch error:', err);
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Request Failed',
                                            text: 'Could not connect to the server or unexpected response received. Check console for details.',
                                            timer: 5000,
                                            showConfirmButton: true
                                        });
                                    });
                                };

                                // Edit Email Action (Goes back to form)
                                document.getElementById('editEmailBtn').onclick = function() {
                                    window.location.reload();
                                };

                            }, 500);
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Registration Failed',
                                text: data.error || 'Please try again later.',
                                timer: 3000,
                                showConfirmButton: false
                            });
                            registerBtn.disabled = false;
                            registerBtn.innerHTML = '<i class="fa-regular fa-calendar-check" style="margin-right:8px;"></i> Register Now';
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Server Error',
                            text: 'Something went wrong. Please check your connection.',
                            timer: 3000,
                            showConfirmButton: false
                        });
                        registerBtn.disabled = false;
                        registerBtn.innerHTML = '<i class="fa-regular fa-calendar-check" style="margin-right:8px;"></i> Register Now';
                    });
            };
        }

        let resendDelay = 60; // Initial delay 60 seconds

        function showOtpInputState(email) {
            const container = document.getElementById('registration-container');
            container.style.opacity = '0';

            setTimeout(() => {
                container.innerHTML = `
                <div class="text-center py-4 wow fadeInUp" data-wow-delay=".2s">
                    <div class="mb-4">
                        <i class="fa-solid fa-envelope-circle-check" style="font-size: 70px; color: #2D31FA;"></i>
                    </div>
                    <h3 class="mb-3" style="font-weight: 700; color: #1a1a2e; font-size: 26px;">Verify Your Identity</h3>
                    <p class="mb-4" style="color: #666; font-size: 15px; max-width: 420px; margin: 0 auto; line-height: 1.6;">
                        Please enter the 6-digit verification code sent to <br><strong>${email}</strong>
                    </p>
                    
                    <div class="mb-5">
                        <input type="text" id="otp_code" maxlength="6" placeholder="000000" style="
                            width: 100%;
                            max-width: 240px;
                            padding: 16px;
                            border: 2px solid #2D31FA;
                            border-radius: 12px;
                            font-size: 32px;
                            text-align: center;
                            letter-spacing: 12px;
                            font-weight: 800;
                            color: #1a1a2e;
                            outline: none;
                            background: rgba(45,49,250,0.03);
                            box-shadow: inset 0 2px 4px rgba(0,0,0,0.05);
                        ">
                    </div>

                    <button id="verifyOtpBtn" class="gt-theme-btn" style="
                        width: 100%;
                        padding: 18px 32px;
                        background: linear-gradient(135deg, #2D31FA 0%, #1a1d8f 100%);
                        color: #fff;
                        border: none;
                        border-radius: 12px;
                        font-size: 16px;
                        font-weight: 700;
                        cursor: pointer;
                        transition: all 0.3s ease;
                        margin-bottom: 25px;
                        box-shadow: 0 4px 15px rgba(45,49,250,0.2);
                    " onmouseover="this.style.transform='translateY(-2px) scale(1.01)';" onmouseout="this.style.transform='none'">
                        Verify Account
                    </button>

                    <div style="font-size: 14px; color: #666;">
                        Didn't receive the code? 
                        <span id="resendTimerContainer">Resend in <strong id="timerText">${resendDelay}s</strong></span>
                        <a href="javascript:void(0)" id="resendOtpBtn" style="color: #2D31FA; font-weight: 700; text-decoration: none; display: none;">Resend Code</a>
                    </div>
                    
                    <div class="mt-4">
                        <a href="javascript:void(0)" onclick="location.reload()" style="color: #888; font-size: 13px; text-decoration: none;">
                           <i class="fa-solid fa-arrow-left"></i> Change email address
                        </a>
                    </div>
                </div>
            `;
                container.style.opacity = '1';
                
                startResendTimer();

                // Verification Logic
                document.getElementById('verifyOtpBtn').onclick = function() {
                    const btn = this;
                    const otp = document.getElementById('otp_code').value;
                    
                    if (otp.length !== 6 || isNaN(otp)) {
                        Swal.fire({ icon: 'warning', title: 'Invalid Code', text: 'Please enter a valid 6-digit number.', timer: 2000, showConfirmButton: false });
                        return;
                    }

                    btn.disabled = true;
                    btn.innerHTML = '<i class="fa-solid fa-circle-notch fa-spin"></i> Verifying...';

                    const verifyData = new FormData();
                    verifyData.append('email', email);
                    verifyData.append('otp', otp);

                    fetch('../assets/includes/functions/ajax-handlers/ajax-verify-otp.php', {
                        method: 'POST',
                        body: verifyData
                    })
                    .then(res => {
                        console.log('Raw Verify response:', res);
                        return res.json();
                    })
                    .then(res => {
                        if (res.success) {
                            showFinalSuccessState();
                        } else {
                            btn.disabled = false;
                            btn.innerHTML = 'Verify Account';
                            Swal.fire({ icon: 'error', title: 'Error', text: res.error || 'Verification failed.', timer: 3000, showConfirmButton: true });
                        }
                    })
                    .catch(err => {
                        btn.disabled = false;
                        btn.innerHTML = 'Verify Account';
                        console.error('Verify error:', err);
                        Swal.fire({ icon: 'error', title: 'Backend Error', text: 'Verification failed due to a server error. Check console.', timer: 3000, showConfirmButton: true });
                    });
                };

                // Resend Logic
                document.getElementById('resendOtpBtn').onclick = function() {
                    const link = this;
                    link.style.display = 'none';
                    document.getElementById('resendTimerContainer').style.display = 'inline';
                    
                    const resendData = new FormData();
                    resendData.append('email', email);

                    fetch('../assets/includes/functions/ajax-handlers/ajax-send-otp.php', {
                        method: 'POST',
                        body: resendData
                    })
                    .then(res => {
                        console.log('Raw Resend response:', res);
                        return res.json();
                    })
                    .then(res => {
                        if (res.success) {
                            Swal.fire({ icon: 'success', title: 'Sent!', text: 'A new code has been sent.', timer: 2000, showConfirmButton: false });
                            resendDelay += 60; // Incremental delay: 60 -> 120 -> 180...
                            startResendTimer();
                        } else {
                            Swal.fire({ icon: 'error', title: 'Failed', text: res.error || 'Could not resend code.', timer: 3000, showConfirmButton: true });
                            link.style.display = 'inline';
                            document.getElementById('resendTimerContainer').style.display = 'none';
                        }
                    })
                    .catch(err => {
                        console.error('Resend error:', err);
                        Swal.fire({ icon: 'error', title: 'Network Error', text: 'Failed to resend code. Check console.', timer: 3000, showConfirmButton: true });
                        link.style.display = 'inline';
                        document.getElementById('resendTimerContainer').style.display = 'none';
                    });
                };

            }, 500);
        }

        function startResendTimer() {
            let timeLeft = resendDelay;
            const timerContainer = document.getElementById('resendTimerContainer');
            const timerText = document.getElementById('timerText');
            const resendBtn = document.getElementById('resendOtpBtn');
            
            timerContainer.style.display = 'inline';
            resendBtn.style.display = 'none';
            
            const interval = setInterval(() => {
                timeLeft--;
                timerText.innerText = timeLeft + 's';
                
                if (timeLeft <= 0) {
                    clearInterval(interval);
                    timerContainer.style.display = 'none';
                    resendBtn.style.display = 'inline';
                }
            }, 1000);
        }

        function showFinalSuccessState() {
            const container = document.getElementById('registration-container');
            container.style.opacity = '0';
            
            setTimeout(() => {
                container.innerHTML = `
                    <div class="text-center py-5 wow fadeInUp" data-wow-delay=".2s">
                        <div class="mb-4">
                            <div style="
                                width: 100px;
                                height: 100px;
                                background: #2D31FA;
                                border-radius: 50%;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                margin: 0 auto;
                                box-shadow: 0 10px 30px rgba(45,49,250,0.3);
                            ">
                                <i class="fa-solid fa-check" style="font-size: 50px; color: #fff;"></i>
                            </div>
                        </div>
                        <h2 class="mb-3" style="font-weight: 800; color: #1a1a2e;">Identity Verified!</h2>
                        <p class="mb-5" style="color: #666; font-size: 16px; max-width: 400px; margin: 0 auto;">
                            Your account is now fully active. You can now access the Propert-Ease dashboard.
                        </p>
                        
                        <a href="<?= get_site_option('site_url') ?>user-auth/login/" class="gt-theme-btn" style="
                            display: block;
                            padding: 20px 40px;
                            background: #1a1a2e;
                            color: #fff;
                            border-radius: 15px;
                            font-size: 18px;
                            font-weight: 700;
                            text-decoration: none;
                            transition: all 0.3s ease;
                            box-shadow: 0 10px 25px rgba(26,26,46,0.2);
                        " onmouseover="this.style.background='#2D31FA';this.style.transform='translateY(-3px)';" onmouseout="this.style.background='#1a1a2e';this.style.transform='none'">
                            Login to Dashboard <i class="fa-solid fa-arrow-right-to-bracket" style="margin-left: 10px;"></i>
                        </a>
                    </div>
                `;
                container.style.opacity = '1';
            }, 500);
        }
    });
</script>