<?php
include "db.php";


//categories
$titleCategories = ['php','html5','javacaript','pascal','c++', 'c#', 'ruby', 'java'];
$insertCategories = $db->prepare("INSERT INTO categories(`title`) VALUES(:title)");
  for ($i=0; $i <7 ; $i++) { 
  $insertCategories->execute(array("title" =>$titleCategories[rand(0, 7)]));
 };



//users
$randUserName = ['Katya', 'Petya', 'Dima', 'Liza', 'Anton', 'Volodia', 'Natalia', 'Tanya'];
$roles = ['admin', 'customer'];
$userEmail = ['Katya@mail.ru', 'Petya@mail.ru', 'Dima@mail.ru', 'Liza@mail.ru', 'Anton@mail.ru', 'Volodia@mail.ru', 'Natalia@mail.ru', 'Tanya@mail.ru' ];
$logins = ['Ket', 'Pet', 'Dm', 'Liz', 'Tosh', 'Vlad', 'Nata', 'Tanya'];
function RandDateTime(){
    $year = rand(2000,2017);
    $month = rand(1,12);
    $day = rand(1,28);
    $hour = rand(0,23);
    $minute = rand(0,59);
    $second = rand(0,59);
    return $randData = "$year-$month-$day $hour:$minute:$second";
}; 

$insertUsers=$db->prepare("INSERT INTO users (`name`, `role`, `email`, `password`, `login`, `last_activity`) VALUES (:name,:role,:email, :password, :login, :last_activity)");
for ($i=0; $i<7; $i++){

 $insertUsers->execute(array("name" => $randUserName[rand(0,7)], "role" =>$roles[rand(0,1)], "email" => $userEmail[rand(0,7)], "password"=> rand(1000, 9999), "login"=> $logins[rand(0,7)], "last_activity" =>RandDateTime()));
     };




//products
$titleProducts = ["book", "cup", "spoon", "
notebook", "album", "game", "
pan", "kettle"];

$descriptionProducts = ["This is a book","This is a cup", "This is a spoon", "This is a notebook", "This is a album", "This is a game", "This is a pan", "This is a kettle"];

$insertProducts=$db->prepare("INSERT INTO products(`title`, `description`, `price`, `category_id`) VALUES (:title, :description, :price,:category_id)");
for ($i=0; $i<7; $i++) {
    $ lastInsertId()


	$idLastCategory = $db->lastInsertId();
	$insertProducts->execute(array("title" => $titleProducts[rand(0,3)], "description" => $descriptionProducts[rand(0,7)], "price"=>rand(1000,3000),"category_id"=>$idLastCategory));
};



//orders

 $orderStatuses = ['open','in_progress','closed'];
$insertOrder = $db->prepare("INSERT INTO orders
	(`user_id`, `product_id`, `created_at`, `delivered_at`, `status`, `total_price`) VALUES(:user_id, :product_id, :created_at, :delivered_at, :status, :total_price)");
  for ($i=0; $i <7 ; $i++) { 


   $idLastUser = $db->lastInsertId();
   $idLastProducts = $db->lastInsertId();
       $insertOrder->execute(array('user_id' => $idLastUser,
        'product_id' => $idLastProducts,"created_at" => RandDateTime(), "delivered_at" => RandDateTime(), "status" =>
         $orderStatuses[rand(0,2)], "total_price" => rand(500, 1000) ));
 };


//rewies
$textRewies = ['Book - one of the types of printed materials',' Musical album - set of songs', 'plug - the subject of the cutlery', 'Maker - a small closed vessel with a spout', 'Plate - type of tableware', 'Bowl - a vessel round shape ',' book - media ',' game - kind of meaningful unproductive activity ',' book - one of the types of printed materials'];
 $insertRewies = $db->prepare("INSERT INTO reviews(`created_at`, `text`, `rating`, `user_id`, `product_id`) VALUES(:created_at,:text, :rating, :user_id, :product_id)");
  for ($i=0; $i <7 ; $i++) { 
   $idLastUser = $db->lastInsertId();
$idLastProducts = $db->lastInsertId();
    $insertRewies->execute(array("created_at" => RandDateTime(), "text" => $textRewies[rand(0,7)], "rating" => rand(0, 10),'user_id' => $idLastUser, 'product_id' => $idLastProducts));
 }




?>