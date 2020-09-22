<?php

// In development
// $host = 'localhost';
// $user = 'root';
// $pass = 'emmanuel001.(ephemzy)';
// $db_name = 'blog';


//heroku
$host = 'remotemysql.com';
$user = 'yHZSEwccB0';
$pass = 'TSZx2fMZEF';
$db_name = 'yHZSEwccB0';

$conn = new MySQLi( $host, $user, $pass, $db_name);

if ($conn->connect_error){
    die('Database connection error:' . $conn->connect_error);
}
