<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جزئیات محصول</title>
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
            <div class="row align-items-center">
                <div class="col-auto">
                    <button class="btn btn-light">
                        <i class="bi bi-list"></i>
                    </button>
                </div>
                <div class="col text-center">
                    <h5 class="mb-0">نکستژن</h5>
                </div>
                <div class="col-auto">
                    <div class="d-flex">
                        <a href="#" class="text-dark me-3 d-none d-md-block">درباره ما</a>
                        <a href="#" class="text-dark me-3 d-none d-md-block">سوالات متداول</a>
                        <a href="#" class="text-dark">
                            <i class="bi bi-bag"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container mt-3">
        <div class="row g-3">
            <div class="col-12">
                <div class="d-flex align-items-center search-and-categories">
                    <div class="input-group me-md-2">
                        <input type="text" class="form-control" placeholder="جستجو">
                        <button class="btn btn-outline-secondary" type="button">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-outline-secondary">دسته‌بندی‌ها</button>
                        <button class="btn btn-outline-secondary">محصول جدید</button>
                        <button class="btn btn-outline-secondary">مردانه</button>
                        <button class="btn btn-outline-secondary">زنانه</button>
                        <button class="btn btn-outline-secondary">بچگانه</button>
                        <button class="btn btn-outline-secondary">برندها</button>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">خانه</a></li>
                        <li class="breadcrumb-item active" aria-current="page">جزئیات محصول</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="هودی" class="img-fluid rounded">
                    <div class="d-flex mt-2 justify-content-center justify-content-md-start">
                        <div class="product-thumbnail me-2">
                            <img src="https://images.unsplash.com/photo-1620799140188-3b2a02fd9a77?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" alt="تصویر کوچک" class="img-fluid">
                        </div>
                        <div class="product-thumbnail me-2">
                            <img src="https://images.unsplash.com/photo-1620799140188-3b2a02fd9a77?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" alt="تصویر کوچک" class="img-fluid">
                        </div>
                        <div class="product-thumbnail">
                            <img src="https://images.unsplash.com/photo-1620799140188-3b2a02fd9a77?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" alt="تصویر کوچک" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="ps-md-4 product-details-container">
                    <div class="mb-2">مد مردانه</div>
                    <h2 class="mb-3">هودی راحت</h2>
                    <div class="fs-4 mb-4">24.99 تومان</div>

                    <div class="d-flex align-items-center mb-3 justify-content-center justify-content-md-start">
                        <i class="bi bi-clock me-2"></i>
                        <span>سفارش در 00:30:29 برای دریافت فردا</span>
                    </div>

                    <div class="mb-4">
                        <div class="mb-2">انتخاب سایز</div>
                        <div class="d-flex size-selection">
                            <div class="size-btn active">S</div>
                            <div class="size-btn">M</div>
                            <div class="size-btn">L</div>
                            <div class="size-btn">XL</div>
                            <div class="size-btn">XXL</div>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <button class="btn btn-dark flex-grow-1 py-2">افزودن به سبد خرید</button>
                        <button class="btn btn-outline-dark ms-2">
                            <i class="bi bi-heart"></i>
                        </button>
                    </div>

                    <div class="accordion" id="productAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDescription">
                                    توضیحات و فیت
                                </button>
                            </h2>
                            <div id="collapseDescription" class="accordion-collapse collapse show" data-bs-parent="#productAccordion">
                                <div class="accordion-body">
                                    <p>هودی راحت با پارچه نخی و وزن متوسط، با طراحی گشاد اما نه بیش از حد بزرگ. جنس جرسی نرم، کلاه آویزان، شانه‌های افتاده، آستین‌های بلند و جیب کانگورویی. لبه‌های کشدار در مچ و پایین. بافت نرم داخلی.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseShipping">
                                    ارسال
                                </button>
                            </h2>
                            <div id="collapseShipping" class="accordion-collapse collapse" data-bs-parent="#productAccordion">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div class="fw-bold mb-2">تخفیف</div>
                                                <div>۵۰٪ تخفیف</div>
                                            </div>
                                            <div>
                                                <div class="fw-bold mb-2">زمان تحویل</div>
                                                <div>۳-۴ روز کاری</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div class="fw-bold mb-2">بسته‌بندی</div>
                                                <div>بسته معمولی</div>
                                            </div>
                                            <div>
                                                <div class="fw-bold mb-2">زمان تخمینی</div>
                                                <div>۱۰-۱۲ مهر ۱۴۰۳</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <section class="my-5">
            <h3 class="mb-4 text-center text-md-start">امتیاز و نظرات</h3>
            <div class="row">
                <div class="col-md-4 text-center mb-4">
                    <h1 class="display-1 fw-bold">۴,۵</h1>
                    <div>از ۵</div>
                    <div class="text-muted">(۵۰ نظر)</div>
                </div>
                <div class="col-md-8">
                    <div class="mb-3">
                        <div class="d-flex align-items-center mb-1">
                            <span class="me-2">۵</span>
                            <div class="rating-bar flex-grow-1">
                                <div class="rating-fill" style="width: 75%"></div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-1">
                            <span class="me-2">۴</span>
                            <div class="rating-bar flex-grow-1">
                                <div class="rating-fill" style="width: 15%"></div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-1">
                            <span class="me-2">۳</span>
                            <div class="rating-bar flex-grow-1">
                                <div class="rating-fill" style="width: 5%"></div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-1">
                            <span class="me-2">۲</span>
                            <div class="rating-bar flex-grow-1">
                                <div class="rating-fill" style="width: 3%"></div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-1">
                            <span class="me-2">۱</span>
                            <div class="rating-bar flex-grow-1">
                                <div class="rating-fill" style="width: 2%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex flex-column flex-md-row justify-content-between mb-2">
                                <div>
                                    <h5 class="card-title mb-0">علی مثیو</h5>
                                    <div class="text-warning mb-2">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                                <div class="text-muted mb-2 mb-md-0">۱۳ مهر ۱۴۰۳</div>
                            </div>
                            <p class="card-text">«تعهد نکستژن به پایداری و اخلاق کاری با مصرف‌کنندگان امروزی هماهنگی دارد و این برند را به انتخابی مسئول در دنیای مد تبدیل می‌کند.»</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="my-5">
            <h3 class="mb-4 text-center">محصولات مشابه</h3>
            <div class="row">
                <div class="col-6 col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1576566588028-4147f3842f27?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=300&q=80" class="card-img-top similar-product-img" alt="پولوشرت">
                        <div class="card-body">
                            <h5 class="card-title">پولوشرت با تزئینات متضاد</h5>
                            <div class="text-warning mb-2">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <span class="ms-1">۴.۰/۵</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="fw-bold">۲۱۲ تومان</span>
                                <small class="text-decoration-line-through ms-2">۳۰۲ تومان</small>
                                <span class="badge bg-danger ms-2">۳۰٪-</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=300&q=80" class="card-img-top similar-product-img" alt="تی‌شرت">
                        <div class="card-body">
                            <h5 class="card-title">تی‌شرت گرادینت</h5>
                            <div class="text-warning mb-2">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span class="ms-1">۳.۵/۵</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="fw-bold">۱۴۶ تومان</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1586363104862-3a5e2ab60d99?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=300&q=80" class="card-img-top similar-product-img" alt="پولوشرت">
                        <div class="card-body">
                            <h5 class="card-title">پولوشرت با جزئیات برجسته</h5>
                            <div class="text-warning mb-2">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span class="ms-1">۴.۵/۵</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="fw-bold">۱۸۰ تومان</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=300&q=80" class="card-img-top similar-product-img" alt="ژاکت">
                        <div class="card-body">
                            <h5 class="card-title">ژاکت راه‌راه</h5>
                            <div class="text-warning mb-2">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <span class="ms-1">۵.۰/۵</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="fw-bold">۱۲۰ تومان</span>
                                <small class="text-decoration-line-through ms-2">۱۸۰ تومان</small>
                                <span class="badge bg-danger ms-2">۳۰٪-</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer class="bg-light py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3 mb-4">
                    <h5 class="mb-3">نکستژن</h5>
                    <p class="text-muted">ما لباس‌هایی داریم که با سبک شما مطابقت دارند و به آن‌ها افتخار می‌کنیم. از زنان تا مردان.</p>
                    <div class="d-flex">
                        <a href="#" class="text-dark me-3"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-dark me-3"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-dark me-3"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-dark"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-lg-3 mb-4">
                    <h5 class="mb-3">شرکت</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">درباره ما</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">ویژگی‌ها</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">کارها</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">مشاغل</a></li>
                    </ul>
                </div>
                <div class="col-6 col-sm-6 col-lg-3 mb-4">
                    <h5 class="mb-3">راهنما</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">پشتیبانی مشتری</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">جزئیات تحویل</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">شرایط و قوانین</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">حریم خصوصی</a></li>
                    </ul>
                </div>
                <div class="col-6 col-sm-6 col-lg-3 mb-4">
                    <h5 class="mb-3">سوالات متداول</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">حساب کاربری</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">مدیریت تحویل</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">سفارشات</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">پرداخت‌ها</a></li>
                    </ul>
                </div>
            </div>

            <hr>

            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <small class="text-muted">نکستژن © 2023. تمامی حقوق محفوظ است.</small>
                </div>
                <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/visa/visa-original.svg" alt="Visa" class="me-2 mb-2" width="40">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mastercard/mastercard-original.svg" alt="MasterCard" class="me-2 mb-2" width="40">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/paypal/paypal-original.svg" alt="PayPal" class="me-2 mb-2" width="40">
                    <img src="https://cdn.iconscout.com/icon/free/png-256/free-apple-pay-4066755-3363356.png" alt="ApplePay" class="me-2 mb-2" width="40">
                    <img src="https://cdn.iconscout.com/icon/free/png-256/free-google-pay-2038779-1721670.png" alt="GooglePay" class="mb-2" width="40">
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 