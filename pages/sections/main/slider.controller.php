<?php
  $slidere_db=new DB_SLIDER();
  
  
  Head::addScript("assets/js/owl.carousel.min.js");
  
  Head::addStylesheet("assets/css/owl.carousel.css");
  Head::addStylesheet("assets/css/owl.theme.css");
  
  
  $CP['ListOfSliders']=$slidere_db->setWheres(array(
      "enable"=>1
  ))->getList()->run();
  
  
 /* echo "<pre>";
  print_r($CP);
  echo "</pre>";
  exit;*/
?>
