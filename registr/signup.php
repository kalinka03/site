 
<?php

$dbc = mysqli_connect('localhost', 'root', 'secret', 'categories') OR DIE('Ошибка подключения к базе данных');
if(isset($_POST['submit'])){
	$username = mysqli_real_escape_string($dbc, trim($_POST['username']));
	$password1 = mysqli_real_escape_string($dbc, trim($_POST['password1']));
	$password2 = mysqli_real_escape_string($dbc, trim($_POST['password2']));

$email = mysqli_real_escape_string($dbc, ($_POST['email']));

	$login= mysqli_real_escape_string($dbc, trim($_POST['login']));

// if(!empty($username) && !empty($password1) && !empty($password2)  &&  
// 	 !empty($login) &&  filter_var($email, FILTER_VALIDATE_EMAIL)
// 	  && ($password1 == $password2)) {

	if(empty($username))
	{
		echo "ВВедите имя";
		exit ();
	}
	
if(empty($login)) {
		echo "ВВедите логин";
		exit ();
	}
	
 if ( empty($password1)){
 	echo "ВВедите пароль";
 	exit ();
 } 

 if (empty($password2)) {
 	echo "Повторите пароль";
 	exit ();
 }

 if ( !filter_var($email, FILTER_VALIDATE_EMAIL)) {
 		echo "Неправильно введён емейл";
 }

 else 
{


		$query = "SELECT * FROM `users` WHERE name = '$username'";
		$data = mysqli_query($dbc, $query);
		if(mysqli_num_rows($data) == 0) {
			$query ="INSERT INTO `users` (name, email, login, password) VALUES ('$username', '$email', '$login', SHA('$password2'))";
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

<!--  <content>
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
 -->



 <content>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<label for="name">Введите ваше имя:</label>
	<input type="text" name="username"><br/>
	<label for="password">Введите ваш пароль:</label>
	<input type="password" name="password1"> <br/>
	<label for="password">Введите пароль еще раз:</label>
	<input type="password" name="password2"><br/>
	<label for="email">Введите Ваш email:</label>
	<input type="text" name="email"><br/>

  <label for="login">Введите ваш логин:</label>
	<input type="text" name="login"><br/>

    <p><b>Ви адміністратор або клієн</b></p>
    <p><input name="role" type="radio" value="admin"> admin</p>
    <p><input name="role" type="radio" value="customer">customer</p>


	<button type="submit" name="submit">Вход</button>
	</form>
</content>