




<?php

if($subAction=='category'&& $method=='edit'){
	   $id=$_GET['id'];
	$res=getCategorie1($db, $id);
	// var_dump($res);
 viewHelpers('admin/categoryEdit', ['category' => $res[0]]);
	// $res= getCategorie1($db, $idRout);
	// var_dump($res);
}
//     $res= getCategorie1($db, $idRout);
//     viewHelpers('admin/categoryEdit', ['category' => $res[0]]);
// }
else if($subAction=='category'&& $method=='update'){


	// echo "Змынено";
	// $id = $_POST['form']['id'];
    $res= saveCategories($db, $_POST['form']);
      header('location: /admin/category');
    exit();
}

else if($subAction=='category'&& $method=='delete'){
    $id=$_GET['id'];
    $res= deleteCategorie($db, $id);
    header('location:/admin/category');
    exit();
}


else if($subAction=='category'&& $method=='create'){
    viewHelpers('admin/categoryCreate');
}
else if($subAction=='category'&& $method=='insert'){
    $datares=$_POST['insert'];
    $title=$datares['title'];
    $res= insertCategories($db, $title);
    header('location: /admin/category');
    exit();
}



else if($subAction=='category'){
    $res = getCategorieses($db);
    var_dump($res);
    viewHelpers('admin/category', $res);
}











// <?php
// if($subAction=='category'){
//     $res = getCategorieses($db);
//     var_dump($res);
//     viewHelpers('admin/category', $res);
// }

// // function insertUser($db, $name, $email, $password,  $login){
// // 	$insertUsers = $db->prepare("INSERT INTO users(`name`, `role`, `email`, `password`, `login`) VALUES (?, ?, ?, ?, ?)");
// //     $insertUsers->execute(array($name, 'customer', $email, $password, $login));
// // }



// if($subAction=='category'&& $method=='edit'){
//     $res= getCategorie1($db, $idRout);
//     viewHelpers('admin/categoryEdit', ['res' => $res[0]]);
// }
// if($subAction=='category'&& $method=='update'){
//     $res= saveCategories($db, $_POST['form']);
//       header('location: /admin/user');
//     exit();
// }


// else if($subAction=='user'&& $method=='update'){
//     $id = $_POST['form']['id'];
//     $res= saveUser($db, $_POST['form']);
//     if( $res && $_FILES['avatar'] ) {
//         $fileName = 'avatar_'.$id.'.jpg';

//         move_uploaded_file($_FILES['avatar']['tmp_name'], 'files/avatars/'.$fileName);
//         // if(!file_exists('files')){
//         //     mkdir('files/avatars', 0777, true);
//         // }
        
//         // move_uploaded_file($_FILES['avatar']['tmp_name'], 'files/avatars/'.$fileName);
//     }

//     header('location: /admin/user');
//     exit();
// }
// else if($subAction=='user'&& $method=='delete'){
//     $id=$_GET['id'];
//     $user= deleteUser($db, $id);
//     header('location:/admin/user');
//     exit();
// }
// else if($subAction=='user'&& $method=='create'){
//     viewHelpers('admin/userCreate');
// }
// else if($subAction=='user'&& $method=='insert'){
//     $dataUser=$_POST['insert'];
//     $name=$dataUser['name'];
//     $email=$dataUser['email'];
//     $login=$dataUser['login'];
//     $password=$dataUser['password'];
//     $user= insertUser($db, $name, $email, $password,  $login);
//     header('location: /admin/user');
//     exit();
// }
// else if ($subAction=='category'){
//     $res = getCategorie($db);
//     // var_dump($res);
//     viewHelpers('admin/category', $res);
// }











