<?php
$method2 = $_GET['method2'] ?? null;

if($action=='review'&& $method2=='create'){


	if( isset($_SESSION['user'] )) {
// 			if(isset($_POST['id']))	{
		$reviews  = getReview($db);
		$users= getUsers($db);
		$products =getProducts($db);
		

		$review = getReview($db);
		$products= getProducts($db);


		foreach ($reviews as $key=>$review) {
			$product = getProducts($db, $review['product_id']);


			$reviews[$key]['product_name']=$product[0]['title'];
// var_dump($reviews[$key]['product_name']);
		}
	// echo "1212";
		view('reviewCreate', $reviews );
	}
}

else if 
	( !isset($_SESSION['user'] )) {
		$_SESSION['flash_msg'] = "Зареєструйтесь";

	}
	else if( $action == 'review'  ) {
		$reviews  = getReview($db);
		$users= getUsers($db);
		$products =getProducts($db);
		foreach ($reviews as $key=>$review) {
			$productsIds = explode(',', $review['product_id']);
			$products = [];
			foreach ($productsIds as $productId) {
				$products[] = getProductId($db, $productId)[0];
// var_dump(getProductId($db, $productId)[0]);
			}

			$productTitles = [];
			$str = '';
			foreach ($products as $product) {

				$productTitles[] = $product['title'];
			}

			$str = join(',', $productTitles); 

			$reviews[$key]['product_titles'] = $str;

			$users= getUser($db,$review['user_id']);
			$reviews[$key]['user_name']=$users[0]['name'];
		}

// var_dump( $users);
		view('review', $reviews );
// var_dump($reviewId);
// 	$reviewId = getReviewsId ($db, $idRout)[0];
// 	var_dump($reviewId);
// view('review', ['review ' => $review, 'products'=>$products]);
	// view('review');
	}






























//  <?php
// if( $action == 'login'){
// 	if(!empty($_POST)){
// 		$name = $_POST['name'];
// 		$password = $_POST['password'];
// 		if( $name != '' && $password!= '' ) {
// 			$userLogIn = sql( $db, "SELECT * FROM `users` WHERE `name` = '$name'  AND `password` = '$password' ", [],  'rows');
// 			/*$userLogIn =sql( $db, "SELECT * FROM `users` WHERE `name` = '?' AND `login` = '?' AND `email` = '?' AND `password` = '?' ", [$name, $login, $email, $password],  'rows');*/
// 			// var_dump($userLogIn);
// 			if (empty ($userLogIn)) {
// 				echo "В базі немає такого користувача";}
// 			if (!empty ($userLogIn)) {
// 				echo "ДОбро пожаловать ";

// 				$checkId=$userLogIn[0]['id'];
// 				$_SESSION['user'] = $checkId;

// 				include "views/header.php";
// 				// if(empty($userLogIn)){
// 				// 	echo "ТТаокг логына не ысн";
// 				// }
// 				// 	$home_url = 'http://' . $_SERVER['HTTP_HOST'];
// 				// header('Location: '. $home_url);

// 				// /*view('header', $product);*/
// 				exit();

// 		}}
// 	}

// 	view('login');
// } 