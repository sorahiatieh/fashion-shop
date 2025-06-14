<?php
    define("_AST",1);
    require "include/inc.php";
    /*var_dump($_GET);
    exit;*/
    
   require  PAGE_PATH.'controller.php';
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= Base::getSiteTitle(); ?></title>
       <!-- Bootstrap 5 RTL CSS -->
	<?php
		Head::makeHead();
	?>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <!-- نوار تخفیف بالای سایت -->
    <div class="bg-dark text-white text-center py-2">
        <div class="container">
            <p class="m-0">با عضویت در خبرنامه، 10٪ تخفیف اولین خرید را بگیرید!</p>
        </div>
    </div>

    <!-- هدر و منو -->
    <header class="py-3 border-bottom sticky-top bg-white">
        <?php
            require "pages/requires/menu.view.php";
        ?>
    </header>
    
    
    <div class="container content">
        <?php
            $page_name=Base::getPageName();
            
            if(Base::getHasView()){
	            $filename=SECTIONS.$page_name.".view.php";
	            require $filename;
            }else{
	            require PAGE_PATH."public_page.php";
            }
        ?>
    </div>
    
    
    <!-- فوتر -->
    <footer>
        <?php
            require "pages/requires/footer.php";
        ?>
    </footer>
    
    <!-- اسکریپت‌ها -->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>-->
   
    <!--<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>-->
  
    
</body>
</html> 