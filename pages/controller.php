<?php
	defined("_AST") or die("Access denied");
	$setting_db=new DB_SETTING();
	
	Base::setSiteTitle($setting_db->getSetting('site_title'));
	Base::setSiteTitle($setting_db->getSetting('site_keywords'));
	Base::setSiteTitle($setting_db->getSetting('site_description'));
	
	
	Head::addScript("assets/js/jquery-3.0.0.min.js");
	Head::addScript("assets/js/bootstrap.min.js");
	Head::addScript("assets/js/script.js");
	
	Head::addStylesheet("assets/css/bootstrap.min.css");
	Head::addStylesheet("assets/css/font-icon.css");
	Head::addStylesheet("assets/css/font-awesome.min.css");
	Head::addStylesheet("assets/css/style.css");
	
	
	
	if(!isset($_GET['page']))
		$_GET['page']="products";
	
	//var_dump($_GET);
	$pagename =secure($_GET['page']);
	
	$page_db=new DB_PAGE();
	
	try{
		if(!Validator::is_az09_($pagename)){
			throw new NotFound();
		}
		
		$pageDetails=$page_db->setWheres(array(
			"name"=>$pagename
		))->getDetails()->run();
		
		
		if(empty($pageDetails)){
			throw new NotFound();
		}
		
		Base::setPageName($pagename);
		
		Base::setSiteTitle($pageDetails['seo_title']);
		Base::setSiteKeywords($pageDetails['keywords']);
		Base::setSiteDescription($pageDetails['description']);
		
		//For Public Page
		Base::setData("_page_details",$pageDetails);
		
		if($pageDetails['custom_page']==1){
			$filename=SECTIONS.$pageDetails['name'].'.controller.php';
			
			if(file_exists($filename)){
				Base::setIsCustomPage(true);
				
				require $filename;
			}
			
			$filename=SECTIONS.Base::getPageName().'.view.php';
			if(Base::getIsCustomPage() && file_exists($filename)){
				Base::setHasView(true);
			}
		}
	}
	catch(Exception $e){
		header('HTTP/1.0 404 Not Found');
		Base::setSiteTitle("یافت نشد!");
		Base::setHasView(true);
		Base::setPageName("404");
	}
	
	require "pages/requires/menu.controller.php";
	/*echo "<pre>";
	print_r(Base::$data);
	echo "</pre>";
	exit;*/
?>