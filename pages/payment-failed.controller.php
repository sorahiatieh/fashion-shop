<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه آنلاین نکستژن - پرداخت ناموفق</title>
    <!-- Bootstrap 5 RTL CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">
    <!-- Vazir Font -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v30.1.0/dist/font-face.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <header class="bg-white py-3 shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid p-0">
                    <a class="navbar-brand" href="index.php">نکستژن</a>
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">خانه</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="products.php">محصولات</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about-us.php">درباره ما</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact-us.php">تماس با ما</a>
                            </li>
                        </ul>
                        
                        <div class="d-flex align-items-center">
                            <a href="login-register.php" class="btn btn-outline-dark me-2">
                                <i class="bi bi-person"></i>
                            </a>
                            <a href="#" class="btn btn-outline-dark me-2">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="cart.php" class="btn btn-outline-dark position-relative">
                                <i class="bi bi-cart3"></i>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger cart-badge">
                                    3
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="payment-result">
                    <div class="failed-icon">
                        <i class="bi bi-x-lg"></i>
                    </div>
                    <h2 class="mb-3">پرداخت ناموفق بود</h2>
                    <p class="mb-4">متأسفانه پرداخت شما با موفقیت انجام نشد. سفارش شما در وضعیت معلق قرار دارد.</p>
                    
                    <div class="error-card">
                        <h4 class="mb-3">اطلاعات خطا</h4>
                        <div class="error-item">
                            <div>کد خطا:</div>
                            <div>ERR-5023</div>
                        </div>
                        <div class="error-item">
                            <div>پیام خطا:</div>
                            <div>تراکنش توسط کاربر لغو شد</div>
                        </div>
                        <div class="error-item">
                            <div>شماره سفارش:</div>
                            <div>NXG-10057834</div>
                        </div>
                        <div class="error-item">
                            <div>زمان تراکنش:</div>
                            <div>1402/08/29 - 14:35:28</div>
                        </div>
                    </div>
                    
                    <h4 class="mt-5 mb-3">چه کاری می‌خواهید انجام دهید؟</h4>
                    
                    <div class="payment-options">
                        <div class="payment-option">
                            <div class="payment-icon">
                                <i class="bi bi-arrow-repeat"></i>
                            </div>
                            <h5>تلاش مجدد</h5>
                            <p>دوباره پرداخت را امتحان کنید</p>
                            <a href="cart.php" class="btn btn-outline-danger w-100">تلاش مجدد</a>
                        </div>
                        
                        <div class="payment-option">
                            <div class="payment-icon">
                                <i class="bi bi-credit-card"></i>
                            </div>
                            <h5>روش پرداخت دیگر</h5>
                            <p>از یک درگاه دیگر استفاده کنید</p>
                            <a href="cart.php" class="btn btn-outline-danger w-100">تغییر روش پرداخت</a>
                        </div>
                        
                        <div class="payment-option">
                            <div class="payment-icon">
                                <i class="bi bi-basket"></i>
                            </div>
                            <h5>بازگشت به سبد خرید</h5>
                            <p>سبد خرید خود را بررسی کنید</p>
                            <a href="cart.php" class="btn btn-outline-danger w-100">سبد خرید من</a>
                        </div>
                    </div>
                    
                    <div class="alert alert-secondary mt-4">
                        <i class="bi bi-info-circle me-2"></i>
                        در صورت کسر مبلغ از حساب شما، مبلغ حداکثر تا 72 ساعت آینده به حساب شما برگشت داده می‌شود.
                    </div>
                    
                    <div class="mt-4">
                        <p>اگر در فرایند پرداخت با مشکلی مواجه شدید، می‌توانید با 
                            <a href="contact-us.php" class="text-danger">پشتیبانی ما</a> تماس بگیرید.
                        </p>
                    </div>
                    
                    <div class="mt-4">
                        <a href="index.php" class="btn btn-outline-dark me-2">بازگشت به صفحه اصلی</a>
                        <a href="products.php" class="btn btn-outline-danger">ادامه خرید</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- محصولات پیشنهادی -->
        <div class="row mt-5">
            <div class="col-12">
                <h3 class="mb-4">شاید این محصولات را هم دوست داشته باشید</h3>
            </div>
            
            <div class="col-6 col-md-3 mb-4">
                <div class="suggestion-product">
                    <img src="https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" alt="محصول پیشنهادی" class="suggestion-img">
                    <div class="p-3">
                        <div class="mb-2">کت مردانه</div>
                        <h6 class="mb-2">کت اسپرت مدرن</h6>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>45,000 تومان</div>
                            <button class="btn btn-sm btn-outline-dark"><i class="bi bi-cart-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-6 col-md-3 mb-4">
                <div class="suggestion-product">
                    <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" alt="محصول پیشنهادی" class="suggestion-img">
                    <div class="p-3">
                        <div class="mb-2">شلوار زنانه</div>
                        <h6 class="mb-2">شلوار جین</h6>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>32,000 تومان</div>
                            <button class="btn btn-sm btn-outline-dark"><i class="bi bi-cart-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-6 col-md-3 mb-4">
                <div class="suggestion-product">
                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" alt="محصول پیشنهادی" class="suggestion-img">
                    <div class="p-3">
                        <div class="mb-2">کفش مردانه</div>
                        <h6 class="mb-2">کفش ورزشی نایک</h6>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>56,000 تومان</div>
                            <button class="btn btn-sm btn-outline-dark"><i class="bi bi-cart-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-6 col-md-3 mb-4">
                <div class="suggestion-product">
                    <img src="https://images.unsplash.com/photo-1591369822096-ffd140ec948f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" alt="محصول پیشنهادی" class="suggestion-img">
                    <div class="p-3">
                        <div class="mb-2">ساعت مچی</div>
                        <h6 class="mb-2">ساعت کلاسیک</h6>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>75,000 تومان</div>
                            <button class="btn btn-sm btn-outline-dark"><i class="bi bi-cart-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- فوتر -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="mb-3">درباره ما</h5>
                    <p>فروشگاه نکستژن با ارائه جدیدترین محصولات پوشاک و اکسسوری، تجربه خرید آنلاین متفاوتی را برای شما فراهم می‌کند.</p>
                    <div class="social-links mt-3">
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-telegram"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
                
                <div class="col-md-2 mb-4 mb-md-0">
                    <h5 class="mb-3">دسترسی سریع</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="index.php" class="text-decoration-none text-dark">صفحه اصلی</a></li>
                        <li class="mb-2"><a href="products.php" class="text-decoration-none text-dark">محصولات</a></li>
                        <li class="mb-2"><a href="about-us.php" class="text-decoration-none text-dark">درباره ما</a></li>
                        <li class="mb-2"><a href="contact-us.php" class="text-decoration-none text-dark">تماس با ما</a></li>
                    </ul>
                </div>
                
                <div class="col-md-3 mb-4 mb-md-0">
                    <h5 class="mb-3">خدمات مشتریان</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-decoration-none text-dark">راهنمای خرید</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-dark">شیوه‌های پرداخت</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-dark">شیوه‌های ارسال</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-dark">پیگیری سفارش</a></li>
                    </ul>
                </div>
                
                <div class="col-md-3">
                    <h5 class="mb-3">تماس با ما</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-geo-alt me-2"></i> تهران، خیابان ولیعصر</li>
                        <li class="mb-2"><i class="bi bi-telephone me-2"></i> 021-12345678</li>
                        <li class="mb-2"><i class="bi bi-envelope me-2"></i> info@nextgen.com</li>
                    </ul>
                </div>
            </div>
            
            <div class="row mt-4 pt-4 border-top">
                <div class="col-12 text-center">
                    <p class="mb-0">© تمامی حقوق برای فروشگاه نکستژن محفوظ است. 1402</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 