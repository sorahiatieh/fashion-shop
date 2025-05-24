<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه آنلاین نکستژن - تنظیمات حساب کاربری</title>
    <!-- Bootstrap 5 RTL CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">
    <!-- Vazir Font -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v30.1.0/dist/font-face.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <!-- نوار بالایی -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">نکستژن</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">صفحه اصلی</a>
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
                <div class="d-flex">
                    <a href="user-panel.php" class="btn btn-outline-dark ms-2">
                        <i class="bi bi-person"></i>
                    </a>
                    <a href="cart.php" class="btn btn-outline-dark position-relative">
                        <i class="bi bi-cart"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            2
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- فضای خالی برای فاصله از نوار بالایی -->
    <div style="padding-top: 76px;"></div>
    
    <!-- محتوای اصلی -->
    <div class="container my-5">
        <div class="row user-panel g-4">
            <!-- سایدبار -->
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
                            <a href="user-wishlist.php" class="user-menu-link">
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
                            <a href="user-wallet.php" class="user-menu-link">
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
                            <a href="user-settings.php" class="user-menu-link active">
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
                        <h3 class="mb-0">تنظیمات حساب کاربری</h3>
                    </div>
                    
                    <!-- منوی تنظیمات -->
                    <ul class="nav settings-nav" id="settingsTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab">
                                اطلاعات شخصی
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="security-tab" data-bs-toggle="tab" data-bs-target="#security-tab-pane" type="button" role="tab">
                                امنیت و ورود
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="notifications-tab" data-bs-toggle="tab" data-bs-target="#notifications-tab-pane" type="button" role="tab">
                                اعلان‌ها
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="privacy-tab" data-bs-toggle="tab" data-bs-target="#privacy-tab-pane" type="button" role="tab">
                                حریم خصوصی
                            </button>
                        </li>
                    </ul>
                    
                    <!-- محتوای تب‌ها -->
                    <div class="tab-content" id="settingsTabContent">
                        <!-- اطلاعات شخصی -->
                        <div class="tab-pane fade show active" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                            <form>
                                <div class="avatar-upload">
                                    <div class="avatar-preview">
                                        <i class="bi bi-person"></i>
                                    </div>
                                    <div class="avatar-edit">
                                        <label for="avatar-upload" title="تغییر تصویر پروفایل">
                                            <i class="bi bi-camera"></i>
                                        </label>
                                        <input type="file" id="avatar-upload" style="display: none;">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="settings-form-group">
                                            <label for="first-name" class="form-label">نام</label>
                                            <input type="text" class="form-control" id="first-name" value="علی">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="settings-form-group">
                                            <label for="last-name" class="form-label">نام خانوادگی</label>
                                            <input type="text" class="form-control" id="last-name" value="محمدی">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="settings-form-group">
                                    <label for="email" class="form-label">ایمیل</label>
                                    <input type="email" class="form-control" id="email" value="ali@example.com">
                                </div>
                                
                                <div class="settings-form-group">
                                    <label for="phone" class="form-label">شماره موبایل</label>
                                    <input type="tel" class="form-control" id="phone" value="09123456789">
                                </div>
                                
                                <div class="settings-form-group">
                                    <label for="national-id" class="form-label">کد ملی</label>
                                    <input type="text" class="form-control" id="national-id" value="0123456789">
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="settings-form-group">
                                            <label for="birth-date" class="form-label">تاریخ تولد</label>
                                            <input type="text" class="form-control" id="birth-date" value="1370/05/12">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="settings-form-group">
                                            <label class="form-label">جنسیت</label>
                                            <div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="gender-male" checked>
                                                    <label class="form-check-label" for="gender-male">مرد</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="gender-female">
                                                    <label class="form-check-label" for="gender-female">زن</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-dark mt-3">ذخیره تغییرات</button>
                            </form>
                        </div>
                        
                        <!-- امنیت و ورود -->
                        <div class="tab-pane fade" id="security-tab-pane" role="tabpanel" aria-labelledby="security-tab" tabindex="0">
                            <h5 class="mb-4">تغییر رمز عبور</h5>
                            <form>
                                <div class="settings-form-group">
                                    <label for="current-password" class="form-label">رمز عبور فعلی</label>
                                    <input type="password" class="form-control" id="current-password">
                                </div>
                                <div class="settings-form-group">
                                    <label for="new-password" class="form-label">رمز عبور جدید</label>
                                    <input type="password" class="form-control" id="new-password">
                                    <div class="form-text">رمز عبور باید حداقل ۸ کاراکتر و شامل حروف بزرگ، کوچک و اعداد باشد.</div>
                                </div>
                                <div class="settings-form-group">
                                    <label for="confirm-password" class="form-label">تکرار رمز عبور جدید</label>
                                    <input type="password" class="form-control" id="confirm-password">
                                </div>
                                <button type="submit" class="btn btn-dark mt-2 mb-5">تغییر رمز عبور</button>
                            </form>
                            
                            <h5 class="mt-4 mb-4">تایید دو مرحله‌ای</h5>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div>
                                    <p class="mb-0">با فعال کردن تایید دو مرحله‌ای، امنیت حساب کاربری خود را افزایش دهید.</p>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="two-factor-auth">
                                </div>
                            </div>
                            
                            <h5 class="mt-5 mb-4">دستگاه‌ها و نشست‌های فعال</h5>
                            <ul class="security-list">
                                <li>
                                    <div class="security-list-details">
                                        <h6>ویندوز - مرورگر کروم</h6>
                                        <p>تهران، ایران - آخرین فعالیت: امروز، ساعت ۱۰:۲۵</p>
                                    </div>
                                    <span class="badge bg-success">فعال</span>
                                </li>
                                <li>
                                    <div class="security-list-details">
                                        <h6>آیفون - اپلیکیشن موبایل</h6>
                                        <p>تهران، ایران - آخرین فعالیت: دیروز، ساعت ۱۸:۴۵</p>
                                    </div>
                                    <button class="btn btn-sm btn-outline-danger">خروج</button>
                                </li>
                                <li>
                                    <div class="security-list-details">
                                        <h6>اندروید - مرورگر کروم</h6>
                                        <p>تهران، ایران - آخرین فعالیت: ۱۴۰۲/۰۸/۰۱</p>
                                    </div>
                                    <button class="btn btn-sm btn-outline-danger">خروج</button>
                                </li>
                            </ul>
                        </div>
                        
                        <!-- اعلان‌ها -->
                        <div class="tab-pane fade" id="notifications-tab-pane" role="tabpanel" aria-labelledby="notifications-tab" tabindex="0">
                            <h5 class="mb-4">تنظیمات اعلان‌ها</h5>
                            
                            <div class="notification-item">
                                <div class="notification-details">
                                    <h6>اعلان‌های ایمیلی</h6>
                                    <p>اطلاع‌رسانی از طریق ایمیل درباره سفارش‌ها، تخفیف‌ها و اخبار</p>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="email-notifications" checked>
                                </div>
                            </div>
                            
                            <div class="notification-item">
                                <div class="notification-details">
                                    <h6>اعلان‌های پیامکی</h6>
                                    <p>اطلاع‌رسانی از طریق پیامک درباره سفارش‌ها و وضعیت ارسال</p>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="sms-notifications" checked>
                                </div>
                            </div>
                            
                            <div class="notification-item">
                                <div class="notification-details">
                                    <h6>اعلان‌های مرورگر</h6>
                                    <p>نمایش اعلان‌ها در مرورگر هنگام بازدید از سایت</p>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="browser-notifications">
                                </div>
                            </div>
                            
                            <h5 class="mt-5 mb-4">موضوعات اعلان‌ها</h5>
                            
                            <div class="notification-item">
                                <div class="notification-details">
                                    <h6>وضعیت سفارش‌ها</h6>
                                    <p>اطلاع‌رسانی درباره تغییر وضعیت سفارش‌ها و ارسال</p>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="order-status-notifications" checked>
                                </div>
                            </div>
                            
                            <div class="notification-item">
                                <div class="notification-details">
                                    <h6>پیشنهادات و تخفیف‌ها</h6>
                                    <p>اطلاع‌رسانی درباره تخفیف‌ها، کدهای تخفیف و پیشنهادات ویژه</p>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="promotion-notifications" checked>
                                </div>
                            </div>
                            
                            <div class="notification-item">
                                <div class="notification-details">
                                    <h6>یادآوری سبد خرید</h6>
                                    <p>یادآوری محصولات موجود در سبد خرید</p>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="cart-reminder-notifications">
                                </div>
                            </div>
                            
                            <button class="btn btn-dark mt-4">ذخیره تنظیمات</button>
                        </div>
                        
                        <!-- حریم خصوصی -->
                        <div class="tab-pane fade" id="privacy-tab-pane" role="tabpanel" aria-labelledby="privacy-tab" tabindex="0">
                            <h5 class="mb-4">تنظیمات حریم خصوصی</h5>
                            
                            <div class="notification-item">
                                <div class="notification-details">
                                    <h6>نمایش نظرات من</h6>
                                    <p>نظرات شما برای سایر کاربران قابل مشاهده باشد</p>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="show-reviews" checked>
                                </div>
                            </div>
                            
                            <div class="notification-item">
                                <div class="notification-details">
                                    <h6>استفاده از داده‌ها برای پیشنهادات شخصی</h6>
                                    <p>استفاده از تاریخچه خرید و علاقه‌مندی‌ها برای پیشنهاد محصولات مرتبط</p>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="personalized-recommendations" checked>
                                </div>
                            </div>
                            
                            <div class="notification-item">
                                <div class="notification-details">
                                    <h6>ذخیره اطلاعات پرداخت</h6>
                                    <p>ذخیره اطلاعات کارت بانکی برای پرداخت‌های آسان‌تر (با رمزنگاری)</p>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="save-payment-info">
                                </div>
                            </div>
                            
                            <div class="mt-5 mb-4">
                                <h5 class="mb-3">دریافت اطلاعات کاربری</h5>
                                <p>شما می‌توانید یک نسخه از تمام اطلاعات ذخیره شده خود را دریافت کنید.</p>
                                <button class="btn btn-outline-dark">دریافت نسخه JSON</button>
                            </div>
                            
                            <div class="mt-5">
                                <h5 class="mb-3 text-danger">حذف حساب کاربری</h5>
                                <p>با حذف حساب کاربری، تمام اطلاعات شما از سیستم حذف خواهد شد و این عمل غیرقابل بازگشت است.</p>
                                <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteAccountModal">حذف حساب کاربری</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- مودال حذف حساب کاربری -->
    <div class="modal fade" id="deleteAccountModal" tabindex="-1" aria-labelledby="deleteAccountModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteAccountModalLabel">تایید حذف حساب کاربری</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>آیا از حذف حساب کاربری خود اطمینان دارید؟</p>
                    <p class="text-danger">توجه: این عمل غیرقابل بازگشت است و تمام اطلاعات شما از سیستم حذف خواهد شد.</p>
                    <div class="mb-3">
                        <label for="delete-confirm-password" class="form-label">برای تایید، رمز عبور خود را وارد کنید:</label>
                        <input type="password" class="form-control" id="delete-confirm-password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">انصراف</button>
                    <button type="button" class="btn btn-danger">حذف حساب کاربری</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- فوتر -->
    <footer class="footer text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <h5 class="mb-3">دسترسی سریع</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="index.php" class="text-white text-decoration-none">صفحه اصلی</a></li>
                        <li class="mb-2"><a href="products.php" class="text-white text-decoration-none">محصولات</a></li>
                        <li class="mb-2"><a href="about-us.php" class="text-white text-decoration-none">درباره ما</a></li>
                        <li class="mb-2"><a href="contact-us.php" class="text-white text-decoration-none">تماس با ما</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5 class="mb-3">خدمات مشتریان</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">راهنمای خرید</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">شیوه‌های پرداخت</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">شیوه‌های ارسال</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">پیگیری سفارش</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5 class="mb-3">ارتباط با ما</h5>
                    <p class="mb-2">تهران، خیابان ولیعصر، پلاک ۱۲۳</p>
                    <p class="mb-2">تلفن: ۸۸۷۷۶۶۵۵-۰۲۱</p>
                    <p class="mb-2">ایمیل: info@nextgen.ir</p>
                    <div class="social-icons mt-3">
                        <a href="#" class="text-white me-2"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white me-2"><i class="bi bi-telegram"></i></a>
                        <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <h5 class="mb-3">خبرنامه</h5>
                    <p>برای اطلاع از آخرین محصولات و تخفیف‌ها در خبرنامه ما عضو شوید.</p>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="ایمیل خود را وارد کنید...">
                        <button class="btn btn-light" type="button">عضویت</button>
                    </div>
                </div>
            </div>
            <hr class="border-secondary">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                <p class="mb-3 mb-md-0">© ۱۴۰۲ - تمامی حقوق برای فروشگاه آنلاین نکستژن محفوظ است.</p>
                <div class="payment-methods">
                    <i class="bi bi-credit-card mx-1"></i>
                    <i class="bi bi-wallet2 mx-1"></i>
                    <i class="bi bi-bank mx-1"></i>
                </div>
            </div>
        </div>
    </footer>

    <!-- اسکریپت‌های Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 