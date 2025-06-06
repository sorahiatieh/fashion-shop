<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه آنلاین نکستژن - سفارش‌های من</title>
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
                            <a href="user-panel.php" class="btn btn-outline-dark me-2 active">
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

    <div class="container my-5 user-panel">
        <div class="row">
            <!-- سایدبار کاربر -->
            <div class="col-lg-3">
                <div class="user-sidebar">
                    <div class="user-info">
                        <div class="user-avatar">
                            <i class="bi bi-person"></i>
                        </div>
                        <h5 class="user-name">علی محمدی</h5>
                        <p class="user-email">ali@example.com</p>
                    </div>
                    
                    <ul class="user-menu">
                        <li class="user-menu-item">
                            <a href="user-panel.php" class="user-menu-link">
                                <span class="user-menu-icon"><i class="bi bi-house"></i></span>
                                داشبورد
                            </a>
                        </li>
                        <li class="user-menu-item">
                            <a href="user-orders.php" class="user-menu-link active">
                                <span class="user-menu-icon"><i class="bi bi-box-seam"></i></span>
                                سفارش‌های من
                            </a>
                        </li>
                        <li class="user-menu-item">
                            <a href="#" class="user-menu-link">
                                <span class="user-menu-icon"><i class="bi bi-heart"></i></span>
                                لیست علاقه‌مندی‌ها
                            </a>
                        </li>
                        <li class="user-menu-item">
                            <a href="#" class="user-menu-link">
                                <span class="user-menu-icon"><i class="bi bi-geo-alt"></i></span>
                                آدرس‌های من
                            </a>
                        </li>
                        <li class="user-menu-item">
                            <a href="#" class="user-menu-link">
                                <span class="user-menu-icon"><i class="bi bi-chat-dots"></i></span>
                                نظرات من
                            </a>
                        </li>
                        <li class="user-menu-item">
                            <a href="#" class="user-menu-link">
                                <span class="user-menu-icon"><i class="bi bi-wallet2"></i></span>
                                کیف پول
                            </a>
                        </li>
                        <li class="user-menu-item">
                            <a href="#" class="user-menu-link">
                                <span class="user-menu-icon"><i class="bi bi-gift"></i></span>
                                کدهای تخفیف
                            </a>
                        </li>
                        <li class="user-menu-item">
                            <a href="#" class="user-menu-link">
                                <span class="user-menu-icon"><i class="bi bi-gear"></i></span>
                                تنظیمات حساب کاربری
                            </a>
                        </li>
                        <li class="user-menu-item">
                            <a href="login-register.php" class="user-menu-link text-danger">
                                <span class="user-menu-icon"><i class="bi bi-box-arrow-right"></i></span>
                                خروج از حساب کاربری
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- محتوای اصلی -->
            <div class="col-lg-9">
                <div class="user-content">
                    <div class="content-title">
                        <h3 class="mb-0">سفارش‌های من</h3>
                        <span class="text-muted">مدیریت و پیگیری سفارش‌ها</span>
                    </div>
                    
                    <div class="orders-filter">
                        <div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-secondary active">همه</button>
                                <button type="button" class="btn btn-outline-secondary">در حال پردازش</button>
                                <button type="button" class="btn btn-outline-secondary">ارسال شده</button>
                                <button type="button" class="btn btn-outline-secondary">تحویل شده</button>
                                <button type="button" class="btn btn-outline-secondary">لغو شده</button>
                            </div>
                        </div>
                        <div>
                            <select class="form-select">
                                <option selected>مرتب‌سازی</option>
                                <option>جدیدترین</option>
                                <option>قدیمی‌ترین</option>
                                <option>بیشترین مبلغ</option>
                                <option>کمترین مبلغ</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- سفارش‌های کاربر -->
                    <div class="orders-list">
                        <!-- سفارش اول -->
                        <div class="order-card">
                            <div class="order-header">
                                <div class="order-header-info">
                                    <div class="order-header-id">سفارش #NXG-10057834</div>
                                    <div class="order-header-date">1402/08/29</div>
                                </div>
                                <div class="order-header-status">
                                    <span class="order-status status-processing">در حال آماده‌سازی</span>
                                </div>
                            </div>
                            <div class="order-body">
                                <div class="order-products">
                                    <img src="https://images.unsplash.com/photo-1578681994506-b8f463449011?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=150&q=80" alt="هودی" class="order-product-img">
                                    <img src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=150&q=80" alt="کفش" class="order-product-img">
                                    <img src="https://images.unsplash.com/photo-1562157873-818bc0726f68?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=150&q=80" alt="تیشرت" class="order-product-img">
                                </div>
                                <div class="d-flex">
                                    <span class="badge bg-secondary me-2">هودی راحت سایز M</span>
                                    <span class="badge bg-secondary me-2">کفش ورزشی سایز 42</span>
                                    <span class="badge bg-secondary">تیشرت ساده سایز L</span>
                                </div>
                            </div>
                            <div class="order-summary">
                                <div class="order-price">92,000 تومان</div>
                                <div class="order-actions">
                                    <a href="payment-details.php" class="btn btn-outline-primary">نمایش جزئیات</a>
                                </div>
                            </div>
                            <div class="order-tracking">
                                <div>
                                    <i class="bi bi-truck me-2"></i>
                                    <span>روش ارسال: پست پیشتاز</span>
                                </div>
                                <div>
                                    <i class="bi bi-calendar-event me-2"></i>
                                    <span>تاریخ تحویل تقریبی: 1402/09/01 تا 1402/09/03</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- سفارش دوم -->
                        <div class="order-card">
                            <div class="order-header">
                                <div class="order-header-info">
                                    <div class="order-header-id">سفارش #NXG-10053729</div>
                                    <div class="order-header-date">1402/07/15</div>
                                </div>
                                <div class="order-header-status">
                                    <span class="order-status status-shipped">ارسال شده</span>
                                </div>
                            </div>
                            <div class="order-body">
                                <div class="order-products">
                                    <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=150&q=80" alt="شلوار" class="order-product-img">
                                    <img src="https://images.unsplash.com/photo-1591369822096-ffd140ec948f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=150&q=80" alt="ساعت" class="order-product-img">
                                </div>
                                <div class="d-flex">
                                    <span class="badge bg-secondary me-2">شلوار جین زنانه</span>
                                    <span class="badge bg-secondary">ساعت مچی کلاسیک</span>
                                </div>
                            </div>
                            <div class="order-summary">
                                <div class="order-price">145,000 تومان</div>
                                <div class="order-actions">
                                    <a href="#" class="btn btn-outline-primary">نمایش جزئیات</a>
                                </div>
                            </div>
                            <div class="order-tracking">
                                <div>
                                    <i class="bi bi-truck me-2"></i>
                                    <span>روش ارسال: پست پیشتاز</span>
                                </div>
                                <div>
                                    <i class="bi bi-geo-alt me-2"></i>
                                    <span>کد رهگیری: 123456789012</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- سفارش سوم -->
                        <div class="order-card">
                            <div class="order-header">
                                <div class="order-header-info">
                                    <div class="order-header-id">سفارش #NXG-10049257</div>
                                    <div class="order-header-date">1402/06/02</div>
                                </div>
                                <div class="order-header-status">
                                    <span class="order-status status-completed">تحویل شده</span>
                                </div>
                            </div>
                            <div class="order-body">
                                <div class="order-products">
                                    <img src="https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=150&q=80" alt="کت" class="order-product-img">
                                </div>
                                <div class="d-flex">
                                    <span class="badge bg-secondary">کت اسپرت مردانه</span>
                                </div>
                            </div>
                            <div class="order-summary">
                                <div class="order-price">78,500 تومان</div>
                                <div class="order-actions">
                                    <a href="#" class="btn btn-outline-primary">نمایش جزئیات</a>
                                    <button class="btn btn-outline-success ms-2">ثبت نظر</button>
                                    <button class="btn btn-outline-warning ms-2">درخواست مرجوعی</button>
                                </div>
                            </div>
                            <div class="order-tracking">
                                <div>
                                    <i class="bi bi-truck me-2"></i>
                                    <span>روش ارسال: پست پیشتاز</span>
                                </div>
                                <div>
                                    <i class="bi bi-check-circle-fill me-2 text-success"></i>
                                    <span>تحویل داده شده در تاریخ 1402/06/05</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- سفارش چهارم -->
                        <div class="order-card">
                            <div class="order-header">
                                <div class="order-header-info">
                                    <div class="order-header-id">سفارش #NXG-10042518</div>
                                    <div class="order-header-date">1402/04/18</div>
                                </div>
                                <div class="order-header-status">
                                    <span class="order-status status-canceled">لغو شده</span>
                                </div>
                            </div>
                            <div class="order-body">
                                <div class="order-products">
                                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=150&q=80" alt="کفش" class="order-product-img">
                                </div>
                                <div class="d-flex">
                                    <span class="badge bg-secondary">کفش ورزشی نایک</span>
                                </div>
                            </div>
                            <div class="order-summary">
                                <div class="order-price">52,000 تومان</div>
                                <div class="order-actions">
                                    <a href="#" class="btn btn-outline-primary">نمایش جزئیات</a>
                                    <button class="btn btn-outline-primary ms-2">سفارش مجدد</button>
                                </div>
                            </div>
                            <div class="order-tracking">
                                <div>
                                    <i class="bi bi-x-circle-fill me-2 text-danger"></i>
                                    <span>لغو شده توسط کاربر</span>
                                </div>
                                <div>
                                    <i class="bi bi-calendar-event me-2"></i>
                                    <span>تاریخ لغو: 1402/04/19</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- پیجینیشن -->
                    <div class="pagination-container">
                        <ul class="pagination">
                            <li class="pagination-item">
                                <a href="#" class="pagination-link">
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-link active">1</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-link">2</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-link">3</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-link">
                                    <i class="bi bi-chevron-left"></i>
                                </a>
                            </li>
                        </ul>
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