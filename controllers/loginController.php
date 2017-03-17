<?php
if( $action == 'login'){
	if(!empty($_POST)){
		$name = $_POST['name'];
		$password = $_POST['password'];
		if( $name != '' && $password!= '' ) {
			$userLogIn = sql( $db, "SELECT * FROM `users` WHERE `name` = '$name'  AND `password` = '$password' ", [],  'rows');
			/*$userLogIn =sql( $db, "SELECT * FROM `users` WHERE `name` = '?' AND `login` = '?' AND `email` = '?' AND `password` = '?' ", [$name, $login, $email, $password],  'rows');*/
			// var_dump($userLogIn);
			if (empty ($userLogIn)) {
				echo "В базі немає такого користувача";}
			if (!empty ($userLogIn)) {
				echo "ДОбро пожаловать ";
			
				$checkId=$userLogIn[0]['id'];
				$_SESSION['user'] = $checkId;
						
				include "views/header.php";
				// if(empty($userLogIn)){
				// 	echo "ТТаокг логына не ысн";
				// }
				// 	$home_url = 'http://' . $_SERVER['HTTP_HOST'];
				// header('Location: '. $home_url);
		
				// /*view('header', $product);*/
				exit();
			
		}}
	}
	
	view('login');
}