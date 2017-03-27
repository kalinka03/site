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
           header('location: /login');           
 exit();
       }

// else {
//             header('location: /login');
//             exit();
//         }




// if(isset($action)) {
//     if( $action != 'admin' ) {
//         $controllerFileName = 'controllers/' . $action . 'Controller.php';
//         if(file_exists( $controllerFileName )) {
//             include_once $controllerFileName;
    //     }
    // }
    // else {
    // 	echo "now";
    // }
    // else {
        // if( isset( $_SESSION['user'] ) && $_SESSION['user']['role'] == 'admin' )  {
            // $method = $_GET['method'] ?? null;
            // $page = $_GET['page'] ?? 0;
            // include 'views/admin/headerView.php';
            // $controllerFileName = 'controllers/admin/' . $subAction . 'Controller.php';
            // if(file_exists( $controllerFileName )) {
            //     include_once $controllerFileName;
            // }
        // }
        // else {
        //     header('location: /login');
        //     exit();
        // }
//     }
// }