<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه آنلاین نکستژن - پنل کاربری</title>
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
                            <a href="#" class="user-menu-link active">
                                <span class="user-menu-icon"><i class="bi bi-house"></i></span>
                                داشبورد
                            </a>
                        </li>
                        <li class="user-menu-item">
                            <a href="#" class="user-menu-link">
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
                        <h3 class="mb-0">داشبورد</h3>
                        <span class="text-muted">خوش آمدید، علی محمدی</span>
                    </div>
                    
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="stats-box">
                                <div class="stats-icon">
                                    <i class="bi bi-calendar3 text-primary"></i>
                                </div>
                                <div class="stats-content">
                                    <div class="stats-title">تاریخ عضویت</div>
                                    <p class="stats-value">1401/03/15</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="stats-box">
                                <div class="stats-icon">
                                    <i class="bi bi-cart-check text-success"></i>
                                </div>
                                <div class="stats-content">
                                    <div class="stats-title">آخرین خرید</div>
                                    <p class="stats-value">1402/08/29</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="dashboard-cards">
                        <div class="dashboard-card">
                            <div class="dashboard-card-icon card-icon-orders">
                                <i class="bi bi-box-seam"></i>
                            </div>
                            <div class="dashboard-card-content">
                                <h4>7</h4>
                                <p>سفارش</p>
                            </div>
                        </div>
                        
                        <div class="dashboard-card">
                            <div class="dashboard-card-icon card-icon-wishlist">
                                <i class="bi bi-heart"></i>
                            </div>
                            <div class="dashboard-card-content">
                                <h4>12</h4>
                                <p>علاقه‌مندی</p>
                            </div>
                        </div>
                        
                        <div class="dashboard-card">
                            <div class="dashboard-card-icon card-icon-comments">
                                <i class="bi bi-chat-dots"></i>
                            </div>
                            <div class="dashboard-card-content">
                                <h4>4</h4>
                                <p>نظر</p>
                            </div>
                        </div>
                        
                        <div class="dashboard-card">
                            <div class="dashboard-card-icon card-icon-wallet">
                                <i class="bi bi-wallet2"></i>
                            </div>
                            <div class="dashboard-card-content">
                                <h4>150,000</h4>
                                <p>اعتبار (تومان)</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="recent-orders">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4>سفارش‌های اخیر</h4>
                            <a href="#" class="btn btn-sm btn-outline-primary">نمایش همه</a>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="order-table">
                                <thead>
                                    <tr>
                                        <th>شماره سفارش</th>
                                        <th>تاریخ</th>
                                        <th>مبلغ</th>
                                        <th>وضعیت</th>
                                        <th>عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="order-id">NXG-10057834</span></td>
                                        <td>1402/08/29</td>
                                        <td>92,000 تومان</td>
                                        <td><span class="order-status status-processing">در حال آماده‌سازی</span></td>
                                        <td>
                                            <a href="payment-details.php" class="btn btn-sm btn-outline-secondary">جزئیات</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="order-id">NXG-10053729</span></td>
                                        <td>1402/07/15</td>
                                        <td>145,000 تومان</td>
                                        <td><span class="order-status status-shipped">ارسال شده</span></td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-outline-secondary">جزئیات</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="order-id">NXG-10049257</span></td>
                                        <td>1402/06/02</td>
                                        <td>78,500 تومان</td>
                                        <td><span class="order-status status-completed">تحویل شده</span></td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-outline-secondary">جزئیات</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="order-id">NXG-10042518</span></td>
                                        <td>1402/04/18</td>
                                        <td>52,000 تومان</td>
                                        <td><span class="order-status status-canceled">لغو شده</span></td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-outline-secondary">جزئیات</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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