<?php
function getReview( $db ) {
    $review = sql( $db, 'SELECT * FROM `reviews`', [], 'rows' );
    return $review;
}
function getReviewsId($db, $idRout){
	$reviewId = sql( $db,  'SELECT * FROM `reviews` WHERE `id` = '.$idRout, [], 'rows' );
	return $reviewId;
}
function deleteReview($db, $id){
 $review = sql( $db, 'DELETE  FROM `reviews` 
    WHERE `id`='.$id,
    []  
    );
 return $review;
}
function saveReview( $db, $reviewData ) {
    $review = sql($db,
        'UPDATE `reviews` set 
        `text` = "'. $reviewData['text'] .'"  
        WHERE `id` = '.$reviewData['id']
        );
    return $review;
}