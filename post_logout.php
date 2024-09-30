<?php session_start() ?>

<?php
include_once('database.php');
session_unset();
session_destroy();
header("Location: http://localhost/EchoPost/Echo_post.php");
exit();



?>