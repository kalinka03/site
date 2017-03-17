                             <h1> ВЫБРАННАЯ ВАМИ КАТЕГОРИЯ </h1>

<?php 
foreach( $data as $category ) { ?>
    <a href="/catalog/<?=$category['id']?>"><?=$category['title'] ?></a><br/>
  <?php } ?>

