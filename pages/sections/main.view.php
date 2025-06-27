<?php
    $CP=Base::getData("main");
?>
<div class="container">
    <?php
        //slider
	    require SECTIONS."main/slider.view.php";
        //products
	    require SECTIONS."main/products.view.php";
       
        // last blog
	    require SECTIONS."main/last_blogs.view.php";
     
    ?>
</div>
