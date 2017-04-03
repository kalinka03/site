<?php
function getReview( $db ) {
    $review = sql( $db, 'SELECT * FROM `reviews`', [], 'rows' );
    return $review;
}
function getReviewsId($db, $idRout){
	$reviewId = sql( $db,  'SELECT * FROM `reviews` WHERE `id` = '.$idRout, [], 'rows' );
	return $reviewId;
}
// function getProductsId($db, $idRout){
// 	$res = sql( $db, 'SELECT * FROM `products` WHERE `category_id` = '.$idRout, [],  'rows');
// 	return $res;
// }
// function getProductId($db, $idRout){
// 	$res = sql( $db, 'SELECT * FROM `products` WHERE `id` = '.$idRout, [], 'rows');
// 	return $res;
// }



// function getCategoriesById( $db, $id ) {

//     $res = sql($db,
//         'SELECT * FROM `categories` WHERE `id` = '.$id,
//         [],
//         'rows'
//     );
//     return $res;
// }

// function getCategoriesTitle( $db) {
//     $categories = sql($db,
//         'SELECT * FROM `categories` ORDER BY `title`',
//         [],
//         'rows'
//     );

//     return $categories;
// }

// function insertCategories($db, $title){
// 	$insertCategories = $db->prepare("INSERT INTO categories(`title`) VALUES (?)");
//     $insertCategories->execute(array($title));
// }