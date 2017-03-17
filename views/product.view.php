	



<h1> Страница товара </h1>


<div>
	<h1><?= $data[0]['title'] ?></h1>
	<p>опис товару: '<?= $data[0]['description'] ?>'</p>
	<p>ціна: '<?= $data[0]['price'] ?>' грн</p>
</div>
<div>
<form  method='post' action="/basket">
	<button id='buy_product' type="submit" name='id' value = <?= $data[0]['id'] ?> >Купить продукт</button >
	
	</form>

	</div>