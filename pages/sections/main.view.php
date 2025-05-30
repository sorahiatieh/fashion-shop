<?php
    require SECTIONS."main/slider.view.php";
    
    $CP=Base::getData("main");
?>
<div class="container">
    <?php
    // اسلایدر
	require SECTIONS."main/slider.view.php";
	// دسته بندی های پرطرفدار
	require SECTIONS."main/popular_categories.view.php";
	// محصولات پرفروش
	require SECTIONS."main/best_selling.view.php";
	//پیشنهاد ویژه
	require SECTIONS."main/benefits_buying.view.php";
	// بنر تبلیغاتی
	require SECTIONS."main/advertising_banner.view.php";
	//چرا نکسترن
	require SECTIONS."main/discounts.view.php";
	// نظر مشتریان
	require SECTIONS."main/customer_reviews.view.php";
	//عضویت در خبرنامه
	require SECTIONS."main/subscribe_newsletter.view.php";
    ?>
</div>

    
  
    
   
    
 

 
    

    
   
    