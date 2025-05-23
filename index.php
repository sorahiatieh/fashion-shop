<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه آنلاین نکستژن - صفحه اصلی</title>
    <!-- Bootstrap 5 RTL CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">
    <!-- Vazir Font -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v30.1.0/dist/font-face.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- نوار تخفیف بالای سایت -->
    <div class="bg-dark text-white text-center py-2">
        <div class="container">
            <p class="m-0">با عضویت در خبرنامه، 10٪ تخفیف اولین خرید را بگیرید!</p>
        </div>
    </div>

    <!-- هدر و منو -->
    <header class="py-3 border-bottom sticky-top bg-white">
        <div class="container">
            <div class="row align-items-center">
                <!-- لوگو در موبایل -->
                <div class="col-6 d-flex d-lg-none">
                    <a href="index.php" class="navbar-brand">نکستژن</a>
                </div>
                
                <!-- آیکون‌های راست موبایل -->
                <div class="col-6 d-flex justify-content-end d-lg-none">
                    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
                        <i class="bi bi-list fs-4"></i>
                    </button>
                </div>
                
                <!-- منوی دسکتاپ -->
                <div class="col-lg-8 d-none d-lg-block">
                    <div class="d-flex align-items-center">
                        <a href="index.php" class="navbar-brand me-4">نکستژن</a>
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link">زنانه</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">مردانه</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">بچگانه</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">جدیدترین‌ها</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">تخفیف‌ها</a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- آیکون‌های راست دسکتاپ -->
                <div class="col-lg-4 d-none d-lg-flex justify-content-end">
                    <div class="d-flex align-items-center">
                        <div class="position-relative me-3">
                            <a href="#" class="btn">
                                <i class="bi bi-search fs-5"></i>
                            </a>
                        </div>
                        <div class="position-relative me-3">
                            <a href="#" class="btn">
                                <i class="bi bi-person fs-5"></i>
                            </a>
                        </div>
                        <div class="position-relative">
                            <a href="#" class="btn">
                                <i class="bi bi-bag fs-5"></i>
                                <span class="position-absolute top-0 end-0 translate-middle badge rounded-pill bg-danger">
                                    2
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <!-- منوی موبایل -->
    <div class="offcanvas offcanvas-start" id="mobileMenu" tabindex="-1">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title">منو</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link py-3 border-bottom">زنانه</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link py-3 border-bottom">مردانه</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link py-3 border-bottom">بچگانه</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link py-3 border-bottom">جدیدترین‌ها</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link py-3 border-bottom">تخفیف‌ها</a>
                </li>
            </ul>
            
            <div class="mt-4">
                <div class="d-flex justify-content-between mb-3">
                    <a href="#" class="btn btn-outline-dark w-100 me-2">
                        <i class="bi bi-person"></i>
                        حساب کاربری
                    </a>
                    <a href="#" class="btn btn-outline-dark w-100">
                        <i class="bi bi-bag"></i>
                        سبد خرید
                    </a>
                </div>
                
                <div class="mt-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="جستجو...">
                        <button class="btn btn-outline-dark">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- اسلایدر اصلی -->
    <div class="swiper hero-slider mb-5">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('assets/images/cover/3.jpg');">
                <div class="slide-content">
                    <h1 class="mb-3">بهار ۱۴۰۴ با استایل جدید!</h1>
                    <p class="mb-4">مجموعه جدید بهاره با طراحی منحصر به فرد و پارچه‌های با کیفیت</p>
                    <a href="#" class="btn btn-dark px-4 py-2">مشاهده کالکشن</a>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url('assets/images/cover/1.jpg');">
                <div class="slide-content">
                    <h1 class="mb-3">تخفیف‌های ویژه زمستانه</h1>
                    <p class="mb-4">تا ۵۰٪ تخفیف برای انواع لباس‌های زمستانی</p>
                    <a href="#" class="btn btn-danger px-4 py-2">خرید با تخفیف</a>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url('assets/images/cover/2.jpg');">
                <div class="slide-content">
                    <h1 class="mb-3">استایل منحصر به فرد</h1>
                    <p class="mb-4">خاص‌ترین طرح‌ها برای شخصیت متفاوت شما</p>
                    <a href="#" class="btn btn-dark px-4 py-2">مشاهده محصولات</a>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    
    <!-- دسته‌بندی‌های پرطرفدار -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2 class="mb-3">دسته‌بندی‌های پرطرفدار</h2>
                    <p class="text-muted">محبوب‌ترین دسته‌بندی‌های مورد علاقه مشتریان ما</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-3">
                    <div class="category-item">
                        <div class="category-icon">
                            <i class="bi bi-handbag"></i>
                        </div>
                        <h5>کیف و کفش</h5>
                        <a href="#" class="btn btn-sm btn-outline-dark">مشاهده</a>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="category-item">
                        <div class="category-icon">
                            <i class="bi bi-sunglasses"></i>
                        </div>
                        <h5>اکسسوری</h5>
                        <a href="#" class="btn btn-sm btn-outline-dark">مشاهده</a>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="category-item">
                        <div class="category-icon">
                            <i class="bi bi-suit-heart"></i>
                        </div>
                        <h5>لباس مجلسی</h5>
                        <a href="#" class="btn btn-sm btn-outline-dark">مشاهده</a>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="category-item">
                        <div class="category-icon">
                            <i class="bi bi-lightning-charge"></i>
                        </div>
                        <h5>ورزشی</h5>
                        <a href="#" class="btn btn-sm btn-outline-dark">مشاهده</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- محصولات پرفروش -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2 class="mb-3">محصولات پرفروش</h2>
                    <p class="text-muted">پرفروش‌ترین محصولات ما که مشتریان عاشق آن‌ها هستند</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-6 col-md-3">
                    <div class="card product-card">
                        <div class="position-relative">
                            <span class="product-badge badge bg-success">جدید</span>
                            <button class="wishlist-btn">
                                <i class="bi bi-heart"></i>
                            </button>
                            <img src="assets/images/hoodi/3.jpg" class="card-img-top product-img" alt="هودی">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title mb-1">هودی راحت</h5>
                            <p class="text-muted small">مد مردانه</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <strong>249,000 تومان</strong>
                                <div>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <span>4.5</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-top-0">
                            <a href="pages/product-details.php" class="btn btn-outline-dark w-100">مشاهده محصول</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card product-card">
                        <div class="position-relative">
                            <button class="wishlist-btn">
                                <i class="bi bi-heart"></i>
                            </button>
                            <img src="assets/images/poloshirt/3.jpg" class="card-img-top product-img" alt="پولوشرت">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title mb-1">پولوشرت تزئینی</h5>
                            <p class="text-muted small">مد مردانه</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <strong>210,000 تومان</strong>
                                <div>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <span>4.0</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-top-0">
                            <a href="#" class="btn btn-outline-dark w-100">مشاهده محصول</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card product-card">
                        <div class="position-relative">
                            <span class="product-badge badge bg-danger">30٪ تخفیف</span>
                            <button class="wishlist-btn">
                                <i class="bi bi-heart"></i>
                            </button>
                            <img src="assets/images/zhaket/3.jpg" class="card-img-top product-img" alt="ژاکت">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title mb-1">ژاکت راه‌راه</h5>
                            <p class="text-muted small">مد مردانه</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <strong>126,000 تومان</strong>
                                    <small class="text-decoration-line-through text-muted me-2">180,000</small>
                                </div>
                                <div>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <span>5.0</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-top-0">
                            <a href="#" class="btn btn-outline-dark w-100">مشاهده محصول</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card product-card">
                        <div class="position-relative">
                            <button class="wishlist-btn">
                                <i class="bi bi-heart"></i>
                            </button>
                            <img src="assets/images/tshirt/3.jpg" class="card-img-top product-img" alt="تی‌شرت">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title mb-1">تی‌شرت گرادینت</h5>
                            <p class="text-muted small">مد مردانه</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <strong>149,000 تومان</strong>
                                <div>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <span>3.5</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-top-0">
                            <a href="#" class="btn btn-outline-dark w-100">مشاهده محصول</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-dark px-4">مشاهده همه محصولات</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- بخش تخفیف‌ها -->
    <section class="py-5 text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="mb-3">پیشنهادهای ویژه</h2>
                    <p class="text-muted mb-4">این تخفیف‌ها به زودی به پایان می‌رسند. همین الان خرید کنید!</p>
                    
                    <div class="countdown-timer">
                        <div class="countdown-box">
                            <div class="number">۲</div>
                            <div class="label">روز</div>
                        </div>
                        <div class="countdown-box">
                            <div class="number">۱۳</div>
                            <div class="label">ساعت</div>
                        </div>
                        <div class="countdown-box">
                            <div class="number">۴۵</div>
                            <div class="label">دقیقه</div>
                        </div>
                        <div class="countdown-box">
                            <div class="number">۱۸</div>
                            <div class="label">ثانیه</div>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <a href="#" class="btn btn-danger px-4 py-2">مشاهده محصولات با تخفیف</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- بنر تبلیغاتی -->
    <section class="py-0">
        <div class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="p-5 h-100 d-flex flex-column justify-content-center" style="background-color: #f0f0f0;">
                        <h2 class="mb-3">مجموعه تابستانه</h2>
                        <p class="mb-4">طراحی‌های جدید با رنگ‌های شاد برای تابستان</p>
                        <div>
                            <a href="#" class="btn btn-outline-dark px-4">مشاهده کالکشن</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="assets/images/cover/4.jpg" class="img-fluid" alt="مجموعه تابستانه">
                </div>
            </div>
        </div>
    </section>
    
    <!-- مزایای خرید از ما -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2 class="mb-3">چرا نکستژن؟</h2>
                    <p class="text-muted">مزایای خرید از فروشگاه آنلاین نکستژن</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="benefits-item">
                        <div class="benefits-icon">
                            <i class="bi bi-truck"></i>
                        </div>
                        <h5>ارسال رایگان</h5>
                        <p class="small text-muted">برای سفارش‌های بالای 500 هزار تومان</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="benefits-item">
                        <div class="benefits-icon">
                            <i class="bi bi-arrow-repeat"></i>
                        </div>
                        <h5>تعویض آسان</h5>
                        <p class="small text-muted">تا 7 روز فرصت تعویض محصول</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="benefits-item">
                        <div class="benefits-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h5>ضمانت اصالت</h5>
                        <p class="small text-muted">تضمین اصالت تمامی محصولات</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="benefits-item">
                        <div class="benefits-icon">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h5>پشتیبانی 24/7</h5>
                        <p class="small text-muted">پاسخگوی شما در تمامی ساعات</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- نظرات مشتریان -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2 class="mb-3">نظرات مشتریان</h2>
                    <p class="text-muted">مشتریان ما چه می‌گویند؟</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3">
                                <img src="https://randomuser.me/api/portraits/women/11.jpg" alt="مشتری" class="rounded-circle" width="50" height="50">
                            </div>
                            <div>
                                <h5 class="mb-0">سارا محمدی</h5>
                                <div class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">«کیفیت لباس‌های نکستژن فوق‌العاده است! من عاشق این برند هستم و به همه توصیه می‌کنم.»</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="مشتری" class="rounded-circle" width="50" height="50">
                            </div>
                            <div>
                                <h5 class="mb-0">علی کریمی</h5>
                                <div class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">«سرعت ارسال عالی و بسته‌بندی مرتب. از خریدم کاملاً راضی هستم.»</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="مشتری" class="rounded-circle" width="50" height="50">
                            </div>
                            <div>
                                <h5 class="mb-0">مریم رضایی</h5>
                                <div class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">«تنوع محصولات زیاد و قیمت‌ها مناسب است. پشتیبانی هم خیلی سریع پاسخگو بود.»</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- عضویت در خبرنامه -->
    <section class="newsletter-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="mb-3">عضویت در خبرنامه</h2>
                    <p class="mb-4">با عضویت در خبرنامه از آخرین محصولات و تخفیف‌های ویژه ما مطلع شوید</p>
                    <form class="mb-3">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="آدرس ایمیل خود را وارد کنید">
                            <button class="btn btn-light" type="submit">عضویت</button>
                        </div>
                    </form>
                    <p class="small text-light-emphasis mb-0">با عضویت در خبرنامه، 10٪ تخفیف برای اولین خرید خود دریافت کنید.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- فوتر -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-3">نکستژن</h5>
                    <p class="text-muted">ما لباس‌هایی داریم که با سبک شما مطابقت دارند و به آن‌ها افتخار می‌کنیم. از زنان تا مردان.</p>
                    <div class="social-links">
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-3">دسترسی سریع</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">صفحه اصلی</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">محصولات</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">درباره ما</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">تماس با ما</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">وبلاگ</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-3">راهنما</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">راهنمای خرید</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">نحوه ارسال</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">سوالات متداول</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">شرایط و قوانین</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">حریم خصوصی</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-3">تماس با ما</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-geo-alt me-2"></i>تهران، خیابان ولیعصر، پلاک 123</li>
                        <li class="mb-2"><i class="bi bi-telephone me-2"></i>021-12345678</li>
                        <li class="mb-2"><i class="bi bi-envelope me-2"></i>info@nextgen.com</li>
                    </ul>
                    <div class="mt-3">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/visa/visa-original.svg" alt="Visa" class="me-2" width="40">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mastercard/mastercard-original.svg" alt="MasterCard" class="me-2" width="40">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/paypal/paypal-original.svg" alt="PayPal" class="me-2" width="40">
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="small text-muted mb-0">© 2023 نکستژن. تمامی حقوق محفوظ است.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="small text-muted mb-0">طراحی و توسعه توسط <a href="#" class="text-decoration-none">تیم نکستژن</a></p>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- اسکریپت‌ها -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html> 