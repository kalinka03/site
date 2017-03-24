<?php
if( $action == 'order') {
	if(!empty($_POST)){
		if(isset($_SESSION['basket'])){
			$stringProduct=implode(",", $_SESSION['basket']);//Объединяет элементы массива в строку
			$total_price=0;
			foreach( $_SESSION['basket'] as $key => $product ) {
				$products = sql($db, "SELECT * FROM `products` WHERE `id` = $product", 
					[],  'rows'  );
				$total_price+=$products[0]['price'];
			}
			$name = $_POST['name'];
			$surname = $_POST['surname'];
			$adress = $_POST['adress'];
			$telefone = $_POST['telefone'];
			if( $name != '' && $surname != '' && $adress != '' && $telefone != '' ) {
				$insertUsers = $db->prepare("INSERT INTO orders(`user_id`, `product_id`, `total_price`, `status`, `created_at`,`name`, `surname`, `adress`, `telefone`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
				$insertUsers->execute(array($_SESSION['user'], $stringProduct, $total_price, 'open',  date('Y-m-d H:i:s'), $name, $surname, $adress, $telefone));
				$_SESSION['flash_msg'] = "Ваше замовлення в обробці";
			}
		}
	}
	include 'views/header.php';	
}
