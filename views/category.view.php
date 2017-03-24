   <center>
   	<h1>Ви обрали категорію: <?=$data['category']['title'] ?></h1>
   	<h2>Товари цієї категорії:</h2>
   	<?php foreach( $data['products'] as  $product ) { ?>
   	<a class="category_view" href="/product/<?=$product['id']?>"><?=$product['title']?></a><br/>
   	<?php } ?>
   </center>