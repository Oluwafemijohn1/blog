<?php

include(ROOT_PATH . '/app/database/db.php');
include(ROOT_PATH . '/app/helpers/validateUser.php');
include(ROOT_PATH . '/app/helpers/middleware.php');
// if (isset($_POST['register-btn'])){
//     dd($_POST);
// }

$table = 'u';

$admin_users = selectAll($table);


$errors = array();
$names = '';
$email = '';
$password = '';
$passwordConf = '';
$isAdmin = '';
$id = '';

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
if (isset($_POST['register-btn']) || isset($_POST['create-admin'])) {
  $errors = validateUser($_POST);
    if(count($errors) === 0){
        unset($_POST['register-btn'], $_POST['passwordConf'], $_POST['create-admin']);
        if(isset($_POST['isAdmin'])){
            $_POST['isAdmin'] = 1; 
            $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $user_id = create($table, $_POST);
            $_SESSION['message'] = "Admin user created successfully";
            $_SESSION['type'] = 'success';
            header("location:" . BASE_URL . "/admin/users/index.php");
            exit();
        }else{
            $_POST['isAdmin'] = 0;
            $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $user_id = create($table, $_POST);
            $user = selectOne($table, ['id' => $user_id]);
            // log user in
            loginUser($user);
        }

        
    } else {
        $names = $_POST['names'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
        $isAdmin = isset($_POST['isAdmin']) ? 1 : 0;
    }
    
    
}

if(isset($_POST['update-user'])){
    // adminOnly();
    $errors = validateUser($_POST);

    if(count($errors) === 0){
        $id = $_POST['id'];
        unset( $_POST['passwordConf'], $_POST['update-user'], $_POST['id']);
        
            $_POST['isAdmin'] = isset($_POST['isAdmin']) ? 1 : 0; 
            $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $count = update($table, $id, $_POST);
            $_SESSION['message'] = "Admin user updated successfully";
            $_SESSION['type'] = 'success';
            header("location:" . BASE_URL . "/admin/users/index.php");
            exit();
       
        
    } else {
        $names = $_POST['names'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
        $isAdmin = isset($_POST['isAdmin']) ? 1 : 0;
    }
    
}

if(isset($_GET['id'])){
    $user = selectOne($table, ['id' => $_GET['id']]);
    $id = $user['id'];
    $names = $user['names'];
    $email = $user['email'];    
    // $isAdmin = $user['isAdmin'] ==  1 ?: 0;
    $isAdmin = $user['isAdmin'] ;
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

if(isset($_GET["delete_id"])){
    // adminOnly();
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = "Admin user deleted successfully";
    $_SESSION['type'] = 'success';
    header("location:" . BASE_URL . "/admin/users/index.php");
    exit();
}