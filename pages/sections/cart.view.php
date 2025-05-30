<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه آنلاین نکستژن - سبد خرید</title>
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
                    <a class="navbar-brand" href="index..php">نکستژن</a>
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index..php">خانه</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="products..php">محصولات</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">درباره ما</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">تماس با ما</a>
                            </li>
                        </ul>
                        
                        <div class="d-flex align-items-center">
                            <a href="login-register..php" class="btn btn-outline-dark me-2">
                                <i class="bi bi-person"></i>
                            </a>
                            <a href="#" class="btn btn-outline-dark me-2">
                                <i class="bi bi-heart"></i>
                            </a>
                            <a href="cart..php" class="btn btn-dark position-relative">
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
                <h2 class="mb-4">سبد خرید</h2>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-container mb-4">
                    <div class="cart-header d-none d-md-flex">
                        <div class="row w-100 align-items-center">
                            <div class="col-md-6">محصول</div>
                            <div class="col-md-2 text-center">قیمت</div>
                            <div class="col-md-2 text-center">تعداد</div>
                            <div class="col-md-2 text-center">جمع</div>
                        </div>
                    </div>
                    
                    <!-- محصول در سبد خرید -->
                    <div class="cart-item">
                        <div class="row align-items-center">
                            <div class="col-3 col-md-2">
                                <img src="https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" alt="هودی راحت" class="cart-item-img">
                            </div>
                            <div class="col-9 col-md-4">
                                <h5 class="cart-item-title">هودی راحت</h5>
                                <div class="cart-item-details">
                                    <div>سایز: M</div>
                                    <div>رنگ: مشکی</div>
                                </div>
                                <div class="mt-2 d-md-none">
                                    <span class="fw-bold">24,000 تومان</span>
                                </div>
                                <div class="mt-2 d-flex d-md-none align-items-center">
                                    <a href="#" class="btn-wishlist me-3"><i class="bi bi-heart"></i> ذخیره</a>
                                    <button class="btn-remove"><i class="bi bi-trash"></i></button>
                                </div>
                            </div>
                            <div class="col-md-2 text-center d-none d-md-block">
                                <div>24,000 تومان</div>
                            </div>
                            <div class="col-12 col-md-2 text-center mt-3 mt-md-0">
                                <div class="qty-control">
                                    <button class="qty-btn btn-light"><i class="bi bi-dash"></i></button>
                                    <input type="text" class="qty-input" value="1" readonly>
                                    <button class="qty-btn btn-light"><i class="bi bi-plus"></i></button>
                                </div>
                            </div>
                            <div class="col-md-2 text-center d-none d-md-block">
                                <div class="fw-bold">24,000 تومان</div>
                                <div class="mt-2">
                                    <a href="#" class="btn-wishlist me-2"><i class="bi bi-heart"></i> ذخیره</a>
                                    <button class="btn-remove"><i class="bi bi-trash"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- محصول در سبد خرید -->
                    <div class="cart-item">
                        <div class="row align-items-center">
                            <div class="col-3 col-md-2">
                                <img src="https://images.unsplash.com/photo-1598032895397-b9472444bf93?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" alt="کفش ورزشی" class="cart-item-img">
                            </div>
                            <div class="col-9 col-md-4">
                                <h5 class="cart-item-title">کفش ورزشی</h5>
                                <div class="cart-item-details">
                                    <div>سایز: 42</div>
                                    <div>رنگ: سفید</div>
                                </div>
                                <div class="mt-2 d-md-none">
                                    <span class="fw-bold">35,000 تومان</span>
                                </div>
                                <div class="mt-2 d-flex d-md-none align-items-center">
                                    <a href="#" class="btn-wishlist me-3"><i class="bi bi-heart"></i> ذخیره</a>
                                    <button class="btn-remove"><i class="bi bi-trash"></i></button>
                                </div>
                            </div>
                            <div class="col-md-2 text-center d-none d-md-block">
                                <div>35,000 تومان</div>
                            </div>
                            <div class="col-12 col-md-2 text-center mt-3 mt-md-0">
                                <div class="qty-control">
                                    <button class="qty-btn btn-light"><i class="bi bi-dash"></i></button>
                                    <input type="text" class="qty-input" value="1" readonly>
                                    <button class="qty-btn btn-light"><i class="bi bi-plus"></i></button>
                                </div>
                            </div>
                            <div class="col-md-2 text-center d-none d-md-block">
                                <div class="fw-bold">35,000 تومان</div>
                                <div class="mt-2">
                                    <a href="#" class="btn-wishlist me-2"><i class="bi bi-heart"></i> ذخیره</a>
                                    <button class="btn-remove"><i class="bi bi-trash"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- محصول در سبد خرید -->
                    <div class="cart-item">
                        <div class="row align-items-center">
                            <div class="col-3 col-md-2">
                                <img src="https://images.unsplash.com/photo-1596755094514-f87e34085b2c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" alt="تیشرت ساده" class="cart-item-img">
                            </div>
                            <div class="col-9 col-md-4">
                                <h5 class="cart-item-title">تیشرت ساده</h5>
                                <div class="cart-item-details">
                                    <div>سایز: L</div>
                                    <div>رنگ: آبی</div>
                                </div>
                                <div class="mt-2 d-md-none">
                                    <span class="fw-bold">18,000 تومان</span>
                                </div>
                                <div class="mt-2 d-flex d-md-none align-items-center">
                                    <a href="#" class="btn-wishlist me-3"><i class="bi bi-heart"></i> ذخیره</a>
                                    <button class="btn-remove"><i class="bi bi-trash"></i></button>
                                </div>
                            </div>
                            <div class="col-md-2 text-center d-none d-md-block">
                                <div>18,000 تومان</div>
                            </div>
                            <div class="col-12 col-md-2 text-center mt-3 mt-md-0">
                                <div class="qty-control">
                                    <button class="qty-btn btn-light"><i class="bi bi-dash"></i></button>
                                    <input type="text" class="qty-input" value="1" readonly>
                                    <button class="qty-btn btn-light"><i class="bi bi-plus"></i></button>
                                </div>
                            </div>
                            <div class="col-md-2 text-center d-none d-md-block">
                                <div class="fw-bold">18,000 تومان</div>
                                <div class="mt-2">
                                    <a href="#" class="btn-wishlist me-2"><i class="bi bi-heart"></i> ذخیره</a>
                                    <button class="btn-remove"><i class="bi bi-trash"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- بخش کد تخفیف -->
                    <div class="cart-footer">
                        <div class="row align-items-center">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="کد تخفیف را وارد کنید">
                                    <button class="btn btn-outline-dark" type="button">اعمال</button>
                                </div>
                            </div>
                            <div class="col-md-6 text-md-end">
                                <button class="btn btn-outline-dark">به‌روزرسانی سبد</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- دکمه‌های هدایت -->
                <div class="d-flex justify-content-between mb-4">
                    <a href="products..php" class="btn btn-outline-dark"><i class="bi bi-arrow-right me-1"></i> ادامه خرید</a>
                    <button class="btn btn-outline-danger">خالی کردن سبد <i class="bi bi-trash ms-1"></i></button>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="cart-summary mb-4">
                    <h4 class="mb-4">خلاصه سفارش</h4>
                    
                    <div class="summary-item">
                        <div>جمع محصولات (3)</div>
                        <div>77,000 تومان</div>
                    </div>
                    
                    <div class="summary-item">
                        <div>هزینه ارسال</div>
                        <div>15,000 تومان</div>
                    </div>
                    
                    <div class="summary-item">
                        <div>تخفیف</div>
                        <div>0 تومان</div>
                    </div>
                    
                    <div class="summary-total">
                        <div>مبلغ قابل پرداخت</div>
                        <div>92,000 تومان</div>
                    </div>
                    
                    <button class="btn btn-dark w-100 mt-4 py-2">ادامه فرآیند خرید</button>
                    
                    <div class="mt-4">
                        <div class="mb-2"><i class="bi bi-shield-check me-1"></i> پرداخت امن</div>
                        <div class="mb-2"><i class="bi bi-truck me-1"></i> ارسال سریع</div>
                        <div><i class="bi bi-arrow-repeat me-1"></i> گارانتی بازگشت وجه</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- محصولات پیشنهادی -->
        <div class="row mt-5">
            <div class="col-12">
                <h3 class="mb-4">محصولات پیشنهادی</h3>
            </div>
            
            <!-- محصول پیشنهادی -->
            <div class="col-6 col-md-3 mb-4">
                <div class="product-card position-relative">
                    <img src="https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" alt="محصول پیشنهادی" class="product-img">
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
            
            <!-- محصول پیشنهادی -->
            <div class="col-6 col-md-3 mb-4">
                <div class="product-card position-relative">
                    <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" alt="محصول پیشنهادی" class="product-img">
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
            
            <!-- محصول پیشنهادی -->
            <div class="col-6 col-md-3 mb-4">
                <div class="product-card position-relative">
                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" alt="محصول پیشنهادی" class="product-img">
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
            
            <!-- محصول پیشنهادی -->
            <div class="col-6 col-md-3 mb-4">
                <div class="product-card position-relative">
                    <img src="https://images.unsplash.com/photo-1591369822096-ffd140ec948f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" alt="محصول پیشنهادی" class="product-img">
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
    
    <!-- سبد خالی (غیرفعال) -->
    <div class="container my-5 d-none">
        <div class="cart-empty">
            <div class="cart-empty-icon">
                <i class="bi bi-cart-x"></i>
            </div>
            <h3 class="mb-3">سبد خرید شما خالی است</h3>
            <p class="mb-4">محصولی در سبد خرید شما موجود نیست. می‌توانید با مراجعه به فروشگاه، محصول مورد نظر خود را انتخاب کنید.</p>
            <a href="products..php" class="btn btn-dark px-4 py-2">مشاهده محصولات</a>
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
                        <li class="mb-2"><a href="#" class="text-decoration-none text-dark">صفحه اصلی</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-dark">محصولات</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-dark">درباره ما</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-dark">تماس با ما</a></li>
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
    <script src="../assets/js/cart.js"></script>
</body>
</html> 