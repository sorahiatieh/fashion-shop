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
    <title><?= Base::getSiteTitle(); ?></title>
    <meta name="keywords" content="<?= Base::getSiteKeywords(); ?>">
    <meta name="description" content="<?= Base::getSiteDescription(); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <base href="<?= SITE_URL; ?>">
	<?php
		Head::makeHead();
	?>
</head>
<body>
	<div class="container">
		<header class="header">
            <?php
                require "pages/requires/menu.view.php";
            ?>
		</header>
        
        <section class="content">
            <?php
                $page_name=Base::getPageName();
                
                if(Base::getHasView()){
                    $filename=SECTIONS.$page_name.".view.php";
                    require $filename;
                }else{
                    require PAGE_PATH."public_page.php";
                }
            ?>
        </section>
       
        <footer>
            <?php
                require "pages/requires/footer.php";
            ?>
        </footer>
	</div>



<script src="assets/js/jquery-3.0.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/cart.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>