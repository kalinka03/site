 
<?php
function view($viewname, $data = []){
    global $action, $subAction, $config, $_page;
	  include_once "views/header.php";
          if( $action =='admin' ) {
        include 'views/admin/header.php';
    }
	if( file_exists( "views/$viewname.view.php" ) ) {
		include_once "views/$viewname.view.php";
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
    include_once "views/header.php";
    if (file_exists('views/'.$_View.'View.php')){
        include_once 'views/'.$_View.'View.php';
    }
}

function pagination( $pagesCount, $section ) {
    global $_page;
    for( $page=0; $page < $pagesCount; $page++) {
        $curPage = $_page;
        if (($page < $curPage + 3 && $page > $curPage - 3)
            || ($page == 0)
            || ($page == $pagesCount - 1)
        ) {
            echo '<a href="'.$section.'?page='.$page.'">';
            echo ($curPage == $page) ? '<strong>' : '';
            echo $page + 1;
            echo ($curPage == $page) ? '</strong>' : '';
            echo '</a> |';
        }
     }
}