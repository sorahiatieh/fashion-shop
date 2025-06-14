<?php
    defined("_AST") or die("Access denied");
?>
<!-- اسلایدر اصلی -->
<div class="swiper hero-slider mb-5">
        <div class="swiper-wrapper">
        <?php
            foreach($CP['ListOfSliders'] as $item){
        ?>
            <div class="swiper-slide" style="background-image: url('assets/images/cover/<?= $item['id']; ?>.jpg');">
                <div class="slide-content">
                    <h1 class="mb-3"><?= $item['title']; ?></h1>
                    <p class="mb-4"><?= $item['description']; ?></p>
                    <a href="#" class="btn btn-dark px-4 py-2"><?= $item['more']; ?> </a>
                </div>
            </div>
        <?php
        }
		?>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>