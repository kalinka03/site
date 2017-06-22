

<?php
include "db.php";

$randUserName = ['Max','Peter', 'Dmitriy',  'Katya'];
$userEmail=['m@gmail.com', 'p@gmail.com', 'g@gmail.com', 'l@gmail.com'];
$roles = ['admin','customer'];
$logins = ['max','piter','dima','kate'];
function RandDateTime(){
    $year = rand(2000,2017);
    $month = rand(1,12);
    $day = rand(1,28);
    $hour = rand(0,23);
    $minute = rand(0,59);
    $second = rand(0,59);
    return $randData = "$year-$month-$day $hour:$minute:$second";
};   
 $insertUsers = $db->prepare("INSERT INTO users(`name`,`email`, `password`, `role`, `login`, `last_activity`) VALUES(:name,:email,:password, :role,:login, :last_activity)");
  for ($i=0; $i <5 ; $i++) { 
  $insertUsers->execute(array("name" => $randUserName[rand(0,3)], "email" => $userEmail[rand(0,3)], "password"=> rand(1000, 9999), "role" =>$roles[rand(0,1)], "login"=> $logins[rand(0,3)], "last_activity" =>RandDateTime()));
     };


 $titleCategory = ["food", "leasure", "books", "music"];
$insertCategory = $db->prepare("INSERT INTO categories(`title`) VALUES(:title)");
  for ($i=0; $i <5 ; $i++) { 
  $insertCategory->execute(array("title" =>$titleCategory[rand(0, 3)]));
 };

$titleProducts = ["toys", "cars", "phones", "tv"];

function RandText(){
 $randText = ['a','b','v','g'];
 return $randText[rand(0,3)];
};

$insertProducts = $db->prepare("INSERT INTO products(`title`, `description`, `price`, `category_id`) VALUES(:title, :description, :price, :category_id)");
  for ($i=0; $i <5 ; $i++) { 
   $idLastCategory = $db->lastInsertId();
    $insertProducts->execute(array("title" => $titleProducts[rand(0,3)], "description" => RandText(), "price" => rand(100, 1000), 'category_id' => $idLastCategory));
 };

 $orderStatuses = ['open','in progress','closed'];
$insertOrder = $db->prepare("INSERT INTO orders(`created_at`, `delivered_at`, `total_price`, `status`, `user_id`, `product_id`) VALUES(:created_at, :delivered_at, :total_price, :status, :user_id, :product_id)");
  for ($i=0; $i <5 ; $i++) { 
   $idLastUser = $db->lastInsertId();
$idLastProducts = $db->lastInsertId();
       $insertOrder->execute(array("created_at" => RandDateTime(), "delivered_at" => RandDateTime(), "total_price" => rand(100, 1000), "status" =>$orderStatuses[rand(0,2)], 'user_id' => $idLastUser, 'product_id' => $idLastProducts));
 };
 $insertRewies = $db->prepare("INSERT INTO reviews(`created_at`, `text`, `rating`, `user_id`, `product_id`) VALUES(:created_at, :text , :rating, :user_id, :product_id)");
  for ($i=0; $i <5 ; $i++) { 
   $idLastUser = $db->lastInsertId();
$idLastProducts = $db->lastInsertId();
    $insertRewies->execute(array("created_at" => RandDateTime(), "text" => RandText(), "rating" => rand(0, 10),'user_id' => $idLastUser, 'product_id' => $idLastProducts));
 }























































<?php
include "db.php";

$randUserName = ['Max','Peter', 'Dmitriy',  'Katya'];
$userEmail=['m@gmail.com', 'p@gmail.com', 'g@gmail.com', 'l@gmail.com'];
$roles = ['admin','customer'];
$logins = ['max','piter','dima','kate'];
function RandDateTime(){
    $year = rand(2000,2017);
    $month = rand(1,12);
    $day = rand(1,28);
    $hour = rand(0,23);
    $minute = rand(0,59);
    $second = rand(0,59);
    return $randData = "$year-$month-$day $hour:$minute:$second";
};   



 $insertUsers = $db->prepare("INSERT INTO users(`name`,`email`, `password`, `role`, `login`, `last_activity`) VALUES(:name,:email,:password, :role,:login, :last_activity)");
  for ($i=0; $i <5 ; $i++) { 
  $insertUsers->execute(array("name" => $randUserName[rand(0,3)], "email" => $userEmail[rand(0,3)], "password"=> rand(1000, 9999), "role" =>$roles[rand(0,1)], "login"=> $logins[rand(0,3)], "last_activity" =>RandDateTime()));
     };


 $titleCategory = ["food", "leasure", "books", "music"];
$insertCategory = $db->prepare("INSERT INTO categories(`title`) VALUES(:title)");
  for ($i=0; $i <5 ; $i++) { 
  $insertCategory->execute(array("title" =>$titleCategory[rand(0, 3)]));
 };

$titleProducts = ["toys", "cars", "phones", "tv"];

function RandText(){
 $randText = ['a','b','v','g'];
 return $randText[rand(0,3)];
};

$insertProducts = $db->prepare("INSERT INTO products(`title`, `description`, `price`) VALUES(:title, :description, :price)");
  for ($i=0; $i <5 ; $i++) { 
    $insertProducts->execute(array("title" => $titleProducts[rand(0,3)], "description" => RandText(), "price" => rand(100, 1000)));
 };

 $orderStatuses = ['open','in progress','closed'];
$insertOrder = $db->prepare("INSERT INTO orders(`created_at`, `delivered_at`, `total_price`, `status`) VALUES(:created_at, :delivered_at, :total_price, :status)");
  for ($i=0; $i <5 ; $i++) { 
    $insertOrder->execute(array("created_at" => RandDateTime(), "delivered_at" => RandDateTime(), "total_price" => rand(100, 1000), "status" =>$orderStatuses[rand(0,2)]));
 };
 $insertRewies = $db->prepare("INSERT INTO reviews(`created_at`, `text`, `rating`) VALUES(:created_at, :text , :rating)");
  for ($i=0; $i <5 ; $i++) { 
    $insertRewies->execute(array("created_at" => RandDateTime(), "text" => RandText(), "rating" => rand(0, 10)));
 }























include "db.php";
$insertedIds = [];
function randVal( $valName ) {
	/* products */
	$title = ['Misha','Vasya','Grisha','Masha','Dasha'];
	$description =  ['test test test test', 'axst axst axst axst', 'stsd testsd stxc estgfs', 'dqq1st sdazst czxast 123st', 'czxest fdest test teasd', ];
	

	
	if( $valName == 'products' ) {

		return "'".$$valName."'";
	};
};
function insertRow( $db, &$insertedIds, $table ) {
	
	 if( $table == 'products' ) {
		
		$values = [
			'title' => randVal('title'),
			'description' => randVal('description'),
			'price' => rand(15,100),
			];
	}
	
	
	var_dump("INSERT INTO ".$table."( ".join(',',array_keys($values))." ) VALUES( ".join(',',array_values($values))." )");
	$db->exec("INSERT INTO ".$table."( ".join(',',array_keys($values))." ) VALUES( ".join(',',array_values($values))." )");
	
	if( in_array($table,['products']) ) {
		$insertedIds[$products][] = $db->lastInsertId();
	}
}
function fakeDataInsert( $db, &$insertedIds, $table, $amount ) {
	for( $i=0; $i<$amount; $i++ ) {
		insertRow( $db, $insertedIds, $table);
	}
}

fakeDataInsert( $db, $insertedIds, 'products', 500 );
