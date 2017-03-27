<?php
function getCategories( $db ) {
$res = sql( $db, 'SELECT * FROM `categories`', [], 'rows' );
return $res;
}
function getCategoriesId($db, $idRout){
	$res = sql( $db,  'SELECT * FROM `categories` WHERE `id` = '.$idRout, [], 'rows' );
	return $res;
}
function getProductsId($db, $idRout){
	$res = sql( $db, 'SELECT * FROM `products` WHERE `category_id` = '.$idRout, [],  'rows');
	return $res;
}
function getProductId($db, $idRout){
	$res = sql( $db, 'SELECT * FROM `products` WHERE `id` = '.$idRout, [], 'rows');
	return $res;
}

function deleteCategorie($db, $id){
        $res = sql( $db, 'DELETE  FROM `categories` 
        WHERE `id`='.$id,
        []  
    );
return $res;
}
function saveCategories ( $db, $CategoriesData ) {
    $res = sql($db,
        'UPDATE `categories` set 
          `title` = "'. $CategoriesData['title'] .'"  
          WHERE `id` = '.$CategoriesData['id']
    );
    return $res;
}

function getCategoriesById( $db, $id ) {
    $res = sql($db,
        'SELECT * FROM `categories` WHERE `id` = '.$id,
        [],
        'rows'
    );
    return $res;
}

function getCategoriesTitle( $db) {
    $categories = sql($db,
        'SELECT * FROM `categories` ORDER BY `title`',
        [],
        'rows'
    );

    return $categories;
}

function insertCategories($db, $title){
	$insertCategories = $db->prepare("INSERT INTO categories(`title`) VALUES (?)");
    $insertCategories->execute(array($title));
}