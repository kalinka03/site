<?php
$dbc = mysqli_connect('localhost', 'root', 'secret', 'categories');
if(!isset($_COOKIE['id'])) {
	if(isset($_POST['submit'])) {
		$user_username = mysqli_real_escape_string($dbc, trim($_POST['username']));
		$user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));
		if(!empty($user_username) && !empty($user_password)) {
			$query = "SELECT `id` , `name` FROM `users` WHERE name = '$user_username' AND password = SHA('$user_password')";
			$data = mysqli_query($dbc,$query);
			if(mysqli_num_rows($data) == 1) 


			{
				// echo "НАшло";
				$row = mysqli_fetch_assoc($data);
				setcookie('id', $row['id'], time() + (60*60*24*30));
				setcookie('name', $row['name'], time() + (60*60*24*30));
				$home_url = 'http://' . $_SERVER['HTTP_HOST'];
				header('Location: '. $home_url);
			}
			else {
				echo 'Извините, вы должны ввести правильные имя пользователя и пароль';
			}
		}
		else {
			echo 'Извините вы должны заполнить поля правильно';
		}
	}
}
?>