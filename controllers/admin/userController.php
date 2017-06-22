<?php
if($subAction=='user'&& $method=='edit'){
    $id=$_GET['id'];
    $user= getUser($db, $id);
    viewHelpers('admin/userEdit', ['user' => $user[0]]);
}
else if($subAction=='user'&& $method=='update'){
    $id = $_POST['form']['id'];
    $res= saveUser($db, $_POST['form']);
    if( $res && $_FILES['avatar'] ) {
        $fileName = 'avatar_'.$id.'.jpg';

        move_uploaded_file($_FILES['avatar']['tmp_name'], 'files/avatars/'.$fileName);
    }

    header('location: /admin/user');
    exit();
}
else if($subAction=='user'&& $method=='delete'){
    $id=$_GET['id'];
       if ( file_exists( 'avatars/avatar_'.$id.'.jpg' ) ) {
  
  unlink('/files/avatars/avatar_' . $id . '.jpg');
}
    $user= deleteUser($db, $id);

    header('location:/admin/user');
    exit();
}
else if($subAction=='user'&& $method=='create'){
    viewHelpers('admin/userCreate');
}
else if($subAction=='user'&& $method=='insert'){
    $dataUser=$_POST['insert'];
    $name=$dataUser['name'];
    $email=$dataUser['email'];
    $login=$dataUser['login'];
    $password=$dataUser['password'];
    $user= insertUser($db, $name, $email, $password,  $login);
    header('location: /admin/user');
    exit();
}
else if($subAction=='user'){
    $users = getUsers($db);

     $allUsersCount = getUsersCount($db)[0]['users_count'];
    
    $pagination = [
        'pages_count' => ceil($allUsersCount / $_config['items_on_page'])
    ];
    viewHelpers('admin/user', ['user'=>$users, 'pagination' => $pagination]);
}













