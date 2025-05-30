<?php
	defined("_AST") or die("Access denied");
    $page=new DB_PAGE();
    
    $ListOfMenu=Base::getData("_menus");
    ?>
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