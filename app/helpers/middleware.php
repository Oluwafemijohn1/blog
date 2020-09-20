<?php
function usersOnly($redirect = '/index.php'){
    if(empty($_SESSION['id'])){
        $_SESSION['message'] = 'You need to login fisrt';
        $_SESSION['type'] = 'error';
        header('location:' .  BASE_URL . $redirect);
        exit();
    }
}
function adminOnly($redirect = '/index.php'){
    if(empty($_SESSION['id']) || empty($_SESSION['isAdmin'])){
        $_SESSION['message'] = 'You not authorized';
        $_SESSION['type'] = 'error';
        header('location:' .  BASE_URL . $redirect);
        exit();
    }  
}

function guestOnly($redirect = '/index.php'){
    if(empty($_SESSION['id'])){
        
        header('location:' .  BASE_URL . $redirect);
        exit();
    }
}