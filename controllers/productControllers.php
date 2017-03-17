<?php
if( $action == 'product' && $idRout ) {
  $product = sql($db, 
    'SELECT * FROM `products` WHERE `id` = '.$idRout, [], 'rows'  );
  view('product', $product);
}