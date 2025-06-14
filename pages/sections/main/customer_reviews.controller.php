<?php
	$CP=array();
	$comments_db=new DB_COMMENT();
	
	$items=$comments_db->setWheres(array(
		"enable"=>1
	))->setLimit(8)->getList(10)->run();
	
	for($i=0;$i<count($items);$i++){
		$item=$items[$i];
		
		$item['ImageURL']="assets/images/no-pic.jpg";
		if(file_exists(dirname(__FILE__).'/../../assets/images/comment/'.$item['id'].'.jpg')){
			$item['ImageURL']="assets/images/comment/".$item['id'].'.jpg';
		}
		
		
		$items[$i]=$item;
	}
	
	
	//Base::setPageDetails("title",count($items));
	$CP['Items']=$items;
	
	Base::setData("comment",$CP);
	?>