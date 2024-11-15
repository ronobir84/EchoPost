<?php
ob_start();

include_once('../database.php');

$category_id = $_GET['category_id'];

$category_delete = "DELETE FROM categories WHERE category_id = '$category_id'";

$category_delete_query = mysqli_query($database, $category_delete);
if ($category_delete_query) {
    header("Location:categories.php");

    $_SESSION['category_success'] = "Category Has been Deleted";
}else{
    echo "NOT Found ";
}
?>