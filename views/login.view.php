<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	
					<form  method='post' action="/login">
<input name='name' type="text" class="form-control"  placeholder="Ваше Имя"> 
												
															
        
						 <input id="password" class="form-control" type="password" name="password" placeholder="Ваш пароль"value="" >
						 
							<button type="submit" class="btn btn-default btn-lg pull-right ">Відправити</button>
	</form>

<!-- 	<section>
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
</section> -->
	</body>
	</html>



<!-- 
		<label for="name">Введите ваше имя:</label>
	<input type="text" name="username"><br/>
	<label for="password">Введите ваш пароль:</label>
	<input type="password" name="password1"> <br/>
	<label for="password">Введите пароль еще раз:</label>
	<input type="password" name="password2"><br/>
	<label for="email">Введите Ваш email:</label>
	<input type="text" name="email"><br/>

  <label for="login">Введите ваш логин:</label>
	<input type="text" name="login"><br/> -->








<!--  
<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
<content>
        <form  method='post' action="/login">
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
</html> -->