<?php
// Configs
define("HOST", "localhost");
define("USER", "root");
define("PASS", "secret");
define("DBNAME", "categories");
// Connect to database
try {
  $db = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";charset=utf8mb4", "".USER."", "".PASS."");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo $e->getMessage();
}
var_dump($db);
// Simple function to handle PDO prepared statements
function sql($db, $q, $params = [], $return = null) {

// Prepare statement
  $stmt = $db->prepare($q);
  
  // Execute statement
  $res = $stmt->execute($params);
   // Decide whether to return the rows themselves, or query status
  if ($return == "rows") {
    return $stmt->fetchAll();
  }
  else {
    return $res;
  }
}

//   $insert = $db->prepare("INSERT INTO categories(`title`) VALUES(?)");
// $insert->execute(array('books'));
// $insert = $db->prepare("INSERT INTO categories(`title`) VALUES (?), (?), (?), (?), (?), (?)");
// $result = $insert->execute(array('php','html5','javacaript','pascal','c++', 'c#'));
// var_dump($result);





// $userName=['Maks', 'Alex', 'Peter', 'Kate'];
// $userEmail=['maks@gmail.com', 'alex@gmail.com', 'peter@gmail.com', 'kate@gmail.com'];
//  for ($i=0; $i <3 ; $i++) { 
//   $randUserName=$userName[rand(0,4)];
//   $insert = $db->prepare("INSERT INTO users(`name`) VALUES(:name)");
// $insert->execute(array('name' => $randUserName));
//  }










// $insert = $db->prepare("INSERT INTO users(`name`,`email`,`age`,`birth`) VALUES(:name, :email, :age, :birth)");
// $insert->execute(array('name' => 'Vasiliy', 'email' => 'vaska123@gmail.com', 'age' => 21, 'birth' => '1996-11-30 12:36:00'));
// $insert = $db->prepare("INSERT INTO users SET `name`=?,`email`=?, `age`=?,`birth`=?");
// $insert->execute(array('Grigoriy','grisha@gmail.com','31','1985-6-1 21:01:00'));
// var_dump( $db->lastInsertId() );
// $db->exec("INSERT INTO users SET `name`='Evgen',`email`='gena@yandex.ru', `age`=22,`birth`=DATE('1997-7-15 19:00:00')");
// $categories = ($db->query('SELECT * FROM `categories`'));
// var_dump( $categories->rowCount() );
// $categories = $categories->fetchAll(PDO::FETCH_ASSOC);
// foreach( $categories as $key => $category ) {
 // print_r($category); 
 // echo '<br/>';
// }
// echo '<hr/>';
// $users = $db->query('SELECT * FROM `users`');
// $users = $users->fetchAll(PDO::FETCH_ASSOC);
// foreach($users as $user) {
 // print_r($user); 
 // echo '<br/>';
// }
// echo '<hr/>';
// $select = $db->query('SELECT * FROM `users` WHERE `name` = "Grisha" AND `email` LIKE "%gmail%"');
// $select = $db->prepare('SELECT * FROM `users` WHERE `email` LIKE ?');
// $select->execute(['%gmail%']);
// $users = $select->fetchAll(PDO::FETCH_ASSOC);
// foreach($users as $user) {
 // print_r($user); echo '<br/>';
// }
// $db->exec("UPDATE `users` SET `name`='Misha' WHERE `name`='Vasiliy'");
// $insert = $db->prepare("UPDATE `users` SET `name`=? WHERE `name`=?");
// $insert->execute(array('Misha','Grigoriy'));
// $db->exec("DELETE FROM `categories`");
// $db->exec("DELETE FROM `users`");
// $delete = $db->prepare("DELETE FROM `users` WHERE `name`=?");
// $delete->execute(array('Evgen'));
// $newCats = sql(
 // $db, 
 // 'INSERT INTO categories(`title`) VALUES(?), (?), (?), (?), (?)', 
 // ['food','leisure','tech','clothes','auto']
// );
// var_dump($newCats);
// $affected_rows = $db->exec("INSERT INTO categories(`title`) VALUES(1),(2)");
// echo $affected_rows.' were affected<br/>';
// $affected_rows = $db->exec("UPDATE categories SET title='value123'");
// echo $affected_rows.' were affected<br/>';
// $affected_rows = $db->exec("DELETE FROM categories");
// echo $affected_rows.' were affected<br/>';
// $categories = sql($db, 'SELECT * FROM `categories`', [], 'rows');
// var_dump($categories);