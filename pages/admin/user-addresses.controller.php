<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه آنلاین نکستژن - آدرس‌های من</title>
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
                            <a href="user-addresses.php" class="user-menu-link active">
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
                        <h3 class="mb-0">آدرس‌های من</h3>
                        <span class="text-muted">مدیریت آدرس‌های ارسال</span>
                    </div>
                    
                    <div class="row">
                        <!-- آدرس پیش‌فرض -->
                        <div class="col-lg-6">
                            <div class="address-card default">
                                <div class="default-badge">پیش‌فرض</div>
                                <div class="address-title">
                                    <span>منزل</span>
                                </div>
                                <div class="address-details">
                                    <div class="address-detail-item">
                                        <div class="address-detail-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                        <div>علی محمدی</div>
                                    </div>
                                    <div class="address-detail-item">
                                        <div class="address-detail-icon">
                                            <i class="bi bi-geo-alt"></i>
                                        </div>
                                        <div>تهران، خیابان جمهوری، پلاک 158</div>
                                    </div>
                                    <div class="address-detail-item">
                                        <div class="address-detail-icon">
                                            <i class="bi bi-envelope"></i>
                                        </div>
                                        <div>کدپستی: 1234567890</div>
                                    </div>
                                    <div class="address-detail-item">
                                        <div class="address-detail-icon">
                                            <i class="bi bi-telephone"></i>
                                        </div>
                                        <div>09123456789</div>
                                    </div>
                                </div>
                                <div class="address-actions">
                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editAddressModal">
                                        <i class="bi bi-pencil me-1"></i>
                                        ویرایش
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-trash me-1"></i>
                                        حذف
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- آدرس دوم -->
                        <div class="col-lg-6">
                            <div class="address-card">
                                <div class="address-title">
                                    <span>محل کار</span>
                                </div>
                                <div class="address-details">
                                    <div class="address-detail-item">
                                        <div class="address-detail-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                        <div>علی محمدی</div>
                                    </div>
                                    <div class="address-detail-item">
                                        <div class="address-detail-icon">
                                            <i class="bi bi-geo-alt"></i>
                                        </div>
                                        <div>تهران، میدان ولیعصر، خیابان کریم‌خان، پلاک 42</div>
                                    </div>
                                    <div class="address-detail-item">
                                        <div class="address-detail-icon">
                                            <i class="bi bi-envelope"></i>
                                        </div>
                                        <div>کدپستی: 9876543210</div>
                                    </div>
                                    <div class="address-detail-item">
                                        <div class="address-detail-icon">
                                            <i class="bi bi-telephone"></i>
                                        </div>
                                        <div>09123456789</div>
                                    </div>
                                </div>
                                <div class="address-actions">
                                    <button class="btn btn-sm btn-outline-success">
                                        <i class="bi bi-check-circle me-1"></i>
                                        انتخاب به عنوان پیش‌فرض
                                    </button>
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-pencil me-1"></i>
                                        ویرایش
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-trash me-1"></i>
                                        حذف
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- دکمه افزودن آدرس جدید -->
                        <div class="col-lg-6">
                            <a href="#" class="add-address-btn" data-bs-toggle="modal" data-bs-target="#addAddressModal">
                                <div class="add-address-icon">
                                    <i class="bi bi-plus-circle"></i>
                                </div>
                                <div>افزودن آدرس جدید</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- مودال افزودن آدرس جدید -->
    <div class="modal fade" id="addAddressModal" tabindex="-1" aria-labelledby="addAddressModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAddressModalLabel">افزودن آدرس جدید</h5>
                    <button type="button" class="btn-close ms-0 me-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="addressTitle" class="form-label">عنوان آدرس</label>
                                <input type="text" class="form-control" id="addressTitle" placeholder="مثال: منزل، محل کار، ...">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="recipientName" class="form-label">نام و نام خانوادگی گیرنده</label>
                                <input type="text" class="form-control" id="recipientName" placeholder="نام و نام خانوادگی گیرنده">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="mobileNumber" class="form-label">شماره موبایل</label>
                                <input type="tel" class="form-control" id="mobileNumber" placeholder="09xxxxxxxxx">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phoneNumber" class="form-label">شماره ثابت (اختیاری)</label>
                                <input type="tel" class="form-control" id="phoneNumber" placeholder="021xxxxxxxx">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="province" class="form-label">استان</label>
                                <select class="form-select" id="province">
                                    <option selected disabled>انتخاب استان</option>
                                    <option>تهران</option>
                                    <option>اصفهان</option>
                                    <option>مشهد</option>
                                    <option>شیراز</option>
                                    <option>تبریز</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="city" class="form-label">شهر</label>
                                <select class="form-select" id="city">
                                    <option selected disabled>انتخاب شهر</option>
                                    <option>تهران</option>
                                    <option>ری</option>
                                    <option>شمیرانات</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="postalCode" class="form-label">کد پستی</label>
                                <input type="text" class="form-control" id="postalCode" placeholder="کد پستی 10 رقمی">
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="addressDetails" class="form-label">آدرس کامل</label>
                            <textarea class="form-control" id="addressDetails" rows="3" placeholder="آدرس دقیق خود را وارد کنید..."></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="setAsDefault">
                                <label class="form-check-label" for="setAsDefault">
                                    این آدرس به عنوان آدرس پیش‌فرض تنظیم شود
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">انصراف</button>
                    <button type="button" class="btn btn-primary">ثبت آدرس</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- مودال ویرایش آدرس -->
    <div class="modal fade" id="editAddressModal" tabindex="-1" aria-labelledby="editAddressModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editAddressModalLabel">ویرایش آدرس</h5>
                    <button type="button" class="btn-close ms-0 me-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="editAddressTitle" class="form-label">عنوان آدرس</label>
                                <input type="text" class="form-control" id="editAddressTitle" value="منزل">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="editRecipientName" class="form-label">نام و نام خانوادگی گیرنده</label>
                                <input type="text" class="form-control" id="editRecipientName" value="علی محمدی">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="editMobileNumber" class="form-label">شماره موبایل</label>
                                <input type="tel" class="form-control" id="editMobileNumber" value="09123456789">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="editPhoneNumber" class="form-label">شماره ثابت (اختیاری)</label>
                                <input type="tel" class="form-control" id="editPhoneNumber" value="02112345678">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="editProvince" class="form-label">استان</label>
                                <select class="form-select" id="editProvince">
                                    <option>تهران</option>
                                    <option>اصفهان</option>
                                    <option>مشهد</option>
                                    <option>شیراز</option>
                                    <option>تبریز</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="editCity" class="form-label">شهر</label>
                                <select class="form-select" id="editCity">
                                    <option selected>تهران</option>
                                    <option>ری</option>
                                    <option>شمیرانات</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="editPostalCode" class="form-label">کد پستی</label>
                                <input type="text" class="form-control" id="editPostalCode" value="1234567890">
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="editAddressDetails" class="form-label">آدرس کامل</label>
                            <textarea class="form-control" id="editAddressDetails" rows="3">تهران، خیابان جمهوری، پلاک 158</textarea>
                        </div>
                        
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="editSetAsDefault" checked>
                                <label class="form-check-label" for="editSetAsDefault">
                                    این آدرس به عنوان آدرس پیش‌فرض تنظیم شود
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">انصراف</button>
                    <button type="button" class="btn btn-primary">ذخیره تغییرات</button>
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