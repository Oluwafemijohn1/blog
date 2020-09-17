<?php

include(ROOT_PATH . '/app/database/db.php');
include(ROOT_PATH . '/app/helpers/validateUser.php');
// if (isset($_POST['register-btn'])){
//     dd($_POST);
// }
$errors = array();
$names = '';
$email = '';
$password = '';
$passwordConf = '';
$table = 'u';
function loginUser($user){
    $_SESSION['id'] = $user['id'];
    $_SESSION['names'] = $user['names'];
    $_SESSION['isAdmin'] = $user['isAdmin'];
    $_SESSION['message'] = 'You are now logged in';
    $_SESSION['type'] = 'success';
    $_SESSION['CreationDate'] = $user['CreationDate'];
    $_SESSION['UpdationDate'] = $user['UpdationDate'];

    if($_SESSION['isAdmin']){
        header('location:' . BASE_URL . '/admin/dashboard.php');
    }else{
        header('location:' . BASE_URL . '/index.php');
    }
    exit();
}
if (isset($_POST['register-btn'])) {
  $errors = validateUser($_POST);
    if(count($errors) === 0){
        unset($_POST['register-btn'], $_POST['passwordConf']);
        $_POST['isAdmin'] = 0;
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user_id = create($table, $_POST);
        $user = selectOne($table, ['id' => $user_id]);

        // log user in
       loginUser($user);
    } else {
        $names = $_POST['names'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
        
    }
    
    
}

if(isset($_POST['login-btn'])){
    $errors = validateLogin($_POST);
    if (count($errors) === 0){
        $user = selectOne($table, ['email' => $_POST['email']]);
        if ($user && password_verify($_POST['password'], $user['password'])){
       // log user in
       loginUser($user);
        }else{
            array_push($errors, 'Wrong login credentials');
        }
    }
    $email = $_POST['email'];
    $password = $_POST['password'];
}

