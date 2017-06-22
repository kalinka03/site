<?php
if ($action == null){
  
    include "views/404.view.php";
}
include "controllers/catalogController.php";
include "controllers/mainController.php";
include "controllers/loginController.php";
include "controllers/basket.controller.php";
include "controllers/registrationControllers.php";
include "controllers/productControllers.php";
include "controllers/orderController.php";
include "controllers/logoutController.php";
include "controllers/reviewController.php";


if( isset( $_SESSION['user'] ) && $_SESSION['user_role'] == 'admin' )  {
 $method = $_GET['method'] ?? null;
 // echo "123";
// include 'views/admin/headerView.php';

if ($subAction!=null){
$controllerFileName = 'controllers/admin/' . $subAction . 'Controller.php';


                include_once $controllerFileName;
            }
 else {
                view('admin/main');
            }


}
else {
          view('header.php');        
//  exit();
       }

