<?php
if( $action == 'main' ) {
	?>
		<?php } 
if( $action == 'catalog'&& $idRout==null ) {
	$categories = getCategories( $db );
	view('catalog', $categories );
}
?>