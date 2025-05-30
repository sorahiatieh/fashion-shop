<?php
    require SECTIONS."main/slider.view.php";
    
    $CP=Base::getData("main");
?>
<div class="container">
    <?php
        //خدمات شرکت-
	    require SECTIONS."main/popular_categorie.view .php";
        // آخرین نمونه کارها
	    require SECTIONS."main/best_selling.view.php";
        // آخرین های وبلاگ
	    require SECTIONS."main/discounts.view.php";
        //   <!-- بنر تبلیغاتی -->
	    require SECTIONS."main/advertising_banner.view.php";
        //     <!-- مزایای خرید از ما -->
	    require SECTIONS."main/benefits_buying.view.php";
        //  <!-- نظرات مشتریان -->
	    require SECTIONS."main/customer_reviews.view.php";
        //     <!-- عضویت در خبرنامه -->
	    require SECTIONS."main/subscribe_newsletter.view.php";
    ?>
</div>

    
  
    
   
    
 

 
    

    
   
    