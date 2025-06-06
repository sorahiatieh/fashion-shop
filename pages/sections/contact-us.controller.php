<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه آنلاین نکستژن - تماس با ما</title>
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
                                <a class="nav-link active" href="contact-us.php">تماس با ما</a>
                            </li>
                        </ul>
                        
                        <div class="d-flex align-items-center">
                            <a href="login-register.php" class="btn btn-outline-dark me-2">
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

    <div class="container my-5">
        <div class="row mb-5">
            <div class="col-12">
                <h1 class="page-title">تماس با ما</h1>
                <p class="mb-4">برای تماس با پشتیبانی، ارسال پیشنهاد یا انتقاد و یا هرگونه سوال، می‌توانید از راه‌های ارتباطی زیر استفاده کنید:</p>
            </div>
        </div>
        
        <!-- اطلاعات تماس -->
        <div class="row mb-5">
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="contact-info-card text-center">
                    <div class="contact-icon">
                        <i class="bi bi-telephone"></i>
                    </div>
                    <h4 class="mb-3">تلفن تماس</h4>
                    <p class="mb-2">021-12345678</p>
                    <p class="mb-0">شنبه تا پنجشنبه 9 صبح تا 9 شب</p>
                </div>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="contact-info-card text-center">
                    <div class="contact-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <h4 class="mb-3">پست الکترونیکی</h4>
                    <p class="mb-2">info@nextgen.com</p>
                    <p class="mb-0">پاسخگویی در کمتر از 24 ساعت</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info-card text-center">
                    <div class="contact-icon">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <h4 class="mb-3">دفتر مرکزی</h4>
                    <p class="mb-2">تهران، خیابان ولیعصر، بالاتر از میدان ونک</p>
                    <p class="mb-0">کد پستی: 1234567890</p>
                </div>
            </div>
        </div>
        
        <!-- فرم تماس و نقشه -->
        <div class="row mb-5">
            <div class="col-lg-7">
                <div class="contact-form">
                    <h3 class="mb-4">ارسال پیام</h3>
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nameInput" placeholder="نام و نام خانوادگی">
                                    <label for="nameInput">نام و نام خانوادگی</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="emailInput" placeholder="ایمیل">
                                    <label for="emailInput">ایمیل</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subjectInput" placeholder="موضوع">
                                <label for="subjectInput">موضوع</label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="form-floating">
                                <textarea class="form-control" id="messageInput" placeholder="پیام شما" style="height: 150px"></textarea>
                                <label for="messageInput">پیام شما</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark px-4 py-2">ارسال پیام</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mt-4 mt-lg-0">
                <div class="h-100 d-flex flex-column">
                    <h3 class="mb-4">موقعیت ما روی نقشه</h3>
                    <div class="flex-grow-1" style="min-height: 300px; background-color: #f8f9fa; border-radius: 10px;">
                        <!-- اینجا می‌توانید iframe نقشه گوگل یا نشان را قرار دهید -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25925.68087965758!2d51.39916551995478!3d35.75603396707364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e01dc39867109%3A0x65dd50540bf9f51e!2z2YjZhtuMINiq2YfYsdin2YbYjCDYp9iz2KrYp9mGINiq2YfYsdin2YbYjCDYp9uM2LHYp9mG!5e0!3m2!1sfa!2s!4v1700323663138!5m2!1sfa!2s" width="100%" height="100%" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- شعب فروشگاه -->
        <div class="row mb-5">
            <div class="col-12 mb-4">
                <h2 class="page-title">شعب فروشگاه‌های نکستژن</h2>
                <p class="mb-4">علاوه بر خرید آنلاین، می‌توانید از فروشگاه‌های فیزیکی ما در سراسر کشور بازدید کنید.</p>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="branch-card">
                    <img src="https://images.unsplash.com/photo-1567401893414-76b7b1e5a7a5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="شعبه مرکزی" class="branch-img">
                    <div class="branch-info">
                        <h4>شعبه مرکزی (تهران)</h4>
                        <p class="text-muted mb-3">خیابان ولیعصر، بالاتر از میدان ونک، مجتمع تجاری ونک</p>
                        <p class="mb-2"><i class="bi bi-telephone me-2"></i> 021-12345678</p>
                        <p class="mb-0"><i class="bi bi-clock me-2"></i> شنبه تا پنجشنبه 10 صبح تا 10 شب</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="branch-card">
                    <img src="https://images.unsplash.com/photo-1552306062-29a5560e1c31?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="شعبه شمال" class="branch-img">
                    <div class="branch-info">
                        <h4>شعبه شمال (تهران)</h4>
                        <p class="text-muted mb-3">اقدسیه، مرکز خرید پالادیوم، طبقه دوم</p>
                        <p class="mb-2"><i class="bi bi-telephone me-2"></i> 021-87654321</p>
                        <p class="mb-0"><i class="bi bi-clock me-2"></i> شنبه تا پنجشنبه 10 صبح تا 10 شب</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="branch-card">
                    <img src="https://images.unsplash.com/photo-1582390105740-b6eca979dcb3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="شعبه اصفهان" class="branch-img">
                    <div class="branch-info">
                        <h4>شعبه اصفهان</h4>
                        <p class="text-muted mb-3">خیابان چهارباغ، مرکز خرید سیتی سنتر، طبقه همکف</p>
                        <p class="mb-2"><i class="bi bi-telephone me-2"></i> 031-12345678</p>
                        <p class="mb-0"><i class="bi bi-clock me-2"></i> شنبه تا پنجشنبه 10 صبح تا 10 شب</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="branch-card">
                    <img src="https://images.unsplash.com/photo-1577971132997-c10be9372519?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="شعبه شیراز" class="branch-img">
                    <div class="branch-info">
                        <h4>شعبه شیراز</h4>
                        <p class="text-muted mb-3">خیابان ملاصدرا، مرکز خرید پارس، طبقه سوم</p>
                        <p class="mb-2"><i class="bi bi-telephone me-2"></i> 071-12345678</p>
                        <p class="mb-0"><i class="bi bi-clock me-2"></i> شنبه تا پنجشنبه 10 صبح تا 10 شب</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="branch-card">
                    <img src="https://images.unsplash.com/photo-1519415510236-718bdfcd89c8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="شعبه مشهد" class="branch-img">
                    <div class="branch-info">
                        <h4>شعبه مشهد</h4>
                        <p class="text-muted mb-3">بلوار امامت، مرکز خرید الماس شرق، طبقه همکف</p>
                        <p class="mb-2"><i class="bi bi-telephone me-2"></i> 051-12345678</p>
                        <p class="mb-0"><i class="bi bi-clock me-2"></i> شنبه تا پنجشنبه 10 صبح تا 10 شب</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="branch-card">
                    <img src="https://images.unsplash.com/photo-1568435363428-d339d990aab7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="شعبه تبریز" class="branch-img">
                    <div class="branch-info">
                        <h4>شعبه تبریز</h4>
                        <p class="text-muted mb-3">ولیعصر، مرکز خرید لاله پارک، طبقه دوم</p>
                        <p class="mb-2"><i class="bi bi-telephone me-2"></i> 041-12345678</p>
                        <p class="mb-0"><i class="bi bi-clock me-2"></i> شنبه تا پنجشنبه 10 صبح تا 10 شب</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- سوالات متداول -->
        <div class="row mb-5">
            <div class="col-12 mb-4">
                <h2 class="page-title">سوالات متداول</h2>
                <p class="mb-4">پاسخ سوالات رایج مشتریان را در این بخش مشاهده کنید.</p>
            </div>
            <div class="col-12">
                <div class="faq-item">
                    <div class="faq-header">زمان ارسال محصولات به چه صورت است؟</div>
                    <div class="faq-body">
                        <div class="faq-body-inner">
                            <p class="mb-0">محصولات در شهر تهران معمولاً در کمتر از 24 ساعت و در شهرستان‌ها بین 2 تا 4 روز کاری تحویل داده می‌شوند. البته این زمان بستگی به موجودی کالا و محل سکونت شما دارد. زمان تقریبی تحویل در صفحه محصول و همچنین در مرحله ثبت سفارش به شما نشان داده می‌شود.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-header">شرایط بازگشت محصول چیست؟</div>
                    <div class="faq-body">
                        <div class="faq-body-inner">
                            <p class="mb-0">شما می‌توانید تا 7 روز پس از دریافت کالا، در صورت عدم رضایت، آن را بازگردانید. البته کالا باید سالم و بدون استفاده باشد و در بسته‌بندی اصلی خود قرار داشته باشد. برای بازگشت کالا کافیست با پشتیبانی ما تماس بگیرید تا راهنمایی لازم را دریافت کنید.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-header">روش‌های پرداخت چیست؟</div>
                    <div class="faq-body">
                        <div class="faq-body-inner">
                            <p class="mb-0">شما می‌توانید از روش‌های مختلف پرداخت از جمله کارت به کارت، پرداخت آنلاین با تمامی کارت‌های بانکی عضو شتاب، پرداخت از طریق درگاه‌های پرداخت اینترنتی و پرداخت در محل (فقط در تهران) استفاده کنید.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-header">چگونه از وضعیت سفارش خود مطلع شوم؟</div>
                    <div class="faq-body">
                        <div class="faq-body-inner">
                            <p class="mb-0">پس از ثبت سفارش، یک ایمیل و پیامک تأییدیه برای شما ارسال می‌شود. همچنین می‌توانید با ورود به حساب کاربری خود و مراجعه به بخش "پیگیری سفارش" از وضعیت سفارش خود مطلع شوید. علاوه بر این، در هر مرحله از پردازش سفارش، یک پیامک اطلاع‌رسانی برای شما ارسال می‌شود.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-header">آیا امکان تعویض سایز یا رنگ محصول وجود دارد؟</div>
                    <div class="faq-body">
                        <div class="faq-body-inner">
                            <p class="mb-0">بله، در صورت موجود بودن سایز یا رنگ مورد نظر شما، امکان تعویض وجود دارد. برای این کار کافیست با پشتیبانی ما تماس بگیرید. هزینه ارسال مجدد بر عهده مشتری است، مگر اینکه اشتباه از سمت فروشگاه بوده باشد.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- خبرنامه -->
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="mb-4">عضویت در خبرنامه</h3>
                <p class="mb-4">برای اطلاع از آخرین محصولات و تخفیف‌های ویژه، در خبرنامه ما عضو شوید.</p>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="input-group mb-4">
                            <input type="email" class="form-control" placeholder="ایمیل خود را وارد کنید">
                            <button class="btn btn-dark" type="button">عضویت</button>
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
    <script>
        // اسکریپت برای فعال‌سازی سوالات متداول
        document.addEventListener('DOMContentLoaded', function() {
            const faqHeaders = document.querySelectorAll('.faq-header');
            
            faqHeaders.forEach(header => {
                header.addEventListener('click', function() {
                    this.classList.toggle('active');
                    
                    // غیرفعال کردن سایر آیتم‌های باز
                    faqHeaders.forEach(otherHeader => {
                        if (otherHeader !== this) {
                            otherHeader.classList.remove('active');
                        }
                    });
                });
            });
        });
    </script>
</body>
</html> 