<?php
  $product_db=new DB_PRODUCTS();
  $setting=new DB_SETTING();
  
  $CP['ListOfProducts']=$product_db->setLimit(4)->getList()->run();
  //$CP['servicesBoxTitle']=$setting->getSetting('portfolio_title');
?>
