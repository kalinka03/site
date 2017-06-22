<?php
if($subAction=='review'&& $method=='edit'){
  $id=$_GET['id'];
  $review= getReviewsId($db, $id);
  viewHelpers('admin/reviewEdit', ['review' => $review[0]]);
}
else if($subAction=='review'&& $method=='update'){
  $res= saveReview($db, $_POST['form']);
  $id=$_POST['form']['id'];
  header('location: /admin/review');
  exit();
}
else if($subAction=='review'&& $method=='delete'){
  $id=$_GET['id'];
  $res= deleteReview($db, $id);
  header('location:/admin/review');
  exit();
}
else if($subAction=='review'){
  $reviews = getReview( $db );
foreach ($reviews as $key => $review) {
    $productsIds = explode(',', $review['product_id']);
    $products = [];
    foreach ($productsIds as $productId) {
      $products[] = getProductId($db, $productId)[0];
    }
    $productTitles = [];
    $str = '';
    foreach ($products as $product) {
      $productTitles[] = $product['title'];
    }
    
    $str = join(',', $productTitles); 
    $reviews[$key]['product_titles'] = $str;
    
    $user= getUser($db, $review['user_id']);
    $reviews[$key]['user_name']=$user[0]['name'];
  
  }
 
  viewHelpers('admin/review', ['review'=>$reviews]);
}