<?php
if( $_action == 'catalog' && $_id ) {
	
	$category = sql( $_db, 
				'SELECT * FROM `categories` WHERE `id` = '.$_id, 
				[], 
				'rows' 
			);
	
	$products = sql( $_db, 
				'SELECT * FROM `products` WHERE `category_id` = '.$_id, 
				[], 
				'rows' 
			);
	
	include 'catalog.php';
			
	foreach( $products as $product ) {
		echo '<a href="/product/'.$product['id'].'">'.$product['title'].'</a><br/> <br/>';
	}	
}
if( $_action == 'product' && $_id ) {
	
	$product = sql( $_db, 
				'SELECT * FROM `products` WHERE `id` = '.$_id, 
				[], 
				'rows' 
			);


		include 'product.php';	

}