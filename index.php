 <?php

    $base_url = 'http://localhost/EchoPost/';

    include_once('./Assets/Components/header.php') ?>




 <?php
 include_once('database.php');
 $sql = "SELECT * FROM post_users";
 $query = mysqli_query($database, $sql);
 $row = mysqli_fetch_assoc($query);
 echo $row['post_user_id']


    ?>

 <!-- banner  section-->
 <?php include_once('./Assets/Components/banner.php') ?>




 <!-- Trending Topics section-->

 <?php include_once('./Assets/Components/trending_topics.php') ?>


 <!-- category and and sidebar post -->

 <?php include_once('./Assets/Components/Category.php') ?>








 <!-- community_banner -->

 <?php include_once('./Assets/Components/community_banner.php') ?>


 <!-- #Footer Component Here -->

 <?php include_once('./Assets/Components/footer.php') ?>