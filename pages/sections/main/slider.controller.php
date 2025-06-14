<?php
  $slidere_db=new DB_SLIDER();
  
  
  /*Head::addScript("assets/js/swiper-bundle.min.js");
  
  Head::addStylesheet("assets/css/swiper-bundle.min.css");*/

  
  
  $CP['ListOfSliders']=$slidere_db->setWheres(array(
      "enable"=>1
  ))->getList()->run();
	
/*echo "<pre>";
print_r($CP);
echo "</pre>";
exit;*/
	
?>