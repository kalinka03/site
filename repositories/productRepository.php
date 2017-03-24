<?php

// function getProductsId($db, $idRout){
// 	$res = sql( $db, 'SELECT * FROM `products` WHERE `category_id` = '.$idRout, [],  'rows');
// 	return $res;
// }
// function getProductId($db, $idRout){
// 	$res = sql( $db, 'SELECT * FROM `products` WHERE `id` = '.$idRout, [], 'rows');
// 	return $res;
// }

function getProduct( $db ) {
  
    $res = sql($db,
        'SELECT * FROM `products` 
        ORDER BY `id` DESC ',
        [],
        'rows'
    );
    return $res;
}


function insertProduct($db, $title, $description, $price, $category_id){
    $insertProduct = $db->prepare("INSERT INTO products(`title`, `description`, `price`, `category_id`) VALUES (?, ?, ?, ?)");
    $insertProduct->execute(array($title, $description, $price, $category_id));
}


function deleteProduct($db, $id){
        $res = sql( $db, 'DELETE  FROM `products` 
        WHERE `id`='.$id,
        []  
    );
return $res;
}


function getProduct1( $db, $id ) {
    $res = sql($db,
        'SELECT * FROM `products` WHERE `id` = '.$id,
        [],
        'rows'
    );
    return $res;
}

// function deleteCategorie($db, $id){
//         $res = sql( $db, 'DELETE  FROM `categories` 
//         WHERE `id`='.$id,
//         []  
//     );
// return $res;
// }
// function saveCategories( $db, $categoryData ) {
//     $res = sql($db,
//         'UPDATE `categories` set 
//           `title` = "'. $categoryData['title'] .'",
       
//           WHERE `id` = '.$categoryData['id']
//     );
//     return $res;
// }





// function saveCategories ( $db, $categoryData ) {
//     $res = sql($db,
//         'UPDATE `categories` set 
//           `title` = "'. $categoryData['title'] .'",  
//           WHERE `id` = '.$categoryData['id']
//     );
//     return $res;
// }

// function getCategorie1( $db, $id ) {
//     $res = sql($db,
//         'SELECT * FROM `categories` WHERE `id` = '.$id,
//         [],
//         'rows'
//     );
//     return $res;
// }

// function insertCategories($db, $title){
// 	$insertCategories = $db->prepare("INSERT INTO categories(`title`) VALUES (?)");
//     $insertCategories->execute(array($title));
// }