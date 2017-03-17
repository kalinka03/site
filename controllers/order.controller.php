<?php
if( $action == 'order') {
    if(!empty($_POST)){
        // $productId=$_POST['id'];
        // if( $_SESSION['user'] ) {
        //     $_SESSION['basket'][] = $productId;
        // }
        // else {
        //     $_SESSION['flash'] = 'Зареєструйтеся будь ласка.';
        //     header('location: /login');
        //     exit();
        // }
    //     $i = 0;
    //     echo "Товари в корзині :";
    //     echo ('</br>');
    //             foreach( $_SESSION['basket'] as $productId ) {
    //         $product = sql($db, "SELECT * FROM `products` WHERE `id` = $productId", 
    // [],  'rows'  );
            
    //                     echo ++$i . $product[0]['title'];
    //                     echo ('</br>');
    //     }
            
    }
    include "views/order.view.php";
}