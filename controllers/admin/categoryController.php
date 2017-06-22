    
<?php

if($subAction=='category'&& $method=='edit'){
    $id=$_GET['id'];
    $res=getCategoriesById($db, $id);
	// var_dump($res);
    viewHelpers('admin/categoryEdit', ['category' => $res[0]]);
}
else if($subAction=='category'&& $method=='update'){
	$id = $_POST['form']['id'];
    $res= saveCategories($db, $_POST['form']);
    if( $res && $_FILES['avatar'] ) {
        $fileName = 'avatar_'.$id.'.jpg';

        move_uploaded_file($_FILES['avatar']['tmp_name'], 'files/avatars/'.$fileName);
    }

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
    $res = getCategories($db);
    // var_dump($res);
    viewHelpers('admin/category', $res);
}

