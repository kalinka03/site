	
<?php 
foreach( $data as $category ) { ?>
		<a href="/catalog/<?=$category['id']?>"><?=$category['title'] ?></a><br/>
	<?php } ?>