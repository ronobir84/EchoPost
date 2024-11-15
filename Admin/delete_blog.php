<?php
include_once('../database.php');
$blog_id = $_GET['blog_id'];
$delete_sql = "DELETE FROM `posts` WHERE post_id = '$blog_id'";
$delete_query = mysqli_query($database, $delete_sql);
if ($delete_query) {
    header("Location:blogs.php");
    $_SESSION['delete_msg'] = "Blog Deleted Successful";
}else{
    echo "Not Found";
}


?>