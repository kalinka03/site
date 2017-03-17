 
<?php
function view($viewname, $data = []){
	   include "views/header.php";
	if( file_exists( "views/$viewname.view.php" ) ) {
		include "views/$viewname.view.php";
	}
}
	
