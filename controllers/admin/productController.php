
<?php

if($subAction=='product'&& $method=='edit'){
	   $id=$_GET['id'];
	$res=getProducts($db, $id);
	// var_dump($res);
 viewHelpers('admin/productEdit', ['product' => $res[0]]);
	// $res= getCategorie1($db, $idRout);
	// var_dump($res);
}
else
 if($subAction=='product'&& $method=='delete'){
    $id=$_GET['id'];
    $product= deleteProduct($db, $id);
    header('location:/admin/product');
    exit();
}

 else if($subAction=='product'&& $method=='create'){
    viewHelpers('admin/productCreate');
}


else if($subAction=='product'&& $method=='insert'){
    $datares=$_POST['insert'];
    $title=$datares['title'];
     $description=$datares['description'];
      $price=$datares['price'];
         $category_id=$datares['category_id'];

    $res= insertProduct($db, $title,$description, $price, $category_id );
    header('location: /admin/product');
    exit();
}





 // else if($subAction=='product'&& $method=='edit'){
	//    $id=$_GET['id'];
	// $res=getProduct1($db, $id);
	// // var_dump($res);
 // viewHelpers('admin/productEdit', ['product' => $res[0]]);
	// $res= getCategorie1($db, $idRout);
	// var_dump($res);
// }


 else if($subAction=='product'){
    $res = getProduct($db);
    // var_dump($res);
    viewHelpers('admin/product', $res);
}

