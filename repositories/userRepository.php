<?php
function insertUser($db, $name, $email, $password,  $login){
	$insertUsers = $db->prepare("INSERT INTO users(`name`, `role`, `email`, `password`, `login`) VALUES (?, ?, ?, ?, ?)");
    $insertUsers->execute(array($name, 'customer', $email, $password, $login));
}