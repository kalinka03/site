 
<?php

$dbc = mysqli_connect('localhost', 'root', 'secret', 'categories') OR DIE('Ошибка подключения к базе данных');
if(isset($_POST['submit'])){
	$username = mysqli_real_escape_string($dbc, trim($_POST['username']));
	$password1 = mysqli_real_escape_string($dbc, trim($_POST['password1']));
	$password2 = mysqli_real_escape_string($dbc, trim($_POST['password2']));

	if(!empty($username) && !empty($password1) && !empty($password2) && ($password1 == $password2)) {
		$query = "SELECT * FROM `users` WHERE name = '$username'";
		$data = mysqli_query($dbc, $query);
		if(mysqli_num_rows($data) == 0) {
			$query ="INSERT INTO `users` (name, password) VALUES ('$username', SHA('$password2'))";
			mysqli_query($dbc,$query);
			echo 'Всё готово, можете авторизоваться';
			?> 
			<a href="/">ЖМИ</a>
			<?php
			mysqli_close($dbc);
			exit();
		}
		else {
			echo 'Логин уже существует';
		}

	}
}
?>

 <content>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<label for="name">Введите ваш логин:</label>
	<input type="text" name="username"><br/>
	<label for="password">Введите ваш пароль:</label>
	<input type="password" name="password1"> <br/>
	<label for="password">Введите пароль еще раз:</label>
	<input type="password" name="password2"><br/>
		<label for="email">Введите Ваш email:</label>
	<input type="text" name="email"><br/>
	<button type="submit" name="submit">Вход</button>
	</form>
</content>