<?php ob_start(); ?>
<?php include('./header.php') ?>

<?php

$host = "localhost";
$user_name = 'root';

$user_password = '';

$database_name = 'echo_post';
$database = new mysqli($host, $user_name, $user_password, $database_name);
$category_id = $_GET['id'];
if (empty($category_id)) {
    header("Location: http://localhost/EchoPost/index.php");
}

$category_query = mysqli_query($database, "SELECT * FROM categories LEFT JOIN posts ON posts.category_id=categories.category_id  WHERE  posts.category_id = '$category_id'" );

$cat_res = mysqli_fetch_assoc($category_query);



 


?>



<?php
$post_sql =  "SELECT * FROM posts LEFT JOIN categories ON posts.category_id = categories.category_id LEFT JOIN users ON posts.user_id = users.user_id WHERE posts.category_id = '$category_id' ORDER BY posts.publish_date DESC";

$post_query = mysqli_query($database, $post_sql);

$rows = mysqli_num_rows($post_query);



?>



<div class="bg-[#F3F4F6]">
    <div class="flex justify-center gap-16 items-center pt-14">
        <div class="flex  items-center w-96  ">
            <div class="w-24 h-24 mx-auto shadow-xl  duration-500  rounded-full bg-[<?php echo $cat_res['category_color'] ?>]">


            </div>
            <div>
                <h1 class="text-4xl text-black font-bold "><?php echo $cat_res['category_name'] ?></h1>
                <h3 class="text-xl font-medium text-gray-600 mt-2">A collection of <span class="font-bold text-black">4 posts</span></h3>

            </div>
        </div>
        <div class="border-l-2 border-gray-400 pl-16">
            <div class="w-[500px]  text-center">
                <p class="text-xl font-semibold text-gray-600"><?php echo $cat_res['post_text'] ?></p>
            </div>
        </div>
    </div>


    <div>

        <div class="grid grid-cols-3 px-40 mt-14 gap-5">
            <?php
            if ($rows) {
                while ($row = mysqli_fetch_assoc($post_query)) {



            ?>
                    <!-- first card -->
                    <div class="w-[420px]  pb-6 border-2 border-gray-300 bg-[#FFFFFF] rounded shadow">
                        <div class="mt-5 flex justify-between">
                            <div>
                                <button class="px-5 py-2.5 bg-[<?php echo $row['category_color'] ?>] text-sm font-bold text-white hover:px-7 duration-500 rounded-r-full"><?php echo $row['category_name'] ?></button>
                            </div>
                            <div class="flex items-center  gap-2 pr-5">
                                <i class="fa-solid fa-award  text-blue-700 fa-lg"></i>
                                <h4 class=" text-blue-700">Difficulty : <span class="fa fa-star checked text-orange-400"></span>
                                    <span class="fa-regular fa-star checked text-orange-400 checked"></span>
                                    <span class="fa-regular fa-star checked text-orange-400 checked"></span>
                                    <span class="fa-regular fa-star text-orange-400"></span>
                                </h4>
                            </div>
                        </div>
                        <div class="w-72 text-center mx-auto pt-6">
                            <a href="">
                                <h1 class="text-2xl font-bold text-[#282424] hover:underline duration-700"><?php echo $row['post_title'] ?></h1>
                            </a>
                        </div>
                        <div class="w-96 text-center mx-auto pt-7">
                            <p class="text-lg font-medium text-gray-500"><?php echo $row['post_text'] ?></p>
                        </div>
                        <div class="flex w-72 mx-auto gap-6 items-center   mt-5">
                            <div class="flex gap-3 items-center">
                                <img class="w-8 h-8 rounded-full" src="../../Admin/upload/<?php echo $row['user_image'] ?>" alt="">
                                <h2 class="text-lg font-semibold text-black"><?php echo $row['user_name'] ?></h2>
                            </div>
                            <div class="flex gap-2 ">
                                <i class="fa-solid fa-stopwatch text-lg text-[#6A4EE9]"></i>

                                <h2 class="text-lg text-[#6A4EE9] font-medium"> <?php echo date("i", strtotime($row['publish_date'])) ?> Min Read</h2>
                            </div>
                        </div>

                    </div>

                <?php
                }
            } else {
                ?>
                <h1>Not Data</h1>
            <?php
            }
            ?>


        </div>


    </div>

</div>








<?php include('./footer.php') ?>