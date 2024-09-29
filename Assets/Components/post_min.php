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
        height: 250px;
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
        border-radius: 7px;
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
        height: 400px;
        /* border: 2px solid black; */
        margin-top: 50px;
    }








    textarea {
        width: 100%;
        height: 200px;
        padding: 12px 30px;
        box-sizing: border-box;
        box-shadow: 1px;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: white;
        font-size: 20px;
        resize: none;

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
</style>


<?php








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
                            <li> Planning Your Animation</li>
                            <li> Planning Your Animation</li>
                            <li> Planning Your Animation</li>
                            <li> Planning Your Animation</li>
                            <li> Planning Your Animation</li>
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







            <!-- comment section -->


            <div class="comment_min">
                <form method="post" action="">
                    <div>
                        <textarea>Comment...</textarea>
                    </div>
                    <div class="input_div">
                        <input class="input_1" type="text" name="connect_name" placeholder="Name">
                        <input class="input_1" type="text" name="Email" placeholder="Email">
                    </div>
                    <div>
                        <button class="banner_button1">Post Comment</button>
                    </div>

                </form>

            </div>

        </div>

    </div>
</section>