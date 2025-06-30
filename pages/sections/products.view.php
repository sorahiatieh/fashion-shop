<?php
	defined("_AST") or die("Access denied");
	$CP=Base::getData("products");
	
	$pageDetails=Base::getPageDetails();
?>
<div class="container cont-blog">
    <div class="breadcrumb">
        <div class="col-lg-12">
            <h2 class="titr"><?= $pageDetails['title']; ?></h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.php">خانه</a>
                </li>
                <li class="active">محصولات</li>
            </ol>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class=" row">
			<?php
				foreach($CP['Items'] as $item){
					?>
                    <div class="items col-md-4">
                        <a href="products/<?= $item['id'].text2url($item['title']); ?>"><img src="<?= $item['ImageURL']; ?>" alt="<?= $item['title']; ?>"></a>
                        <h4><a href="products/<?= $item['id'].text2url($item['title']); ?>"><?= $item['title']; ?></a></h4>
						<?= $item['text']; ?>
                    </div>
					<?php
				}
			?>
        </div>
    </div>
</div>
<!--
<div class="row">
	<div class="col-3">
		<div class="product">
			<div class="pic">
				<img src="assets/img/products/1.jpg" alt="">
			</div>
			<div class="info">
				<div class="name">کاپشن</div>
				<div class="price">2000000 تومان</div>
				<button class="btn btn-cart">سبد خرید</button>
			</div>
		</div>
	</div>
	<div class="col-3">
		<div class="product">
			<div class="pic">
				<img src="assets/img/products/2.jpg" alt="">
			</div>
			<div class="info">
				<div class="name">بلوز</div>
				<div class="price">2000000 تومان</div>
				<button class="btn btn-cart">سبد خرید</button>
			</div>
		</div>
	</div>
	<div class="col-3">
		<div class="product">
			<div class="pic">
				<img src="assets/img/products/3.jpg" alt="">
			</div>
			<div class="info">
				<div class="name">پلیور</div>
				<div class="price">2000000 تومان</div>
				<button class="btn btn-cart">سبد خرید</button>
			</div>
		</div>
	</div>
	<div class="col-3">
		<div class="product">
			<div class="pic">
				<img src="assets/img/products/4.jpg" alt="">
			</div>
			<div class="info">
				<div class="name">پیراهن</div>
				<div class="price">2000000 تومان</div>
				<button class="btn btn-cart">سبد خرید</button>
			</div>
		</div>
	</div>
    <div class="col-3">
        <div class="product">
            <div class="pic">
                <img src="assets/img/products/4.jpg" alt="">
            </div>
            <div class="info">
                <div class="name">پیراهن</div>
                <div class="price">2000000 تومان</div>
                <button class="btn btn-cart">سبد خرید</button>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="product">
            <div class="pic">
                <img src="assets/img/products/4.jpg" alt="">
            </div>
            <div class="info">
                <div class="name">پیراهن</div>
                <div class="price">2000000 تومان</div>
                <button class="btn btn-cart">سبد خرید</button>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="product">
            <div class="pic">
                <img src="assets/img/products/4.jpg" alt="">
            </div>
            <div class="info">
                <div class="name">پیراهن</div>
                <div class="price">2000000 تومان</div>
                <button class="btn btn-cart">سبد خرید</button>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="product">
            <div class="pic">
                <img src="assets/img/products/4.jpg" alt="">
            </div>
            <div class="info">
                <div class="name">پیراهن</div>
                <div class="price">2000000 تومان</div>
                <button class="btn btn-cart">سبد خرید</button>
            </div>
        </div>
    </div>
</div>-->

