<?php
function getCategories( $db ) {
$res = sql( $db, 'SELECT * FROM `categories`', [], 'rows' );
return $res;
}