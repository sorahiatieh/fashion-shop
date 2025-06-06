<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه آنلاین نکستژن - لیست محصولات</title>
    <!-- Bootstrap 5 RTL CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">
    <!-- Vazir Font -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v30.1.0/dist/font-face.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Nouislider CSS for price range slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.7.1/nouislider.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
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
                    <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#filterCollapse" aria-expanded="false">
                        <i class="bi bi-funnel fs-5"></i>
                    </button>
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
    
    <!-- محتوای اصلی صفحه -->
    <main class="py-4">
        <div class="container">
            <!-- عنوان صفحه و مسیر -->
            <div class="row mb-4">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">خانه</a></li>
                            <li class="breadcrumb-item"><a href="#" class="text-decoration-none">زنانه</a></li>
                            <li class="breadcrumb-item active" aria-current="page">مانتو</li>
                        </ol>
                    </nav>
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div>
                            <h1 class="h2 mb-2">مانتو زنانه</h1>
                            <p class="text-muted">بیش از ۲۰۰ مدل متنوع برای هر سلیقه‌ای</p>
                        </div>
                        <div class="d-none d-md-flex align-items-center">
                            <span class="text-muted me-2">نمایش:</span>
                            <div class="d-flex">
                                <div id="gridView" class="view-option active me-2">
                                    <i class="bi bi-grid"></i>
                                </div>
                                <div id="listView" class="view-option">
                                    <i class="bi bi-list"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- فیلترهای موبایل (قابل باز و بسته شدن) -->
            <div class="collapse d-md-none mb-4" id="filterCollapse">
                <div class="card p-3">
                    <h5 class="mb-3">فیلترها</h5>
                    <!-- فیلترهای مشابه با سایدبار -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">دسته‌بندی</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="category1-mobile">
                            <label class="form-check-label" for="category1-mobile">مانتو اسپرت</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="category2-mobile">
                            <label class="form-check-label" for="category2-mobile">مانتو مجلسی</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="category3-mobile">
                            <label class="form-check-label" for="category3-mobile">مانتو تابستانی</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="category4-mobile">
                            <label class="form-check-label" for="category4-mobile">مانتو بلند</label>
                        </div>
                    </div>
                    
                    <!-- فیلتر سایز -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">سایز</label>
                        <div class="d-flex flex-wrap">
                            <div class="form-check me-3">
                                <input class="form-check-input" type="checkbox" id="size-xs-mobile">
                                <label class="form-check-label" for="size-xs-mobile">XS</label>
                            </div>
                            <div class="form-check me-3">
                                <input class="form-check-input" type="checkbox" id="size-s-mobile">
                                <label class="form-check-label" for="size-s-mobile">S</label>
                            </div>
                            <div class="form-check me-3">
                                <input class="form-check-input" type="checkbox" id="size-m-mobile">
                                <label class="form-check-label" for="size-m-mobile">M</label>
                            </div>
                            <div class="form-check me-3">
                                <input class="form-check-input" type="checkbox" id="size-l-mobile">
                                <label class="form-check-label" for="size-l-mobile">L</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="size-xl-mobile">
                                <label class="form-check-label" for="size-xl-mobile">XL</label>
                            </div>
                        </div>
                    </div>
                    
                    <!-- فیلتر رنگ -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">رنگ</label>
                        <div>
                            <span class="color-option" style="background-color: #000000;" title="مشکی"></span>
                            <span class="color-option" style="background-color: #FFFFFF;" title="سفید"></span>
                            <span class="color-option" style="background-color: #0074D9;" title="آبی"></span>
                            <span class="color-option" style="background-color: #FF4136;" title="قرمز"></span>
                            <span class="color-option" style="background-color: #2ECC40;" title="سبز"></span>
                            <span class="color-option" style="background-color: #FFDC00;" title="زرد"></span>
                            <span class="color-option" style="background-color: #AAAAAA;" title="خاکستری"></span>
                            <span class="color-option" style="background-color: #F08080;" title="صورتی"></span>
                        </div>
                    </div>
                    
                    <!-- فیلتر محدوده قیمت -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">محدوده قیمت</label>
                        <div id="priceSliderMobile" class="mt-2 mb-2"></div>
                        <div class="d-flex justify-content-between">
                            <span class="price-min">100,000 تومان</span>
                            <span class="price-max">2,000,000 تومان</span>
                        </div>
                    </div>
                    
                    <button class="btn btn-dark mt-2">اعمال فیلترها</button>
                </div>
            </div>
            
            <div class="row">
                <!-- سایدبار فیلترها (دسکتاپ و تبلت) -->
                <div class="col-md-3 d-none d-md-block">
                    <div class="filter-sidebar">
                        <div class="card filter-card mb-4">
                            <div class="card-header">مرتب‌سازی</div>
                            <div class="card-body">
                                <select class="form-select">
                                    <option selected>پیش‌فرض</option>
                                    <option>جدیدترین</option>
                                    <option>پرفروش‌ترین</option>
                                    <option>ارزان‌ترین</option>
                                    <option>گران‌ترین</option>
                                    <option>بیشترین تخفیف</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="card filter-card">
                            <div class="card-header">دسته‌بندی</div>
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="category1">
                                    <label class="form-check-label" for="category1">مانتو اسپرت</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="category2">
                                    <label class="form-check-label" for="category2">مانتو مجلسی</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="category3">
                                    <label class="form-check-label" for="category3">مانتو تابستانی</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="category4">
                                    <label class="form-check-label" for="category4">مانتو بلند</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card filter-card mt-4">
                            <div class="card-header">سایز</div>
                            <div class="card-body">
                                <div class="d-flex flex-wrap">
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="checkbox" id="size-xs">
                                        <label class="form-check-label" for="size-xs">XS</label>
                                    </div>
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="checkbox" id="size-s">
                                        <label class="form-check-label" for="size-s">S</label>
                                    </div>
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="checkbox" id="size-m">
                                        <label class="form-check-label" for="size-m">M</label>
                                    </div>
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="checkbox" id="size-l">
                                        <label class="form-check-label" for="size-l">L</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="size-xl">
                                        <label class="form-check-label" for="size-xl">XL</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card filter-card mt-4">
                            <div class="card-header">رنگ</div>
                            <div class="card-body">
                                <div>
                                    <span class="color-option" style="background-color: #000000;" title="مشکی"></span>
                                    <span class="color-option" style="background-color: #FFFFFF;" title="سفید"></span>
                                    <span class="color-option" style="background-color: #0074D9;" title="آبی"></span>
                                    <span class="color-option" style="background-color: #FF4136;" title="قرمز"></span>
                                    <span class="color-option" style="background-color: #2ECC40;" title="سبز"></span>
                                    <span class="color-option" style="background-color: #FFDC00;" title="زرد"></span>
                                    <span class="color-option" style="background-color: #AAAAAA;" title="خاکستری"></span>
                                    <span class="color-option" style="background-color: #F08080;" title="صورتی"></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card filter-card mt-4">
                            <div class="card-header">برند</div>
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="brand1">
                                    <label class="form-check-label" for="brand1">فیروزه</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="brand2">
                                    <label class="form-check-label" for="brand2">ماهور</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="brand3">
                                    <label class="form-check-label" for="brand3">نارین</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="brand4">
                                    <label class="form-check-label" for="brand4">آیلار</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card filter-card mt-4">
                            <div class="card-header">محدوده قیمت</div>
                            <div class="card-body">
                                <div id="priceSlider" class="mt-2 mb-2"></div>
                                <div class="d-flex justify-content-between">
                                    <span class="price-min">100,000 تومان</span>
                                    <span class="price-max">2,000,000 تومان</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card filter-card mt-4">
                            <div class="card-header">سایر فیلترها</div>
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="discount">
                                    <label class="form-check-label" for="discount">فقط کالاهای تخفیف‌دار</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="available">
                                    <label class="form-check-label" for="available">فقط کالاهای موجود</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-4">
                            <button class="btn btn-dark w-100">اعمال فیلترها</button>
                        </div>
                    </div>
                </div>
                
                <!-- بخش اصلی نمایش محصولات -->
                <div class="col-md-9">
                    <!-- نوار مرتب‌سازی (موبایل) -->
                    <div class="d-flex d-md-none mb-3 align-items-center justify-content-between">
                        <button class="btn btn-sm btn-outline-dark d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#filterCollapse" aria-expanded="false">
                            <i class="bi bi-funnel me-1"></i>
                            فیلترها
                        </button>
                        <select class="form-select form-select-sm w-auto">
                            <option selected>مرتب‌سازی</option>
                            <option>جدیدترین</option>
                            <option>پرفروش‌ترین</option>
                            <option>ارزان‌ترین</option>
                            <option>گران‌ترین</option>
                            <option>بیشترین تخفیف</option>
                        </select>
                    </div>
                    
                    <!-- نمایش محصولات -->
                    <div class="row g-3 product-grid-view" id="productContainer">
                        <!-- محصول 1 -->
                        <div class="col-6 col-lg-4">
                            <div class="card product-card">
                                <div class="position-relative">
                                    <span class="product-badge badge bg-success">جدید</span>
                                    <button class="wishlist-btn">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                    <a href="product-details.php">
                                        <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?auto=format&fit=crop&w=600&q=80" class="card-img-top product-img" alt="مانتو زنانه">
                                    </a>
                                    <button class="quickview-btn">
                                        <i class="bi bi-eye me-1"></i>
                                        مشاهده سریع
                                    </button>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-1">مانتو بلند طرح‌دار</h5>
                                    <p class="text-muted small">برند فیروزه</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <strong>620,000 تومان</strong>
                                        <div>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <span>4.2</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-white border-top-0">
                                    <a href="#" class="btn btn-outline-dark w-100">
                                        <i class="bi bi-bag-plus me-1"></i>
                                        افزودن به سبد
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- محصول 2 -->
                        <div class="col-6 col-lg-4">
                            <div class="card product-card">
                                <div class="position-relative">
                                    <span class="product-badge badge bg-danger">20٪ تخفیف</span>
                                    <button class="wishlist-btn">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                    <a href="product-details.php">
                                        <img src="https://images.unsplash.com/photo-1551803091-e20673f15770?auto=format&fit=crop&w=600&q=80" class="card-img-top product-img" alt="مانتو زنانه">
                                    </a>
                                    <button class="quickview-btn">
                                        <i class="bi bi-eye me-1"></i>
                                        مشاهده سریع
                                    </button>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-1">مانتو اسپرت کژوال</h5>
                                    <p class="text-muted small">برند ماهور</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <strong>480,000 تومان</strong>
                                            <small class="text-decoration-line-through text-muted me-2">600,000</small>
                                        </div>
                                        <div>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <span>4.5</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-white border-top-0">
                                    <a href="#" class="btn btn-outline-dark w-100">
                                        <i class="bi bi-bag-plus me-1"></i>
                                        افزودن به سبد
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- محصول 3 -->
                        <div class="col-6 col-lg-4">
                            <div class="card product-card">
                                <div class="position-relative">
                                    <button class="wishlist-btn">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                    <a href="product-details.php">
                                        <img src="https://images.unsplash.com/photo-1548624313-0fb13cd313ee?auto=format&fit=crop&w=600&q=80" class="card-img-top product-img" alt="مانتو زنانه">
                                    </a>
                                    <button class="quickview-btn">
                                        <i class="bi bi-eye me-1"></i>
                                        مشاهده سریع
                                    </button>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-1">مانتو تابستانی خنک</h5>
                                    <p class="text-muted small">برند نارین</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <strong>420,000 تومان</strong>
                                        <div>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <span>4.0</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-white border-top-0">
                                    <a href="#" class="btn btn-outline-dark w-100">
                                        <i class="bi bi-bag-plus me-1"></i>
                                        افزودن به سبد
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- محصول 4 -->
                        <div class="col-6 col-lg-4">
                            <div class="card product-card">
                                <div class="position-relative">
                                    <span class="product-badge badge bg-secondary">پرفروش</span>
                                    <button class="wishlist-btn">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                    <a href="product-details.php">
                                        <img src="https://images.unsplash.com/photo-1590159983013-d4ff5fc71c1d?auto=format&fit=crop&w=600&q=80" class="card-img-top product-img" alt="مانتو زنانه">
                                    </a>
                                    <button class="quickview-btn">
                                        <i class="bi bi-eye me-1"></i>
                                        مشاهده سریع
                                    </button>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-1">مانتو مجلسی طرح گل</h5>
                                    <p class="text-muted small">برند آیلار</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <strong>750,000 تومان</strong>
                                        <div>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <span>4.8</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-white border-top-0">
                                    <a href="#" class="btn btn-outline-dark w-100">
                                        <i class="bi bi-bag-plus me-1"></i>
                                        افزودن به سبد
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- محصول 5 -->
                        <div class="col-6 col-lg-4">
                            <div class="card product-card">
                                <div class="position-relative">
                                    <span class="product-badge badge bg-warning text-dark">محدود</span>
                                    <button class="wishlist-btn">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                    <a href="product-details.php">
                                        <img src="https://images.unsplash.com/photo-1509182469511-7f0b50bfa39e?auto=format&fit=crop&w=600&q=80" class="card-img-top product-img" alt="مانتو زنانه">
                                    </a>
                                    <button class="quickview-btn">
                                        <i class="bi bi-eye me-1"></i>
                                        مشاهده سریع
                                    </button>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-1">مانتو بهاره ساده</h5>
                                    <p class="text-muted small">برند فیروزه</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <strong>530,000 تومان</strong>
                                        <div>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <span>4.3</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-white border-top-0">
                                    <a href="#" class="btn btn-outline-dark w-100">
                                        <i class="bi bi-bag-plus me-1"></i>
                                        افزودن به سبد
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- محصول 6 -->
                        <div class="col-6 col-lg-4">
                            <div class="card product-card">
                                <div class="position-relative">
                                    <span class="product-badge badge bg-danger">30٪ تخفیف</span>
                                    <button class="wishlist-btn">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                    <a href="product-details.php">
                                        <img src="https://images.unsplash.com/photo-1525450824786-227cbef70703?auto=format&fit=crop&w=600&q=80" class="card-img-top product-img" alt="مانتو زنانه">
                                    </a>
                                    <button class="quickview-btn">
                                        <i class="bi bi-eye me-1"></i>
                                        مشاهده سریع
                                    </button>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-1">مانتو زمستانی گرم</h5>
                                    <p class="text-muted small">برند ماهور</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <strong>630,000 تومان</strong>
                                            <small class="text-decoration-line-through text-muted me-2">900,000</small>
                                        </div>
                                        <div>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <span>4.1</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-white border-top-0">
                                    <a href="#" class="btn btn-outline-dark w-100">
                                        <i class="bi bi-bag-plus me-1"></i>
                                        افزودن به سبد
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- بنر تبلیغاتی بین محصولات -->
                    <div class="row my-4">
                        <div class="col-12">
                            <div class="card bg-light border-0">
                                <div class="card-body p-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <h4>ارسال رایگان برای خرید بالای 500 هزار تومان</h4>
                                            <p class="text-muted mb-0">با خرید بیشتر از هزینه‌های ارسال صرفه‌جویی کنید</p>
                                        </div>
                                        <div class="col-md-4 text-center text-md-end mt-3 mt-md-0">
                                            <a href="#" class="btn btn-dark">مشاهده پیشنهادها</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- ادامه محصولات -->
                    <div class="row g-3 product-grid-view">
                        <!-- محصول 7 -->
                        <div class="col-6 col-lg-4">
                            <div class="card product-card">
                                <div class="position-relative">
                                    <button class="wishlist-btn">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                    <a href="product-details.php">
                                        <img src="https://images.unsplash.com/photo-1507274153689-990bd2c05614?auto=format&fit=crop&w=600&q=80" class="card-img-top product-img" alt="مانتو زنانه">
                                    </a>
                                    <button class="quickview-btn">
                                        <i class="bi bi-eye me-1"></i>
                                        مشاهده سریع
                                    </button>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-1">مانتو جلوباز راحتی</h5>
                                    <p class="text-muted small">برند نارین</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <strong>420,000 تومان</strong>
                                        <div>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <span>3.9</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-white border-top-0">
                                    <a href="#" class="btn btn-outline-dark w-100">
                                        <i class="bi bi-bag-plus me-1"></i>
                                        افزودن به سبد
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- محصول 8 -->
                        <div class="col-6 col-lg-4">
                            <div class="card product-card">
                                <div class="position-relative">
                                    <button class="wishlist-btn">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                    <a href="product-details.php">
                                        <img src="https://images.unsplash.com/photo-1485462537746-965f33f7f6a7?auto=format&fit=crop&w=600&q=80" class="card-img-top product-img" alt="مانتو زنانه">
                                    </a>
                                    <button class="quickview-btn">
                                        <i class="bi bi-eye me-1"></i>
                                        مشاهده سریع
                                    </button>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-1">مانتو کالج شیک</h5>
                                    <p class="text-muted small">برند آیلار</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <strong>490,000 تومان</strong>
                                        <div>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <span>4.6</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-white border-top-0">
                                    <a href="#" class="btn btn-outline-dark w-100">
                                        <i class="bi bi-bag-plus me-1"></i>
                                        افزودن به سبد
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- محصول 9 -->
                        <div class="col-6 col-lg-4">
                            <div class="card product-card">
                                <div class="position-relative">
                                    <span class="product-badge badge bg-info">پیشنهاد ویژه</span>
                                    <button class="wishlist-btn">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                    <a href="product-details.php">
                                        <img src="https://images.unsplash.com/photo-1539533113208-f6df8cc8b543?auto=format&fit=crop&w=600&q=80" class="card-img-top product-img" alt="مانتو زنانه">
                                    </a>
                                    <button class="quickview-btn">
                                        <i class="bi bi-eye me-1"></i>
                                        مشاهده سریع
                                    </button>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-1">مانتو آستین‌کیمونو</h5>
                                    <p class="text-muted small">برند فیروزه</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <strong>580,000 تومان</strong>
                                        <div>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <span>4.4</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-white border-top-0">
                                    <a href="#" class="btn btn-outline-dark w-100">
                                        <i class="bi bi-bag-plus me-1"></i>
                                        افزودن به سبد
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- پجینیشن -->
                    <div class="row mt-4">
                        <div class="col-12">
                            <nav aria-label="صفحه‌بندی محصولات">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">قبلی</a>
                                    </li>
                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">بعدی</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <!-- فوتر -->
    <footer class="bg-light py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-3">نکستژن</h5>
                    <p class="text-muted">ما لباس‌هایی داریم که با سبک شما مطابقت دارند و به آن‌ها افتخار می‌کنیم. از زنان تا مردان.</p>
                    <div class="d-flex mt-3">
                        <a href="#" class="me-2 text-dark"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="me-2 text-dark"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="me-2 text-dark"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-dark"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-3">دسترسی سریع</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="index.php" class="text-decoration-none text-muted">صفحه اصلی</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">محصولات</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">درباره ما</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">تماس با ما</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-3">راهنما</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">راهنمای خرید</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">شرایط بازگشت</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">سوالات متداول</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">حریم خصوصی</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-3">تماس با ما</h5>
                    <ul class="list-unstyled text-muted">
                        <li class="mb-2"><i class="bi bi-geo-alt me-2"></i>تهران، خیابان ولیعصر، پلاک 123</li>
                        <li class="mb-2"><i class="bi bi-telephone me-2"></i>021-12345678</li>
                        <li class="mb-2"><i class="bi bi-envelope me-2"></i>info@nextgen.com</li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="small text-muted mb-0">© 2023 نکستژن. تمامی حقوق محفوظ است.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/visa/visa-original.svg" alt="Visa" width="40" class="me-2">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mastercard/mastercard-original.svg" alt="MasterCard" width="40" class="me-2">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/paypal/paypal-original.svg" alt="PayPal" width="40">
                </div>
            </div>
        </div>
    </footer>
    
    <!-- اسکریپت‌ها -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.7.1/nouislider.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // راه‌اندازی اسلایدر قیمت
            const priceSlider = document.getElementById('priceSlider');
            const priceSliderMobile = document.getElementById('priceSliderMobile');
            
            // تابع ایجاد اسلایدر قیمت
            function setupPriceSlider(slider) {
                if (slider) {
                    noUiSlider.create(slider, {
                        start: [100000, 2000000],
                        connect: true,
                        direction: 'rtl',
                        range: {
                            'min': 0,
                            'max': 2500000
                        },
                        step: 50000,
                    });
                    
                    // بروزرسانی متن قیمت‌ها
                    const minPriceElement = slider.parentElement.querySelector('.price-min');
                    const maxPriceElement = slider.parentElement.querySelector('.price-max');
                    
                    slider.noUiSlider.on('update', function(values, handle) {
                        const price = parseInt(values[handle]).toLocaleString();
                        if (handle === 0) {
                            minPriceElement.textContent = price + ' تومان';
                        } else {
                            maxPriceElement.textContent = price + ' تومان';
                        }
                    });
                }
            }
            
            setupPriceSlider(priceSlider);
            setupPriceSlider(priceSliderMobile);
            
            // انتخاب رنگ‌ها
            const colorOptions = document.querySelectorAll('.color-option');
            colorOptions.forEach(option => {
                option.addEventListener('click', function() {
                    option.classList.toggle('selected');
                });
            });
            
            // تغییر نمایش محصولات (گرید/لیست)
            const gridViewBtn = document.getElementById('gridView');
            const listViewBtn = document.getElementById('listView');
            const productContainer = document.getElementById('productContainer');
            
            gridViewBtn.addEventListener('click', function() {
                gridViewBtn.classList.add('active');
                listViewBtn.classList.remove('active');
                productContainer.classList.remove('product-list-view');
                productContainer.classList.add('product-grid-view');
                
                // تغییر کلاس‌های ستون‌بندی
                const productItems = productContainer.querySelectorAll('.col-lg-4');
                productItems.forEach(item => {
                    item.classList.remove('col-12');
                    item.classList.add('col-6', 'col-lg-4');
                });
            });
            
            listViewBtn.addEventListener('click', function() {
                listViewBtn.classList.add('active');
                gridViewBtn.classList.remove('active');
                productContainer.classList.remove('product-grid-view');
                productContainer.classList.add('product-list-view');
                
                // تغییر کلاس‌های ستون‌بندی
                const productItems = productContainer.querySelectorAll('.col-6');
                productItems.forEach(item => {
                    item.classList.remove('col-6', 'col-lg-4');
                    item.classList.add('col-12');
                });
            });
        });
    </script>
</body>
</html> 