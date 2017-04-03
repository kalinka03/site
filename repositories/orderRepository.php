<?php
function getOrders( $db ) {
$orders = sql( $db, 'SELECT * FROM `orders`', [], 'rows' );
return $orders;
}





function getOrderId($db, $id){
    $res = sql( $db, 'SELECT * FROM `orders` WHERE `id` = '.$id, [],  'rows');
    return $res;
}
function saveOrder( $db, $orderData ) {
    $product = sql($db,
        'UPDATE `orders` set 
           
           `total_price` = "'. $orderData['total_price'] .'",
           `status` = "'. $orderData['status'] .'"
           
             WHERE `id` = '.$orderData['id']
    );
    return $product;
}
function deleteOrder($db, $id){
        $res = sql( $db, 'DELETE  FROM `orders` 
        WHERE `id`='.$id,
        []  
    );
return $res;
}
function getOrderCount( $db ) {
    $orderCount = sql($db,
        'SELECT COUNT(*) as order_count FROM `orders`',
        [],
        'rows'
    );
    return $orderCount;
}

function insertOrder($db, $user_id, $product_id, $status, $name, $surname,  $total_price, $adress, $telefone){
    $insertOrder = $db->prepare("INSERT INTO orders(`user_id`, `product_id`, `status`, `total_price`, `name`, `surname`, `adress`, `telefone`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $insertOrder->execute(array($user_id, $product_id, $status, $total_price, $name, $surname, $adress, $telefone));
}
