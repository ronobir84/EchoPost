<?php session_start() ?>

<?php
include_once('../database.php');
session_unset();
session_destroy();
header("Location: http://localhost/EchoPost/admin_login.php");
// exit();



?>