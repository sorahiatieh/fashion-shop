<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه آنلاین نکستژن - نظرات من</title>
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
                            <a href="user-reviews.php" class="user-menu-link active">
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
                            <a href="user-settings.php" class="user-menu-link">
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
                        <h3 class="mb-0">نظرات من</h3>
                        <span>4 نظر</span>
                    </div>
                    
                    <!-- جستجو و فیلتر -->
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <div class="flex-grow-1">
                            <input type="text" class="form-control" placeholder="جستجو در نظرات...">
                        </div>
                        <select class="form-select" style="width: auto;">
                            <option selected>همه نظرات</option>
                            <option>منتشر شده</option>
                            <option>در انتظار تایید</option>
                            <option>رد شده</option>
                        </select>
                    </div>
                    
                    <!-- لیست نظرات -->
                    <div class="reviews-list">
                        <!-- نظر ۱ -->
                        <div class="review-item">
                            <div class="review-header">
                                <div class="review-product">
                                    <img src="https://via.placeholder.com/60x60" alt="محصول" class="review-product-img">
                                    <div>
                                        <h6 class="review-product-title">پیراهن مردانه طرح چهارخانه آستین بلند</h6>
                                        <div class="review-date">تاریخ ثبت: 1402/08/25</div>
                                    </div>
                                </div>
                                <span class="review-status status-published">منتشر شده</span>
                            </div>
                            <div class="review-body">
                                <div class="review-rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                                <p class="review-text">
                                    کیفیت پارچه خیلی خوب بود و دوخت تمیزی داشت. سایز کاملا استاندارد بود و فیت تن من شد. رنگ هم دقیقا مثل تصویر بود. از خرید خودم راضی هستم و پیشنهاد می‌کنم.
                                </p>
                                <div class="review-actions">
                                    <a href="product-details.php" class="btn btn-sm btn-outline-dark">مشاهده محصول</a>
                                    <button class="btn btn-sm btn-outline-secondary">ویرایش نظر</button>
                                    <button class="btn btn-sm btn-outline-danger">حذف</button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- نظر ۲ -->
                        <div class="review-item">
                            <div class="review-header">
                                <div class="review-product">
                                    <img src="https://via.placeholder.com/60x60" alt="محصول" class="review-product-img">
                                    <div>
                                        <h6 class="review-product-title">کفش ورزشی مردانه نایکی مدل Air Max</h6>
                                        <div class="review-date">تاریخ ثبت: 1402/07/12</div>
                                    </div>
                                </div>
                                <span class="review-status status-pending">در انتظار تایید</span>
                            </div>
                            <div class="review-body">
                                <div class="review-rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p class="review-text">
                                    کفش بسیار باکیفیتی هست. راحت و سبک هست و برای پیاده‌روی و دویدن عالیه. رنگبندی جذابی داره و طراحی زیبایی داره. به نظرم ارزش خرید داره.
                                </p>
                                <div class="review-actions">
                                    <a href="product-details.php" class="btn btn-sm btn-outline-dark">مشاهده محصول</a>
                                    <button class="btn btn-sm btn-outline-secondary">ویرایش نظر</button>
                                    <button class="btn btn-sm btn-outline-danger">حذف</button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- نظر ۳ -->
                        <div class="review-item">
                            <div class="review-header">
                                <div class="review-product">
                                    <img src="https://via.placeholder.com/60x60" alt="محصول" class="review-product-img">
                                    <div>
                                        <h6 class="review-product-title">تیشرت مردانه یقه گرد طرح ساده</h6>
                                        <div class="review-date">تاریخ ثبت: 1402/05/18</div>
                                    </div>
                                </div>
                                <span class="review-status status-published">منتشر شده</span>
                            </div>
                            <div class="review-body">
                                <div class="review-rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                                <p class="review-text">
                                    کیفیت نسبتا خوبی داره. بعد از چندبار شستن کمی تغییر رنگ داد اما بافت و دوخت خوبی داشت. قیمت مناسبی هم داشت.
                                </p>
                                <div class="review-actions">
                                    <a href="product-details.php" class="btn btn-sm btn-outline-dark">مشاهده محصول</a>
                                    <button class="btn btn-sm btn-outline-secondary">ویرایش نظر</button>
                                    <button class="btn btn-sm btn-outline-danger">حذف</button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- نظر ۴ -->
                        <div class="review-item">
                            <div class="review-header">
                                <div class="review-product">
                                    <img src="https://via.placeholder.com/60x60" alt="محصول" class="review-product-img">
                                    <div>
                                        <h6 class="review-product-title">شلوار جین زنانه مدل مام استایل</h6>
                                        <div class="review-date">تاریخ ثبت: 1402/04/07</div>
                                    </div>
                                </div>
                                <span class="review-status status-rejected">رد شده</span>
                            </div>
                            <div class="review-body">
                                <div class="review-rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                                <p class="review-text">
                                    کیفیت اصلا خوب نبود. سایز اشتباه بود و کیفیت دوخت بسیار پایین بود. اصلا پیشنهاد نمی‌کنم.
                                </p>
                                <p class="text-danger small">دلیل رد: عدم رعایت قوانین انتشار نظرات</p>
                                <div class="review-actions">
                                    <a href="product-details.php" class="btn btn-sm btn-outline-dark">مشاهده محصول</a>
                                    <button class="btn btn-sm btn-outline-secondary">ویرایش نظر</button>
                                    <button class="btn btn-sm btn-outline-danger">حذف</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- صفحه‌بندی -->
                    <nav class="d-flex justify-content-center mt-5">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">قبلی</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item disabled">
                                <a class="page-link" href="#">بعدی</a>
                            </li>
                        </ul>
                    </nav>
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