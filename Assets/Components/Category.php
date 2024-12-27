<?php
include_once('./database.php');


$sql = "SELECT * FROM categories ";
$query = mysqli_query($database, $sql);
$rows = mysqli_num_rows($query);
?>

<section>
    <div class="px-16 mt-20">
        <!-- flex div -->
        <div class="flex justify-start gap-8 px-20 mx-auto ">
            <!-- category section -->
            <div>

                <!-- Topics Index -->
                <div class="flex items-center gap-2 relative right-8">

                    <img class="w-5 h-5" src="http://localhost/EchoPost/Assets/Images/footer_image/pink-star (1).png" alt="">
                    <h2 class="text-2xl font-bold text-black ">Topics Index</h2>
                </div>

                <div class="">
                    <!-- sidebar start -->
                    <div class="     py-2 flex flex-col   ">

                        <?php
                        if ($rows) {
                            while ($row = mysqli_fetch_assoc($query)) {




                        ?>

                                <ul class="basis-1/2">
                                    <!-- first category section -->
                                    <li>
                                        <div class="w-8 h-8 bg-[<?php echo $row['category_color'] ?>] rounded relative right-11 top-[32px]">
                                            <h3 class="text-lg font-bold text-white pl-3 pt-0.5 shadow-sm "><?php echo $row['category_id'] ?></h3>
                                        </div>

                                        <button class="relative  flex gap-6 items-center   font-semibold text-left  md:text-lg   " aria-expanded="false" onclick="toggleFAQ(this)">
                                            <?php
                                            if (isset($_SESSION['min_user_data'])) {
                                                #

                                            ?>
                                                <a class="hover:underline duration-500" href="Assets/Components/category_single.php?id=<?php echo $row['category_id'] ?>"><span class="flex-1 text-2xl text-black font-bold"><?php echo $row['category_name'] ?></span></a>
                                            <?php } else { ?>
                                                <a class="hover:underline duration-500" href="http://localhost/EchoPost/Echo_post.php"><span class="flex-1 text-2xl text-black font-bold"><?php echo $row['category_name'] ?></span></a>
                                            <?php } ?>


                                            <!-- <i class="fa-solid fa-turn-down relative  text-xl font-bold text-black"></i> -->
                                            <svg
                                                class="w-7 h-7 justify-end hover:rotate-180 group-hover:bg-gray-50 t ease-linear duration-300 rounded-full border border-gray-700 group-hover:border-none p-2 rotate-45"
                                                viewBox="0 0 16 19"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7 18C7 18.5523 7.44772 19 8 19C8.55228 19 9 18.5523 9 18H7ZM8.70711 0.292893C8.31658 -0.0976311 7.68342 -0.0976311 7.29289 0.292893L0.928932 6.65685C0.538408 7.04738 0.538408 7.68054 0.928932 8.07107C1.31946 8.46159 1.95262 8.46159 2.34315 8.07107L8 2.41421L13.6569 8.07107C14.0474 8.46159 14.6805 8.46159 15.0711 8.07107C15.4616 7.68054 15.4616 7.04738 15.0711 6.65685L8.70711 0.292893ZM9 18L9 1H7L7 18H9Z"
                                                    class="fill-gray-800 group-hover:fill-gray-800 text-black"></path>
                                            </svg>
                                        </button>
                                        <div class="transition-all duration-500 ease-in-out border-l-[3px] mt-4 pl-3  border-[<?php echo $row['category_color'] ?>] max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">

                                            <?php
                                            $cat_id = $row['category_id'];

                                            $title_sql = "SELECT  * FROM posts  WHERE category_id = '$cat_id'";
                                            $title_query = mysqli_query($database, $title_sql);

                                            $titles = mysqli_num_rows($title_query);
                                            if ($titles) {
                                                while ($title = mysqli_fetch_assoc($title_query)) {



                                            ?>



                                                    <ul class="list-disc relative  px-6 space-y-2">
                                                        <li class="text-lg text-black font-semibold"><?php echo $title['post_title'] ?> </li>
                                                    </ul>

                                            <?php  }
                                            } ?>


                                        </div>
                                    </li>











                                </ul>
                        <?php  }
                        } ?>
                    </div>

                    <script>
                        function toggleFAQ(button) {
                            const content = button.nextElementSibling;
                            button.setAttribute("aria-expanded", button.getAttribute("aria-expanded") === "false" ? "true" : "false");
                            content.style.maxHeight = button.getAttribute("aria-expanded") === "true" ? content.scrollHeight + "px" : "0";
                        }
                    </script>
                </div>
                <!-- sidebar end -->

            </div>
            <!-- post section -->

            <div>

                <?php include_once('./Assets/Components/side_post.php') ?>





            </div>
        </div>
    </div>
</section>