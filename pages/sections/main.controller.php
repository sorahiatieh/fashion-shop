<?php
	$CP=array();
	
	//Base::setSiteTitle($setting_db->getSetting('site_title'));
	
	// اسلایدر
	require SECTIONS."main/slider.controller.php";
	// بخش محصولات
	require SECTIONS."main/products.controller.php";
	// آخرین های وبلاگ
	require SECTIONS."main/last_blogs.controller.php";
	
	
	
	Base::setData("main",$CP);
	
	
	/*echo "<pre>";
	print_r($CP);
	echo "</pre>";
	exit;*/
?>