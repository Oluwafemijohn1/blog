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

    } else {
        $names = $_POST['names'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
    }
    
    
}

