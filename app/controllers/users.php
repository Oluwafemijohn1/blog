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

if (isset($_POST['register-btn'])) {
  $errors = validateUser($_POST);
    if(count($errors) === 0){
        unset($_POST['register-btn'], $_POST['passwordConf']);
        $_POST['isAdmin'] = 0;
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user_id = create('u', $_POST);
        $user = selectOne('u', ['id' => $user_id]);

        // log user in
        $_SESSION['id'] = $user['id'];
        $_SESSION['names'] = $user['names'];
        $_SESSION['isAdmin'] = $user['isAdmin'];
        $_SESSION['message'] = 'You are now logged in';
        $_SESSION['type'] = 'success';
        header('location:' . BASE_URL . '/index.php');
        if($_SESSION['isAdmin']){
            header('location:' . BASE_URL . '/admin/dashboard.php');
        }else{
            header('location:' . BASE_URL . '/index.php');
        }
        exit();
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
        $user = selectOne('u', ['names' => $_POST['names']]);
        if ($user && password_verify($_POST['password'], $user['password'])){
            $_SESSION['id'] = $user['id'];
        $_SESSION['names'] = $user['names'];
        $_SESSION['isAdmin'] = $user['isAdmin'];
        $_SESSION['message'] = 'You are now logged in';
        $_SESSION['type'] = 'success';
        header('location:' . BASE_URL . '/index.php');
        if($_SESSION['isAdmin']){
            header('location:' . BASE_URL . '/admin/dashboard.php');
        }else{
            header('location:' . BASE_URL . '/index.php');
        }
        exit();
        }else{
            array_push($errors, 'Wrong login credentials');
        }
    }
    $names = $_POST['names'];
    $password = $_POST['password'];
}

