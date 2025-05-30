<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه آنلاین نکستژن - کیف پول</title>
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
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger card-badge">
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
                            <a href="user-orders.php" class="user-menu-link">
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
                            <a href="user-addresses.php" class="user-menu-link">
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
                            <a href="user-wallet.php" class="user-menu-link active">
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
                        <h3 class="mb-0">کیف پول</h3>
                        <span class="text-muted">مدیریت اعتبار و تراکنش‌ها</span>
                    </div>
                    
                    <!-- موجودی کیف پول -->
                    <div class="wallet-balance">
                        <div class="wallet-balance-info">
                            <h4>موجودی کیف پول</h4>
                            <h3>150,000 تومان</h3>
                        </div>
                        <div class="wallet-balance-icon">
                            <i class="bi bi-wallet2"></i>
                        </div>
                    </div>
                    
                    <!-- عملیات کیف پول -->
                    <div class="wallet-actions">
                        <a href="#" class="wallet-action-btn" data-bs-toggle="modal" data-bs-target="#addCreditModal">
                            <div class="wallet-action-icon">
                                <i class="bi bi-plus-circle"></i>
                            </div>
                            <span class="wallet-action-text">افزایش موجودی</span>
                        </a>
                        
                        <a href="#" class="wallet-action-btn">
                            <div class="wallet-action-icon">
                                <i class="bi bi-arrow-left-right"></i>
                            </div>
                            <span class="wallet-action-text">انتقال به دوستان</span>
                        </a>
                        
                        <a href="#" class="wallet-action-btn">
                            <div class="wallet-action-icon">
                                <i class="bi bi-credit-card"></i>
                            </div>
                            <span class="wallet-action-text">درخواست برداشت</span>
                        </a>
                    </div>
                    
                    <!-- تاریخچه تراکنش‌ها -->
                    <div class="transaction-list">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h4>تاریخچه تراکنش‌ها</h4>
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="filterDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    فیلتر
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="filterDropdown">
                                    <li><a class="dropdown-item active" href="#">همه تراکنش‌ها</a></li>
                                    <li><a class="dropdown-item" href="#">واریز</a></li>
                                    <li><a class="dropdown-item" href="#">برداشت</a></li>
                                    <li><a class="dropdown-item" href="#">بازپرداخت</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <!-- آیتم‌های تراکنش -->
                        <div class="transaction-item">
                            <div class="d-flex align-items-center">
                                <div class="transaction-icon deposit">
                                    <i class="bi bi-arrow-down"></i>
                                </div>
                                <div class="transaction-info">
                                    <div class="transaction-title">افزایش موجودی</div>
                                    <div class="transaction-date">1402/08/25 - 14:35</div>
                                </div>
                            </div>
                            <div class="transaction-amount deposit">+50,000 تومان</div>
                        </div>
                        
                        <div class="transaction-item">
                            <div class="d-flex align-items-center">
                                <div class="transaction-icon payment">
                                    <i class="bi bi-arrow-up"></i>
                                </div>
                                <div class="transaction-info">
                                    <div class="transaction-title">پرداخت سفارش #NXG-10057834</div>
                                    <div class="transaction-date">1402/08/20 - 10:15</div>
                                </div>
                            </div>
                            <div class="transaction-amount payment">-35,000 تومان</div>
                        </div>
                        
                        <div class="transaction-item">
                            <div class="d-flex align-items-center">
                                <div class="transaction-icon refund">
                                    <i class="bi bi-arrow-counterclockwise"></i>
                                </div>
                                <div class="transaction-info">
                                    <div class="transaction-title">بازپرداخت سفارش #NXG-10042518</div>
                                    <div class="transaction-date">1402/07/10 - 18:45</div>
                                </div>
                            </div>
                            <div class="transaction-amount refund">+25,000 تومان</div>
                        </div>
                        
                        <div class="transaction-item">
                            <div class="d-flex align-items-center">
                                <div class="transaction-icon deposit">
                                    <i class="bi bi-arrow-down"></i>
                                </div>
                                <div class="transaction-info">
                                    <div class="transaction-title">افزایش موجودی</div>
                                    <div class="transaction-date">1402/07/01 - 09:20</div>
                                </div>
                            </div>
                            <div class="transaction-amount deposit">+100,000 تومان</div>
                        </div>
                        
                        <div class="transaction-item">
                            <div class="d-flex align-items-center">
                                <div class="transaction-icon payment">
                                    <i class="bi bi-arrow-up"></i>
                                </div>
                                <div class="transaction-info">
                                    <div class="transaction-title">پرداخت سفارش #NXG-10053729</div>
                                    <div class="transaction-date">1402/06/15 - 16:30</div>
                                </div>
                            </div>
                            <div class="transaction-amount payment">-45,000 تومان</div>
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
    
    <!-- مودال افزایش موجودی -->
    <div class="modal fade" id="addCreditModal" tabindex="-1" aria-labelledby="addCreditModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCreditModalLabel">افزایش موجودی کیف پول</h5>
                    <button type="button" class="btn-close ms-0 me-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-4">
                            <label class="form-label">انتخاب مبلغ (تومان)</label>
                            <div class="amount-options">
                                <div class="amount-option">50,000</div>
                                <div class="amount-option active">100,000</div>
                                <div class="amount-option">200,000</div>
                                <div class="amount-option">500,000</div>
                            </div>
                            <div class="input-group mt-3">
                                <span class="input-group-text">تومان</span>
                                <input type="text" class="form-control" placeholder="مبلغ دلخواه" value="100,000">
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label">انتخاب روش پرداخت</label>
                            <div class="payment-methods">
                                <div class="payment-method-item active">
                                    <div class="payment-method-icon">
                                        <i class="bi bi-credit-card"></i>
                                    </div>
                                    <div class="payment-method-info">
                                        <div class="payment-method-title">درگاه مستقیم بانکی</div>
                                        <div class="payment-method-description">پرداخت آنلاین با تمامی کارت‌های بانکی</div>
                                    </div>
                                </div>
                                
                                <div class="payment-method-item">
                                    <div class="payment-method-icon">
                                        <i class="bi bi-wallet2"></i>
                                    </div>
                                    <div class="payment-method-info">
                                        <div class="payment-method-title">کیف پول دیجیتال</div>
                                        <div class="payment-method-description">استفاده از کیف پول‌های دیجیتال مانند زرین‌پال</div>
                                    </div>
                                </div>
                                
                                <div class="payment-method-item">
                                    <div class="payment-method-icon">
                                        <i class="bi bi-bank"></i>
                                    </div>
                                    <div class="payment-method-info">
                                        <div class="payment-method-title">کارت به کارت</div>
                                        <div class="payment-method-description">واریز به شماره کارت و اعلام فیش واریزی</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="savePaymentMethod">
                                <label class="form-check-label" for="savePaymentMethod">
                                    ذخیره این روش پرداخت برای استفاده‌های بعدی
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">انصراف</button>
                    <button type="button" class="btn btn-primary">پرداخت</button>
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