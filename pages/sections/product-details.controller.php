<?php
	if(!isset($_GET['id'])){
		throw new NotFound();
	}
	$product_db=new DB_PRODUCTS();
	
	$id=secure($_GET['id']);
	
	$productDetails=$product_db->setWheres(array(
		"id"=>$id
	))->getDetails()->run();
	
	if(empty($productDetails))
		throw new NotFound();
	
	if($productDetails['enable']==0)
		throw new NotFound();
	
	Base::setSiteTitle("محصول: ".$productDetails['title']);
	Base::setSiteKeywords($productDetails['keywords']);
	Base::setSiteDescription($productDetails['description']);

?>
