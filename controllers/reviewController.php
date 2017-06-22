<?php
if($action=='review'){
	$reviews=getReview( $db );
	$products= sql( $db, "SELECT * FROM `products` ", [], 'rows' );


	foreach ($reviews as $key => $review) {
		$productsIds = explode(',', $review['product_id']);
		$productsRew = [];
		foreach ($productsIds as $productId) {
			$productsRew[] = getProductId($db, $productId)[0];
		}
		$productTitles = [];
		$str = '';
		foreach ($productsRew as $product) {
			$productTitles[] = $product['title'];
		}
		
		$str = join(',', $productTitles); 
		$reviews[$key]['product_titles'] = $str;
		
		$user= getUser($db, $review['user_id']);
		$reviews[$key]['user_name']=$user[0]['name'];
		
	}
	view('review', ['review'=>$reviews, 'product'=>$products]);
}

if( $action == 'review' && $idRout ) {
	if(!empty($_POST['form'])){
		$text=$_POST['form']['text_review'];
		if(isset($text)){

			$insertReview = $db->prepare("INSERT INTO reviews(`text`, `user_id`, `product_id`,`created_at`) VALUES (?, ?, ?, ?) ");
			$insertReview->execute(array($text, $_SESSION['user'], $idRout, date('Y-m-d H:i:s')));
		}
	}
	
	$order= sql( $db, 'SELECT * FROM `orders` WHERE `user_id` = '.$_SESSION['user'].' AND `status`="closed"', [],  'rows');
	$review=sql( $db, 'SELECT * FROM `reviews` WHERE `user_id` = '.$_SESSION['user'] , [],  'rows');
	$reviews=sql( $db, 'SELECT * FROM `reviews` WHERE `product_id` = '.$idRout , [],  'rows');
	foreach ($reviews as $key => $userReview) {
		$user= getUser($db, $userReview['user_id']);
		$reviews[$key]['user_name']=$user[0]['name'];
	}
	
	foreach ($order as $key => $prodOrder) {
		
		$productsId[] = explode(',', $prodOrder['product_id']);	
	}
	$productsIds=[];
	foreach ($productsId as $subarray) {
		$productsIds=array_merge($productsIds, array_values($subarray));
	}
	view('product',['product'=>$products, 'productsIds'=>$productsIds,  'review'=>$review, 'reviews'=>$reviews]);
}


























