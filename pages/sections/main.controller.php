<?php
	$CP=array();
	
	Base::setSiteTitle($setting_db->getSetting('site_title'));
	
	// اسلایدر
	require SECTIONS."main/slider.controller.php";
	// دسته بندی های پرطرفدار
	require SECTIONS."main/popular_categories.controller.php";
	// محصولات پرفروش
	require SECTIONS."main/best_selling.controller.php";
	//پیشنهاد ویژه
	require SECTIONS."main/benefits_buying.controller.php";
	// بنر تبلیغاتی
	require SECTIONS."main/advertising_banner.controller.php";
	//چرا نکسترن
	require SECTIONS."main/discounts.controller.php";
	// نظر مشتریان
	require SECTIONS."main/customer_reviews.controller.php";
	//عضویت در خبرنامه
	require SECTIONS."main/subscribe_newsletter.controller.php";
	
	
	
	Base::setData("main",$CP);
	
	//Head::addScript("assets/js/jquery.nivo.slider.js");
	
	
	/*echo "<pre>";
	print_r($CP);
	echo "</pre>";
	exit;*/
?>