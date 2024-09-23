<?php

$host = "localhost";
$user_name = 'root';

$user_password = '';

$database_name = 'echo_post';




$database = new mysqli($host, $user_name, $user_password, $database_name);
if (!$database) {
    die('connection is undefined' . mysqli_connect_errno());
}else{
    // echo "database connection Successfully";
}







?>
