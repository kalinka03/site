<?php
if( $action == 'product' && $idRout ) {
	$product = getProductId($db, $idRout);
	if(!empty($_POST)){
		if( isset($_SESSION['user'] )) {
			if(isset($_POST['id']))	{
				$_SESSION['basket'][] = $idRout;
				$_SESSION['flash_msg'] = "Товар успішно додано в корзину";
				?> <a href="/">На головну</a>

				<?php  
			}	
		}
		else {
			$_SESSION['flash_msg'] = 'Зареєструйтеся будь ласка.';
			header('location: /login');
			exit();
		}
	}
	view('product', $product);
}
?>
