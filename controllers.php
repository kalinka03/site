<?php
if ($action == null){
    //header();
    include "views/404.view.php";
}
include "controllers/catalogController.php";
include "controllers/mainController.php";
include "controllers/loginController.php";
include "controllers/basket.controller.php";
include "controllers/registrationControllers.php";
include "controllers/productControllers.php";
include "controllers/order.controller.php";