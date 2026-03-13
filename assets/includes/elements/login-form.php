<form method="POST" id="loginForm" autocomplete="off">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-clt">
                <input type="email" name="email" id="email" placeholder="email address" required>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-clt" style="position:relative;">
                <input type="password" name="password" id="password" placeholder="Enter Password" required>
                <i class="fa-solid fa-eye-slash toggle-password" data-target="password" style="position:absolute; right:15px; top:50%; transform:translateY(-50%); cursor:pointer; color:#666;"></i>
            </div>
        </div>
        <div class="col-lg-12">
            <button class="gt-theme-btn" type="submit" id="loginFormSubmit">
                log in
            </button>
        </div>
    </div>
</form>