<center>
	<h1> СТОРІНКА ТОВАРА </h1>

	<?php
	?>
	<div>
		<h1><?= $data[0]['title'] ?></h1>
		<p align="" class="toggle"> ОПИС ТОВАРУ: '<?= $data[0]['description'] ?>'</p>
		<p class="toggle"> ЦІНА ТОВАРУ: '<?= $data[0]['price'] ?>' грн</p>
	</div>
	<div>
		<form  method='post' >
			<input type="hidden" name='id' value=1>
			<button class="but_view" type="submit" >Відправити в корзину</button >
			</form>
		</div>
	</center>