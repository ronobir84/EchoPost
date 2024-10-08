<?php
include_once('./database.php');


$sql = "SELECT * FROM categories LIMIT 4";
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

                                        <button class="relative  flex gap-6 items-center   font-semibold text-left  md:text-lg  " aria-expanded="false" onclick="toggleFAQ(this)">

                                            <a class="hover:underline duration-500" href=""><span class="flex-1 text-2xl text-black font-bold"><?php echo $row['category_name'] ?></span></a>
                                            <i class="fa-solid fa-turn-down relative  text-xl font-bold text-black"></i>
                                        </button>
                                        <div class="transition-all duration-500 ease-in-out border-l-[3px] mt-4  border-gray-300 max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">

                                            <?php
                                            $cat_id = $row['category_id'];

                                            $title_sql = "SELECT  * FROM posts  WHERE category_id = '$cat_id'";
                                            $title_query = mysqli_query($database, $title_sql);

                                            $titles = mysqli_num_rows($title_query);
                                            if ($titles) {
                                                while ($title = mysqli_fetch_assoc($title_query)) {



                                            ?>



                                                    <ol class="list-decimal relative  px-6 space-y-2">
                                                        <li class=""><?php echo $title['post_title'] ?> </li>
                                                    </ol>

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