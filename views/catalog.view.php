                             <h1 align="center"> ВЫБЕРИТЕ КАТЕГОРИЮ </h1>
<center>
<?php 
foreach( $data as $category ) { ?>
<li border class="catalog_view">

		<a href="/catalog/<?=$category['id']?>"><?=$category['title'] ?></a><br/>
		
		</li>
	<?php } ?>
	</center>

