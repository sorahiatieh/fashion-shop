<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه آنلاین نکستژن - ورود و ثبت نام</title>
    <!-- Bootstrap 5 RTL CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">
    <!-- Vazir Font -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v30.1.0/dist/font-face.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container py-5">
        <div class="auth-container">
            <a href="index.php" class="back-home"><i class="bi bi-arrow-right"></i> بازگشت به صفحه اصلی</a>
            
            <div class="card auth-card">
                <div class="card-body p-4">
                    <div class="auth-header">
                        <img src="https://via.placeholder.com/120x40?text=NextGen" alt="NextGen Logo" class="mb-3">
                        <h4 class="mb-0">حساب کاربری</h4>
                    </div>
                    
                    <div class="auth-tabs">
                        <div class="auth-tab active" id="loginTab">ورود</div>
                        <div class="auth-tab" id="registerTab">ثبت نام</div>
                    </div>
                    
                    <!-- Login Form -->
                    <div class="auth-forms">
                        <div class="form-wrapper" id="loginWrapper">
                            <!-- Login Step 1 -->
                            <div class="form-step active" id="loginStep1">
                                <h5 class="text-center mb-4">ورود به حساب کاربری</h5>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="loginPhoneEmail" placeholder="شماره موبایل یا ایمیل">
                                        <label for="loginPhoneEmail">شماره موبایل یا ایمیل</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="loginPassword" placeholder="رمز عبور">
                                        <label for="loginPassword">رمز عبور</label>
                                    </div>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">مرا به خاطر بسپار</label>
                                    <a href="#" class="float-end text-decoration-none">فراموشی رمز عبور؟</a>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="button" class="btn btn-dark py-2" id="loginBtn1">ورود</button>
                                    <button type="button" class="btn btn-outline-dark py-2" id="loginWithCodeBtn">ورود با کد تایید</button>
                                </div>
                                
                                <div class="my-4 text-center">
                                    <span class="divider-text">یا ورود با</span>
                                </div>
                                
                                <div class="social-login">
                                    <a href="#" class="social-btn">
                                        <i class="bi bi-google"></i>
                                    </a>
                                    <a href="#" class="social-btn">
                                        <i class="bi bi-facebook"></i>
                                    </a>
                                    <a href="#" class="social-btn">
                                        <i class="bi bi-twitter"></i>
                                    </a>
                                </div>
                            </div>
                            
                            <!-- Login Step 2 (Verification) -->
                            <div class="form-step" id="loginStep2">
                                <h5 class="text-center mb-4">تایید کد</h5>
                                <p class="text-center text-muted mb-4">کد تایید به شماره ۰۹۱۲***۷۸۹۰ ارسال شد</p>
                                
                                <div class="verification-inputs">
                                    <input type="text" maxlength="1" class="form-control verification-input" autofocus>
                                    <input type="text" maxlength="1" class="form-control verification-input">
                                    <input type="text" maxlength="1" class="form-control verification-input">
                                    <input type="text" maxlength="1" class="form-control verification-input">
                                    <input type="text" maxlength="1" class="form-control verification-input">
                                </div>
                                
                                <div class="text-center mb-4">
                                    <span class="timer">02:00</span>
                                    <a href="#" class="resend-code d-none text-decoration-none">ارسال مجدد کد</a>
                                </div>
                                
                                <div class="d-grid">
                                    <button type="button" class="btn btn-dark py-2" id="verifyLoginBtn">تایید و ورود</button>
                                </div>
                                
                                <div class="mt-3 text-center">
                                    <a href="#" class="btn btn-link" id="loginBackBtn">بازگشت</a>
                                </div>
                            </div>
                            
                            <!-- Login Step 3 (Success) -->
                            <div class="form-step" id="loginStep3">
                                <div class="text-center py-4">
                                    <div class="mb-4">
                                        <i class="bi bi-check-circle-fill text-success" style="font-size: 4rem;"></i>
                                    </div>
                                    <h4 class="mb-3">ورود با موفقیت انجام شد</h4>
                                    <p class="text-muted mb-4">به فروشگاه نکستژن خوش آمدید</p>
                                    <div class="d-grid">
                                        <a href="index.php" class="btn btn-dark py-2">رفتن به صفحه اصلی</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Register Form -->
                    <div class="auth-forms d-none">
                        <div class="form-wrapper" id="registerWrapper">
                            <!-- Register Step 1 -->
                            <div class="form-step active" id="registerStep1">
                                <h5 class="text-center mb-4">ایجاد حساب کاربری</h5>
                                <div class="row mb-3">
                                    <div class="col">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="firstName" placeholder="نام">
                                            <label for="firstName">نام</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="lastName" placeholder="نام خانوادگی">
                                            <label for="lastName">نام خانوادگی</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="registerPhone" placeholder="شماره موبایل">
                                        <label for="registerPhone">شماره موبایل</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="registerEmail" placeholder="ایمیل (اختیاری)">
                                        <label for="registerEmail">ایمیل (اختیاری)</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="registerPassword" placeholder="رمز عبور">
                                        <label for="registerPassword">رمز عبور</label>
                                    </div>
                                    <div class="form-text">رمز عبور باید حداقل 8 کاراکتر و دارای حروف و اعداد باشد</div>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="acceptTerms">
                                    <label class="form-check-label" for="acceptTerms">
                                        <a href="#" class="text-decoration-none">قوانین و مقررات</a> را می‌پذیرم
                                    </label>
                                </div>
                                <div class="d-grid">
                                    <button type="button" class="btn btn-dark py-2" id="registerBtn1">ادامه</button>
                                </div>
                            </div>
                            
                            <!-- Register Step 2 (Verification) -->
                            <div class="form-step" id="registerStep2">
                                <h5 class="text-center mb-4">تایید شماره موبایل</h5>
                                <p class="text-center text-muted mb-4">کد تایید به شماره ۰۹۱۲***۷۸۹۰ ارسال شد</p>
                                
                                <div class="verification-inputs">
                                    <input type="text" maxlength="1" class="form-control verification-input" autofocus>
                                    <input type="text" maxlength="1" class="form-control verification-input">
                                    <input type="text" maxlength="1" class="form-control verification-input">
                                    <input type="text" maxlength="1" class="form-control verification-input">
                                    <input type="text" maxlength="1" class="form-control verification-input">
                                </div>
                                
                                <div class="text-center mb-4">
                                    <span class="timer">02:00</span>
                                    <a href="#" class="resend-code d-none text-decoration-none">ارسال مجدد کد</a>
                                </div>
                                
                                <div class="d-grid">
                                    <button type="button" class="btn btn-dark py-2" id="verifyRegisterBtn">تایید و ثبت نام</button>
                                </div>
                                
                                <div class="mt-3 text-center">
                                    <a href="#" class="btn btn-link" id="registerBackBtn">بازگشت</a>
                                </div>
                            </div>
                            
                            <!-- Register Step 3 (Success) -->
                            <div class="form-step" id="registerStep3">
                                <div class="text-center py-4">
                                    <div class="mb-4">
                                        <i class="bi bi-check-circle-fill text-success" style="font-size: 4rem;"></i>
                                    </div>
                                    <h4 class="mb-3">ثبت نام با موفقیت انجام شد</h4>
                                    <p class="text-muted mb-4">به خانواده نکستژن خوش آمدید</p>
                                    <div class="d-grid">
                                        <a href="index.php" class="btn btn-dark py-2">رفتن به صفحه اصلی</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step Indicators (dots) -->
                    <div class="step-dots login-dots">
                        <div class="step-dot active" data-step="1"></div>
                        <div class="step-dot" data-step="2"></div>
                        <div class="step-dot" data-step="3"></div>
                    </div>
                    <div class="step-dots register-dots d-none">
                        <div class="step-dot active" data-step="1"></div>
                        <div class="step-dot" data-step="2"></div>
                        <div class="step-dot" data-step="3"></div>
                    </div>
                </div>
            </div>
            
            <div class="auth-footer mt-4">
                <p class="mb-0">این فروشگاه توسط <a href="#">نکستژن</a> توسعه یافته است</p>
            </div>
        </div>
    </div>
    
    <!-- اسکریپت‌ها -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tab switching
            const loginTab = document.getElementById('loginTab');
            const registerTab = document.getElementById('registerTab');
            const authForms = document.querySelectorAll('.auth-forms');
            const loginDots = document.querySelector('.login-dots');
            const registerDots = document.querySelector('.register-dots');
            
            loginTab.addEventListener('click', function() {
                loginTab.classList.add('active');
                registerTab.classList.remove('active');
                authForms[0].classList.remove('d-none');
                authForms[1].classList.add('d-none');
                loginDots.classList.remove('d-none');
                registerDots.classList.add('d-none');
            });
            
            registerTab.addEventListener('click', function() {
                registerTab.classList.add('active');
                loginTab.classList.remove('active');
                authForms[1].classList.remove('d-none');
                authForms[0].classList.add('d-none');
                registerDots.classList.remove('d-none');
                loginDots.classList.add('d-none');
            });
            
            // Login Form Navigation
            const loginWrapper = document.getElementById('loginWrapper');
            const loginWithCodeBtn = document.getElementById('loginWithCodeBtn');
            const loginBtn1 = document.getElementById('loginBtn1');
            const verifyLoginBtn = document.getElementById('verifyLoginBtn');
            const loginBackBtn = document.getElementById('loginBackBtn');
            
            loginBtn1.addEventListener('click', function() {
                moveToStep(loginWrapper, 2);
                updateStepDots(loginDots, 2);
            });
            
            loginWithCodeBtn.addEventListener('click', function() {
                moveToStep(loginWrapper, 2);
                updateStepDots(loginDots, 2);
            });
            
            verifyLoginBtn.addEventListener('click', function() {
                moveToStep(loginWrapper, 3);
                updateStepDots(loginDots, 3);
            });
            
            loginBackBtn.addEventListener('click', function(e) {
                e.preventDefault();
                moveToStep(loginWrapper, 1);
                updateStepDots(loginDots, 1);
            });
            
            // Register Form Navigation
            const registerWrapper = document.getElementById('registerWrapper');
            const registerBtn1 = document.getElementById('registerBtn1');
            const verifyRegisterBtn = document.getElementById('verifyRegisterBtn');
            const registerBackBtn = document.getElementById('registerBackBtn');
            
            registerBtn1.addEventListener('click', function() {
                moveToStep(registerWrapper, 2);
                updateStepDots(registerDots, 2);
            });
            
            verifyRegisterBtn.addEventListener('click', function() {
                moveToStep(registerWrapper, 3);
                updateStepDots(registerDots, 3);
            });
            
            registerBackBtn.addEventListener('click', function(e) {
                e.preventDefault();
                moveToStep(registerWrapper, 1);
                updateStepDots(registerDots, 1);
            });
            
            // Verification code input
            const verificationInputs = document.querySelectorAll('.verification-input');
            
            verificationInputs.forEach((input, index) => {
                input.addEventListener('input', function() {
                    if (this.value.length >= this.maxLength) {
                        if (index < verificationInputs.length - 1) {
                            verificationInputs[index + 1].focus();
                        }
                    }
                });
                
                input.addEventListener('keydown', function(e) {
                    if (e.key === 'Backspace' && !this.value && index > 0) {
                        verificationInputs[index - 1].focus();
                    }
                });
            });
            
            // Timer for verification code
            const timers = document.querySelectorAll('.timer');
            const resendButtons = document.querySelectorAll('.resend-code');
            
            timers.forEach((timer, index) => {
                let timeLeft = 120; // 2 minutes
                let timerId = setInterval(function() {
                    if (timeLeft <= 0) {
                        clearInterval(timerId);
                        timer.classList.add('d-none');
                        resendButtons[index].classList.remove('d-none');
                    } else {
                        let minutes = Math.floor(timeLeft / 60);
                        let seconds = timeLeft % 60;
                        minutes = minutes < 10 ? '0' + minutes : minutes;
                        seconds = seconds < 10 ? '0' + seconds : seconds;
                        timer.textContent = minutes + ':' + seconds;
                        timeLeft--;
                    }
                }, 1000);
            });
            
            // Helper functions
            function moveToStep(wrapper, step) {
                // New approach: hide all steps and show only the active one
                const steps = wrapper.querySelectorAll('.form-step');
                steps.forEach((s, i) => {
                    if (i + 1 === step) {
                        s.classList.add('active');
                    } else {
                        s.classList.remove('active');
                    }
                });
            }
            
            function updateStepDots(dotsContainer, activeStep) {
                const dots = dotsContainer.querySelectorAll('.step-dot');
                dots.forEach((dot, index) => {
                    if (index + 1 === activeStep) {
                        dot.classList.add('active');
                    } else {
                        dot.classList.remove('active');
                    }
                });
            }
        });
    </script>
</body>
</html> 