
<?php

function getProducts( $db ) {
   
$products = sql($db,
        'SELECT * FROM `products` 
        ORDER BY `id` DESC ',
        [],
        'rows'
    );
return $products;
}

function saveProduct( $db, $productData ) {
    $product = sql($db,
        'UPDATE `products` set 
          `title` = "'. $productData['title'] .'" ,
           `description` = "'. $productData['description'] .'" ,
           `price` = "'. $productData['price'] .'" ,
           `category_id` = "'. $productData['category_id'] .'"
             WHERE `id` = '.$productData['id']
    );
    return $product;
}

function deleteProduct($db, $id){
        $res = sql( $db, 'DELETE  FROM `products` 
        WHERE `id`='.$id,
        []  
    );
return $res;
}



function insertProduct($db, $title, $description, $price, $category_id){
    $insertProduct = $db->prepare("INSERT INTO products(`title`, `description`, `price`, `category_id`) VALUES (?, ?, ?, ?)");
    $insertProduct->execute(array($title, $description, $price, $category_id));
}


function getProduct( $db ) {
  
    $res = sql($db,
        'SELECT * FROM `products` 
        ORDER BY `id` DESC ',
        [],
        'rows'
    );
    return $res;
}









