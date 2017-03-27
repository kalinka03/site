
<?php
if($subAction=='order'&& $method=='edit'){
	$id=$_GET['id'];
	$resProduct =getProduct($db);
	$users=getUsers($db);
$order = getOrderId($db, $id);

	viewHelpers('admin/orderEdit', ['order'=>$order, 'product'=>$resProduct , 'user'=>$users]);
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

else if($subAction=='order'){
$users= getUsers($db);	
$orders= getOrders($db);

foreach ($orders as $key => $order) {
	$user= getUser($db, $order['user_id']);
	$orders[$key]['user_name']=$user[0]['name'];
	var_dump($orders[$key]['user_name']);
	
		// $orders[$key]['user_name']=$user[0]['name'];
	
}
$allOrdersCount = getOrderCount($db)[0]['order_count'];
    
    
    viewHelpers('admin/order', $orders);
}

