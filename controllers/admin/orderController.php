
<?php
if($subAction=='order'&& $method=='edit'){
	$id=$_GET['id'];
	$products =getProducts($db);
	$users=getUsers($db);
	$order = getOrderId($db, $id);
// echo "ghbhgh";
// exit();

	viewHelpers('admin/orderEdit', ['order'=>$order, 'product'=>$products , 'user'=>$users]);
}
else if($subAction=='order'&& $method=='update'){

	$res= saveOrder($db, $_POST['form']);

	header('location: /admin/order');
	exit();
}
else if($subAction=='order'&& $method=='delete'){
	$id=$_GET['id'];
	$res= deleteOrder($db, $id);
	header('location:/admin/order');
	exit();
}
else if($subAction=='order'&& $method=='create'){
	viewHelpers('admin/orderCreate');
}
else if($subAction=='order'&& $method=='insert'){
	$datares=$_POST['insert'];
	$user_id=$datares['user_id'];
	$product_id=$datares['product_id'];
	$status=$datares['status'];
	$total_price=$datares['total_price'];
	$name=$datares['name'];
	$surname=$datares['surname'];
	$adress=$datares['adress'];
	$telefone=$datares['telefone'];
	$resOrder= insertOrder($db,    $user_id, $product_id, $status, $total_price, $name, $surname, $adress, $telefone);
	header('location: /admin/order');
	exit();
}




else if($subAction=='order'){
	$users= getUsers($db);	
	$orders= getOrders($db);

	foreach ($orders as $key => $order) {
		


// 	var_dump($order['user_id']);

// echo "<br/>";

		$productsIds = explode(',', $order['product_id']);
// var_dump($productsIds);
		$products = [];
		foreach ($productsIds as $productId) {
			$products[] = getProductId($db, $productId)[0];
  //  var_dump(getProductId($db, $productId)[0]);
		}

		$productTitles = [];
		$str = '';
		

		foreach ($products as $product) {
			
			$productTitles[] = $product['title'];
		}
		
		$str = join(',', $productTitles); 

		$orders[$key]['product_titles'] = $str;












		$user= getUser($db, $order['user_id']);
// 	var_dump($user);


// echo "<hr/>";

	// var_dump($orders[$key]['user_name']);
		
		$orders[$key]['user_name']=$user[0]['name'];
		
	}
	$allOrdersCount = getOrderCount($db)[0]['order_count'];
	
	
	viewHelpers('admin/order', $orders);
}

