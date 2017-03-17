   <h2> Категорія </h2> 
   <?php
   echo '<h2>'.$category[0]['title'].'</h2>';
   ?> 
   <h3> товари </h3>
   <?php   foreach( $products as $product ) {
   	echo '<a href="/product/'.$product['id'].'">'.$product['title'].'</a><br/>';
   }
   ?>