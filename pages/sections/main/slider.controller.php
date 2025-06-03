<?php
  $slidere=new DB_SLIDER();
  
  
  Head::addScript("https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js");
  
  Head::addStylesheet("https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css");

  
  
  $CP['ListOfSliders']=$slidere->setWheres(array(
      "enable"=>1
  ))->getList()->run();
?>