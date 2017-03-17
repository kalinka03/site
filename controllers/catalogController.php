<?php
if( $action == 'catalog' && $idRout ) {
  $category = sql( $db,  'SELECT * FROM `categories` WHERE `id` = '.$idRout, [], 'rows' );
  $products = sql( $db, 'SELECT * FROM `products` WHERE `category_id` = '.$idRout, [],  'rows');
include "views/category.view.php";
 /*view('category', $products);*/
 }