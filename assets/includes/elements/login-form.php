<!-- Login Form Wrapper -->
<div id="loginFormContainer">
    <!-- State 1: Credentials Entry -->
    <div id="loginCredentialsState">
        <form method="POST" id="loginForm" autocomplete="off">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-clt">
                        <input type="email" name="email" id="loginEmail" placeholder="Email Address" required>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-clt" style="position:relative;">
                        <input type="password" name="password" id="loginPassword" placeholder="Enter Password" required>
                        <i class="fa-solid fa-eye-slash toggle-password" data-target="loginPassword" style="position:absolute; right:15px; top:50%; transform:translateY(-50%); cursor:pointer; color:#666;"></i>
                    </div>
                </div>
                <div class="col-lg-12">
                    <button class="gt-theme-btn" type="submit" id="loginFormSubmit">
                        Log In
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- State 2: OTP Verification (Initially Hidden) -->
    <div id="loginOtpState" style="display:none;">
        <div class="text-center">
            <p style="font-size: 15px; color: #475569; margin-bottom: 25px;">
                Enter the 6-digit verification code sent to <br>
                <strong id="displayLoginEmail" style="color: #1a1a2e;"></strong>
            </p>
            
            <form id="verifyLoginForm">
                <input type="hidden" id="hiddenLoginEmail">
                <div class="form-clt" style="margin-bottom: 25px;">
                    <input type="text" id="loginOtp" maxlength="6" placeholder="0 0 0 0 0 0" required
                           style="text-align:center; letter-spacing: 12px; font-size: 24px; font-weight: 700;">
                </div>
                
                <button type="submit" id="verifyLoginBtn" class="gt-theme-btn" style="width:100%; margin-bottom:20px;">
                    Verify & Login
                </button>
            </form>

            <div class="resend-container" style="font-size: 14px;">
                <p id="loginResendText" style="color: #64748b; margin-bottom: 15px;">
                    Didn't receive the code? 
                    <span id="loginTimerWrapper" style="color: #2D31FA; font-weight: 600;">
                        Wait <span id="loginResendTimer">60</span>s
                    </span>
                    <a href="javascript:void(0)" id="resendLoginOtp" style="display:none; color: #2D31FA; font-weight: 600; text-decoration: underline;">
                        Resend Code
                    </a>
                </p>
                <a href="javascript:void(0)" onclick="location.reload()" style="color: #94a3b8; font-size: 13px;">
                    <i class="fa-solid fa-arrow-left"></i> Back to Login
                </a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    const verifyLoginForm = document.getElementById('verifyLoginForm');
    const loginSubmitBtn = document.getElementById('loginFormSubmit');
    const verifyLoginBtn = document.getElementById('verifyLoginBtn');
    
    let loginResendCounter = 0;
    let loginResendTimerInterval;

    // --- STEP 1: Handle Initial Login (Credentials) ---
    if (loginForm) {
        loginForm.onsubmit = function(e) {
            e.preventDefault();
            
            const email = document.getElementById('loginEmail').value;
            const password = document.getElementById('loginPassword').value;
            
            // Show Loading
            const originalText = loginSubmitBtn.innerHTML;
            loginSubmitBtn.disabled = true;
            loginSubmitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Authenticating...';

            fetch('<?= get_site_option('site_url') ?>assets/includes/functions/ajax-handlers/ajax-login-user.php', {
                method: 'POST',
                body: new URLSearchParams({ email, password })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    showLoginOtpState(data.email);
                } else {
                    Swal.fire({ icon: 'error', title: 'Login Failed', text: data.error });
                }
            })
            .catch(err => {
                console.error(err);
                Swal.fire({ icon: 'error', title: 'Error', text: 'Connection failed. Please try again.' });
            })
            .finally(() => {
                loginSubmitBtn.disabled = false;
                loginSubmitBtn.innerHTML = originalText;
            });
        };
    }

    // --- STEP 2: Show OTP Verification UI ---
    function showLoginOtpState(email) {
        document.getElementById('loginCredentialsState').style.display = 'none';
        document.getElementById('loginOtpState').style.display = 'block';
        document.getElementById('displayLoginEmail').innerText = email;
        document.getElementById('hiddenLoginEmail').value = email;
        startLoginResendTimer();
    }

    // --- STEP 3: Handle OTP Verification ---
    if (verifyLoginForm) {
        verifyLoginForm.onsubmit = function(e) {
            e.preventDefault();
            
            const email = document.getElementById('hiddenLoginEmail').value;
            const otp = document.getElementById('loginOtp').value;
            
            if (otp.length !== 6) {
                Swal.fire({ icon: 'warning', text: 'Please enter the 6-digit code.' });
                return;
            }

            const originalText = verifyLoginBtn.innerHTML;
            verifyLoginBtn.disabled = true;
            verifyLoginBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Verifying...';

            fetch('<?= get_site_option('site_url') ?>assets/includes/functions/ajax-handlers/ajax-verify-login-otp.php', {
                method: 'POST',
                body: new URLSearchParams({ email, otp })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Welcome Back!',
                        text: data.message,
                        timer: 2000,
                        showConfirmButton: false
                    }).then(() => {
                        window.location.href = data.redirect;
                    });
                } else {
                    Swal.fire({ icon: 'error', title: 'Invalid Code', text: data.error });
                }
            })
            .catch(err => {
                console.error(err);
                Swal.fire({ icon: 'error', title: 'Error', text: 'Connection failed. Please try again.' });
            })
            .finally(() => {
                verifyLoginBtn.disabled = false;
                verifyLoginBtn.innerHTML = originalText;
            });
        };
    }

    // --- STEP 4: Resend OTP Logic ---
    function startLoginResendTimer() {
        const timerWrapper = document.getElementById('loginTimerWrapper');
        const resendLink = document.getElementById('resendLoginOtp');
        const timerDisplay = document.getElementById('loginResendTimer');
        
        loginResendCounter++;
        let timeLeft = 60 * loginResendCounter; // Incremental delay: 60, 120, 180...
        
        timerWrapper.style.display = 'inline';
        resendLink.style.display = 'none';
        
        clearInterval(loginResendTimerInterval);
        loginResendTimerInterval = setInterval(() => {
            timeLeft--;
            timerDisplay.innerText = timeLeft;
            
            if (timeLeft <= 0) {
                clearInterval(loginResendTimerInterval);
                timerWrapper.style.display = 'none';
                resendLink.style.display = 'inline';
            }
        }, 1000);
    }

    const resendLink = document.getElementById('resendLoginOtp');
    if (resendLink) {
        resendLink.onclick = function() {
            const email = document.getElementById('hiddenLoginEmail').value;
            
            fetch('<?= get_site_option('site_url') ?>assets/includes/functions/ajax-handlers/ajax-send-otp.php', {
                method: 'POST',
                body: new URLSearchParams({ email })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({ icon: 'success', text: 'A new security code has been sent.' });
                    startLoginResendTimer();
                } else {
                    Swal.fire({ icon: 'error', text: data.error });
                }
            });
        };
    }
});
</script>