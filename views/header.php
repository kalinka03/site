<?php
include "registr/come.php"
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Главная</title>
        <link href="templaces/css/bootstrap.min.css" rel="stylesheet">
        <link href="templaces/css/font-awesome.min.css" rel="stylesheet">
        <link href="templaces/css/prettyPhoto.css" rel="stylesheet">
        <link href="templaces/css/price-range.css" rel="stylesheet">
        <link href="templaces/css/animate.css" rel="stylesheet">
        <link href="templaces/css/main.css" rel="stylesheet">
        <link href="templaces/css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
        <header id="header"><!--header-->
            <div class="header_top"><!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href="#"><i class="fa fa-phone"></i> +38 097 01 21 819</a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i> katerinka2009@i.ua</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header_top-->

            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a href="#"><img class="img-main" src="templaces/images/shop/e-shopping.jpg" alt="" />Different things</a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">                                    
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i> Корзина</a></li>
                                    <li><a href="#"><i class="fa fa-user"></i> Аккаунт</a></li>
                                    <li><a href="#"><i class="fa fa-lock"></i> Вход</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-middle-->

            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li><a href="/">Главная</a></li>
      <li class="dropdown"><a href="/catalog">Каталог<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li>
		<?php 	include 'main.view.php'; ?>   
	</li>
                                      
                                        </ul>
                                    
                                    </li> 


                                   
                                    <li><a href="#">О магазине</a></li>
                                    <li><a href="#">Контакты</a></li>
                                    <li><button class="buy-product btn" data-id="">BUY</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-bottom-->
            
        </header><!--/header-->









  <div class="collapse navbar-collapse" id="responsive-menu">
            <ul class="nav navbar-nav">
                <li><a href="/admin/main">Admin</a></li>
                <li><a href="registr/signup.php">Регистрация</a></li>

            </ul>
        </div>
<section>
<?php
	if(empty($_COOKIE['name'])) {
?>
	<form action="/" method="POST">
		<label for="username">Логин:</label>
	<input type="text" name="username"> <br/>
	<label for="password">Пароль:</label>
	<input type="password" name="password"> <br/>
	<button type="submit" name="submit">Вход</button><br/>
	</form>
<?php
}
else {
	?>
	<p><a href="/">Мой профиль</a></p>
	<p><a href="views/exit.php">Выйти  (<?php echo $_COOKIE['name']; ?>)</a></p>
<?php	
}
?>
</section>


      <!--   <div class="container">
    <div class="container">
        <form action="/admin/users" method="POST" role="form">
            <div class="form-group">
                <p><label for="id">ID</label></p>
                <input id="id" name="id" class="form-control" required type="text" value="<?=$data['id']?>">
            </div>
            <div class="form-group">
                <p><label for="name">Name</label></p>
                <input id="name" class="form-control" type="text" name="name" value="<?=$data['name']?>" required>
            </div>
            <div class="form-group">
                <p><label for="role">Role</label></p>
                <input id="role" class="form-control" type="text" name="role" value="<?=$data['role']?>" required>
            </div>

            <div class="form-group">
                <p><label for="email">Email</label></p>
                <input id="email" name="email" class="form-control" required type="text" value="<?=$data['email']?>">
            </div>
            <div class="form-group">
                <p><label for="password">Password</label></p>
                <input id="password" class="form-control" type="password" name="password" value="<?=$data['password']?>" required="">
            </div>

            <div class="form-group">
                <p><label for="login">Login name</label></p>
                <input id="login" class="form-control" type="text" name="login" value="<?=$data['login']?>" required="">
            </div>

            <div class="form-group">
                <p><label for="city">City</label></p>
                <input id="user_city" class="form-control" type="text" name="city" value="" required>
            </div>

            <div class="form-group">
                <p><label for="login">last activity</label></p>
                <input id="login" class="form-control" type="text" name="last_activity" value="<?=$data['last_activity']?>" required>
            </div>

            <input id="user_cityID" class="form-control" type="hidden" name="cityId">
            <input type="submit" value="Update" id="submit" class="btn btn-default"/>
        </form>
    </div>
</div> -->










    








<!-- <a href="/">Головна</a><br/>
<a href="/catalog">Каталог</a><br/> -->

<hr>
<hr>