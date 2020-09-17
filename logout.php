<?php
include("path.php");
session_start();
unset($_SESSION['id']);
unset($_SESSION['names']); 
unset($_SESSION['isAdmin']); 
unset($_SESSION['message']);
unset($_SESSION['type']);
unset($_SESSION['CreationDate']);
unset($_SESSION['UpdationDate']);


session_destroy();

header('location:' . BASE_URL . '/login.php');