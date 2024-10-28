<?php
ob_start();
include_once('../database.php');
$id= $_GET['id'];
$delete_sql = "DELETE FROM `posts` WHERE post_id = '$id'";
$delete_query = mysqli_query($database, $delete_sql);
if ($delete_query) {
    header("Location : blogs.php");
    
}


?>