<?php
	defined("_AST") or die("Access denied");
	$page=new DB_PAGE();
	
	$ListOfMenu=Base::getData("_menus");
?>


<div class="nav">
	<ul class="menu">
		<?php
			foreach($ListOfMenu as $item){
        ?>
            <li <?= ($item['Active']) ? ' class="active"':''; ?> >
                <a href="<?= $item['URL']; ?>" <?= ($item['new_window']==1) ? ' target="_blank"': '' ?>><?= $item['title']; ?></a>
            </li>
        <?php
			}
		?>
	</ul>
	<a class="btn cart" href="">
		<img src="assets/img/cart.png" class="cart-png" alt="cart-png">
	</a>
</div>
<div class="slider">
    <?php
        require "slider.view.php";
    ?>
</div>
