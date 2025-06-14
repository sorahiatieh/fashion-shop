<?php
	defined("_AST") or die("Access denied");
	$CP=Base::getData("comment");
	
	//$pageDetails=Base::getPageDetails();
?>
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
                    <?php
	                    foreach($CP['Items'] as $item){
                    ?>
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3">
                                <img src="<?= $item['ImageURL'];  ?>" alt="مشتری" class="rounded-circle" width="50" height="50">
                            </div>
                            <div>
                                <h5 class="mb-0"><?= $item['name'];  ?></h5>
                                <div class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0"><?= $item['text'];  ?></p>
                    </div>
                    <?php
	                    }
                    ?>
                </div>
                <!--<div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3">
                                <img src="assets/images/32.jpg" alt="مشتری" class="rounded-circle" width="50" height="50">
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
                                <img src="assets/images/68.jpg" alt="مشتری" class="rounded-circle" width="50" height="50">
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
                </div>-->
            </div>
        </div>
    </section>