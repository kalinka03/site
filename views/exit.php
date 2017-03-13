<?php
unset($_COOKIE['id']);
unset($_COOKIE['name']);
setcookie('id', '', -1, '/');
setcookie('name', '', -1, '/');
$home_url = 'http://' . $_SERVER['HTTP_HOST'];
 header('Location: ' . $home_url);
?>