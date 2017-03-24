 
<?php
function view($viewname, $data = []){
    global $action, $subAction, $config, $_page;
	   include "views/header.php";
          if( $action =='admin' ) {
        include 'views/admin/header.php';
    }
	if( file_exists( "views/$viewname.view.php" ) ) {
		include "views/$viewname.view.php";
	}
}
	
	
function email_check($email){
    //if (!preg_match("~^([a-z0-9_/-/.])+@([a-z0-9_/-/.])+/.([a-z0-9])+$~i", $email)) {
    if (!preg_match("/@/", $email)) {
        return 1;
    }
    else {
        return 0;
    }
}

function buy_product($id)
{
    $_SESSION['basket'][]= $id;
    $_SESSION['flash_msg'] = "Product added";
}	

function viewHelpers($_View, $data = []){
    global $_config, $_page;
    include "views/header.php";
    if (file_exists('views/'.$_View.'View.php')){
        include 'views/'.$_View.'View.php';
    }
}