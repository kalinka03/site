<?php
if( $action == 'main' ) {
include "views/header.php";	?>
		<?php } 
if( $action == 'catalog'&& $idRout==null ) {
	$categories = getCategories( $db );
	view('catalog', $categories );
}
?>