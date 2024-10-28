<style>
    .min_container {
        width: 90%;
        margin-left: auto;
        margin-right: auto;
        margin-top: 50px;

    }

    .star_img {
        width: 25px;
        height: 25px;
    }

    .Article_flex {
        display: flex;
        gap: 5px;
        align-items: center;

    }

    .Article_h3 {
        color: #302d55;
        font-weight: 700;
        font-size: 22px;
    }

    .Article_box_min {
        width: 400px;
        /* height: 250px; */
        border: 2px solid #b0b9c5;
        padding: 30px 0px 0px 50px;
        background-color: white;
        box-shadow: 5px 5px 5px darkgray;
        border-radius: 7px;
        margin-top: 15px;

    }

    .Category_min {
        display: flex;
        align-items: center;
        gap: 6px;
        padding-bottom: 20px;

    }

    .fa-lg {
        color: #6A4EE9;
    }

    .Category_name {
        font-size: medium;
        color: #6A4EE9;

    }

    .fa-star {
        color: gold;
    }

    .p_title {
        font-size: large;
        margin-top: 14px;
        margin-left: 2px;
        font-weight: 600;

    }

    .new_ol {
        margin-left: 40px;
        font-size: medium;
        font-weight: 500;
        margin-top: 10px;





    }

    .border-div {
        border-left: 1px solid #b0b9c5;
    }


    .flex_min_container {
        display: flex;
        justify-content: space-between;
        gap: 100px;
    }

    .post_container {
        width: 100%;


        box-shadow: 4px 4px darkgray;
        /* border-radius: 7px; */
        border: 2px solid #b0b9c5;
        margin-top: 40px;
        background-color: white;
    }

    .post_min_h1 {
        font-size: 40px;
        text-align: center;
    }

    .post_second {
        padding: 40px 80px 35px 80px;




    }

    .comment_min {
        width: 100%;
        padding-bottom: 30px;
        /* border: 2px solid black; */
        margin-top: 50px;
    }








    textarea {
        width: 100%;
        height: 60px;
        padding: 12px 30px;
        box-sizing: border-box;
        box-shadow: 1px;
        border: 2px solid #ccc;
        border-radius: px;
        background-color: white;
        font-size: 20px;
        /* resize: none; */

    }

    .input_1 {
        width: 50%;
        height: 49px;
        border: 2px solid #ccc;
        padding: 0px 15px;
        font-size: 16px;
        color: black;
    }

    .input_div {
        display: flex;
        gap: 20px;
        margin-top: 15px;
    }

    .banner_button1 {
        padding: 10px 20px;
        background-color: #6A4EE9;
        color: white;
        font-size: larger;
        font-weight: 600;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 18px;
    }

    .banner_button1:hover {
        background-color: #282424;
        transition-duration: 500ms;
    }

    .comment_flex {
        margin-top: 14px;
    }

    .comment_reply_min {
        width: 100%;

        border: 2px solid #ccc;
        padding: 40px 80px 35px 80px;
        background-color: #FFFFFF;
        margin-top: 20px;


    }

    .user_reply_img {
        width: 50px;
        height: 50px;
        border-radius: 100%;
        object-fit: initial;
    }

    .replay_second {
        font-size: medium;
        color: #282424;
    }

    .comment_text {
        font-weight: 500;
        font-size: larger;
    }

    .comment_user_name {
        font-weight: 700;
        color: #6A4EE9;
        font-size: medium;
        position: relative;
        top: 9px;
    }

    .reply_1_flex {
        display: flex;
        gap: 20px;
        align-items: center;
        margin-bottom: 30px;


    }


    .admin_reply_min {
        display: flex;
        gap: 14px;
        align-items: center;
        margin-top: 23px;
        margin-left: 7%;

    }

    .edit_delete_flex {
        display: flex;
        align-items: center;
        gap: 6x;
        position: relative;
        bottom: 2px;
        right: 10px;
    }

    .fa-pen-to-square {
        color: #6A4EE9;

    }

    .fa-trash-can {
        color: red;
        margin-top: 1px;
    }

    .input_1 {
        width: 100%;
        height: 45px;
        margin-top: 10px;
        border: 2px solid #282424;
        font-size: 20px;
        font-weight: 600;
        color: #282424;

    }

    .edit_comment_title {
        font-weight: 700;
        font-family: "Cormorant", serif;
        color: #6A4EE9;
        text-align: center;

    }

    .comment_up_button {
        width: 100%;
        height: 40px;
        background-color: #6A4EE9;
        color: #FFFFFF;
        font-size: larger;
        font-weight: 600;
        border-radius: 2px;
        border: none;
        margin-top: 40px;
    }

    .comment_up_button:hover {
        background-color: #282424;
        transition-duration: 300ms;
        cursor: pointer;

    }
</style>


<?php

session_start();






include_once('../../database.php');

if (isset($_POST['comment_post'])) {
    $comment_content = mysqli_real_escape_string($database, $_POST['comment_content']);
    $post_id = mysqli_real_escape_string($database, $_GET['id']);
    if (isset($_SESSION['min_user_data'])) {
        $user_id = $_SESSION['min_user_data'][0];
    }
    if (isset($_SESSION['min_user_data'])) {
        $user_name = $_SESSION['min_user_data'][1];
    }
    if (isset($_SESSION['min_user_data'])) {
        $user_email = $_SESSION['min_user_data'][2];
    }


    $sql = "INSERT INTO comments( comment_content, author_name, email, post_id, post_user_id) VALUES ('$comment_content','$user_name','$user_email','$post_id','$user_id')";
    $query = mysqli_query($database, $sql);
    if ($query) {
        $_SESSION['comment_sent'] = "Comment Sent Successful";
        echo "<script>window.location.href='http://localhost/EchoPost/Assets/Components/single_post.php?id=$id'</script>";
    } else {
        $_SESSION['comment_sent_error'] = "Failed Please try Agin";
    }
}



?>



<section class="min_container">
    <div class="flex_min_container">
        <!-- post right side -->
        <div>
            <!-- Article  -->
            <div class="Article_flex">
                <img class="star_img" src="http://localhost/EchoPost/Assets/Images/footer_image/pink-star (1).png" alt="">
                <h3 class="Article_h3">Article Information</h3>

            </div>
            <!-- Article box -->
            <div class="Article_box_min">
                <div>
                    <div class="Category_min">
                        <i class="fa-solid fa-tag fa-lg"></i>
                        <h4 class="Category_name">Category : <?php echo $result['category_name'] ?></h4>
                    </div>
                    <div class="Category_min">
                        <i class="fa-regular fa-clock fa-lg"></i>
                        <h4 class="Category_name">Updated: <?php echo date("M  j,  Y", strtotime($result['publish_date'])) ?></h4>
                    </div>
                    <div class="Category_min">
                        <i class="fa-regular fa-user fa-lg"></i>

                        <h4 class="Category_name">Author: <?php echo ucwords($result['user_name']) ?></h4>
                    </div>
                    <div class="Category_min">
                        <i class="fa-solid fa-stopwatch fa-lg"></i>

                        <h4 class="Category_name">Reading time: <?php echo date("i", strtotime($result['publish_date'])) ?> Min</h4>
                    </div>
                    <div class="Category_min">
                        <i class="fa-solid fa-award  fa-lg"></i>

                        <h4 class="Category_name">Difficulty: <span class="fa fa-star checked"></span>
                            <span class="fa-regular fa-star checked"></span>

                            <span class="fa-regular fa-star checked"></span>
                            <span class="fa-regular fa-star"></span>

                        </h4>
                    </div>
                </div>

            </div>


            <!-- table of Contents -->
            <div>
                <div style="margin-top: 30px;" class="Article_flex">
                    <img class="star_img" src="http://localhost/EchoPost/Assets/Images/footer_image/pink-star (1).png" alt="">
                    <h3 class="Article_h3">Table of Contents</h3>

                </div>
                <div>
                    <p class="p_title">Prerequisites</p>
                    <div class="border-div">

                        <ol class="new_ol">
                            <li> </li>


                        </ol>


                    </div>

                </div>

            </div>


        </div>
        <!-- post left side -->
        <div class="">
            <div class="post_container">
                <div class="post_second">
                    <h1 class="post_min_h1"><?php echo $result['post_title'] ?></h1>
                    <div style="justify-content: center; padding-top: 25px;" class="Category_min">
                        <i class="fa-regular fa-calendar fa-lg"></i>


                        <h4 class="Category_name"> Published: <?php echo date("M  j,  Y", strtotime($result['publish_date'])) ?></h4>
                    </div>
                    <div>
                        <h3><?php echo $result['post_content'] ?></h3>
                    </div>
                </div>
            </div>
            <div class="admin_reply_con">
                <div class="comment_reply_min">
                    <div class="">
                        <?php
                        $sql2 = "SELECT * FROM comments LEFT JOIN posts ON comments.post_id = posts.post_id LEFT JOIN post_users ON comments.post_user_id = post_users.post_user_id WHERE posts.post_id= '$id'";
                        $query2 = mysqli_query($database, $sql2);
                        $rows = mysqli_num_rows($query2);
                        if ($rows) {
                            while ($comment = mysqli_fetch_assoc($query2)) {




                        ?>
                                <div class="reply_1_flex">
                                    <div class="">
                                        <img class="user_reply_img" src="http://localhost/EchoPost/Admin/upload/<?php echo $comment['images'] ?>" alt="">
                                    </div>
                                    <div>
                                        <h3 class="comment_user_name"><?php echo $comment['post_user_name'] ?> - <span class="replay_second"> <?php echo date("s", strtotime($comment['comment_time']))  ?> seconds ago</span></h3>
                                        <h3 class="comment_text"><?php echo $comment['comment_content'] ?></h3>
                                        <div class="edit_delete_flex">

                                            <?php
                                            $comment_id = $comment['comment_id'];
                                            // print_r($comment_id);
                                            ?>
                                            <div class="w3-container">

                                                <i onclick="document.getElementById('id01').style.display='block'" class="fa-regular fa-pen-to-square"></i>

                                                <div style="overflow: hidden;" id="id01" class="w3-modal">
                                                    <div style="width: 600px; height:250px;" class="w3-modal-content">
                                                        <header class="w3-container w3-teal">
                                                            <span onclick="document.getElementById('id01').style.display='none'"
                                                                class="w3-button w3-display-topright">&times;</span>

                                                        </header>
                                                        <div class="w3-container">
                                                            <h2 class="edit_comment_title">Edit Comment</h2>
                                                            <form action="">
                                                                <input class="input_1" type="text">
                                                                <button class="comment_up_button">Update</button>
                                                            </form>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <i class="fa-regular fa-trash-can"></i>


                                        </div>
                                    </div>
                                </div>
                            <?php }
                        } else { ?>

                            <div>
                                <h2>Data not found</h2>;

                            </div>
                        <?php } ?>

                    </div>

                    <!-- admin reply  message-->
                    <div>
                        <!-- <div class="admin_reply_min">
                            <div>
                                <img class="user_reply_img" src="" alt="">

                            </div>
                            <div>
                                <h3 class="comment_user_name">Admin - <span class="replay_second"> 10 seconds ago</span></h3>
                                <h3 class="comment_text">thank You For Comment</h3>


                            </div>
                        </div> -->
                    </div>

                </div>

            </div>


            <!-- comment section -->


            <div class="comment_min">
                <form method="post" action="">
                    <h2 class="text-xl font-semibold text-black">Comment</h2>
                    <div class="comment_flex">
                        <textarea placeholder="Comment...." name="comment_content"></textarea>


                    </div>

                    <div>
                        <button name="comment_post" class="banner_button1">Post Comment</button>
                    </div>

                </form>

            </div>




        </div>

    </div>
</section>



<style>


</style>



<?php





?>