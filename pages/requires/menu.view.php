<?php
	defined("_AST") or die("Access denied");
    $page=new DB_PAGE();
    
    $ListOfMenu=Base::getData("_menus");
    ?>

<!-- هدر و منو -->

    <div class="container">
        <div class="row align-items-center">
            <!-- لوگو در موبایل -->
            <div class="col-6 d-flex d-lg-none">
                <a href="index.html" class="navbar-brand">نکستژن</a>
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
                    <a href="index.html" class="navbar-brand me-4">نکستژن</a>
                    <ul class="nav">
                    <?php
                            foreach($ListOfMenu as $item){
                            
                        ?>
                        <li <?= ($item['Active']) ? ' class="nav-item active"':''; ?> >
                        <a class="nav-link" href="<?= $item['URL']; ?>" <?= ($item['new_window']==1) ? ' target="_blank"': '' ?>><?= $item['title']; ?></a>
                    </li>
                    <?php
	                    }
                    ?>
                        <!-- <li class="nav-item">
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
                        </li> -->
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
