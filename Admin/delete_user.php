<?php

include_once('../database.php');

$user_id = $_GET['user_id'];
if (empty($user_id)) {
    header("Location:user.php");
}

$user_delete = "DELETE FROM users WHERE user_id ='$user_id'";
$delete_query = mysqli_query($database, $user_delete);
if ($delete_query) {
    $_SESSION['user_success'] = "User Has been Deleted Successful";
    header("Location:users.php");
}else{
    echo "Not Found";
}


?>