	
<h1> Страница товара </h1>
	 <div class="container">
	 	<h2> <?php echo $product[0]['title']; ?> </h2>
	 	<p> Характеристика: <?php echo $product[0]['description']; ?> </p>
	 	<p> Цена: <?php echo $product[0]['price']; ?> </p>


 <button class="buy-product btn" data-id="<?=$data[0]['id']?>">BUY</button>

<!-- 
	// echo '<h1>'.$product[0]['title'].'</h1>';
	echo '<p>'.$product[0]['description'].'</p>';
	echo '<p>Price: '.$product[0]['price'].'</p>';
	echo '<button>Buy</button>'; -->

	</div>