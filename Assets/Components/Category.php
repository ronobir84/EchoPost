<?php
include_once('./database.php');
 
$sql = "SELECT * FROM posts LEFT JOIN categories ON posts.category_id = categories.category_id LEFT JOIN users ON posts.user_id = users.user_id";
$query = mysqli_query($database, $sql);
$rows = mysqli_num_rows($query);
?>

<section>
    <div class="px-16 mt-20">
        <!-- flex div -->
        <div class="flex justify-between px-20">
            <!-- category section -->
            <div>

                <!-- Topics Index -->
                <div class="flex items-center gap-2 relative right-8">
                    <img class="w-5 h-5" src="http://localhost/EchoPost/Assets/Images/footer_image/pink-star (1).png" alt="">
                    <h2 class="text-2xl font-bold text-black ">Topics Index </h2>
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
                                             
                                             
                                            <ol class="list-decimal relative left-7 px-4 space-y-2">
                                                <li class=""><?php echo $row['post_title'] ?></li>
                                                 
                                                
                                            </ol>

                                            
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