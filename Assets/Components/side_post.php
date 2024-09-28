<div class="space-y-4">

    <?php
    // $text = "  Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, natus consectetur libero nulla nam in neque. Id placeat omnis facilis officia deleniti veniam eaque voluptatem quae, nulla autem ad harum?";
    // echo substr("$text", 0, 200);


    $sql = "SELECT * FROM posts LEFT JOIN categories ON posts.category_id = categories.category_id LEFT JOIN users ON posts.user_id = users.user_id";

    $query = mysqli_query($database, $sql);
    $rows = mysqli_num_rows($query);
    if ($rows) {
        while ($row = mysqli_fetch_assoc($query)) {
            # code...



    ?>
            <!-- first post -->

            <div class="w-[900px]  h-80  relative bg-white shadow-md shrink rounded-sm ">
                <div class="flex  gap-5">
                    <!-- fist section -->
                    <div class="w-64 b">
                        <div>
                            <button class="px-5 py-2 hover:px-7 duration-500 bg-[<?php echo $row['category_color'] ?>] text-lg  text-white font-semibold rounded-r-full mt-8"><?php echo $row['category_name'] ?></button>
                        </div>
                        <div class="space-y-3 pt-6 pl-5">
                            <div class="flex items-center gap-3">
                                <i class="fa-solid fa-calendar-days text-lg text-[#6A4EE9]"></i>
                                <h2 class="text-lg text-[#6A4EE9] font-medium"> Jan 19, 2024</h2>
                            </div>
                            <div class="flex items-center gap-3">
                                <i class="fa-solid fa-stopwatch text-lg text-[#6A4EE9]"></i>

                                <h2 class="text-lg text-[#6A4EE9] font-medium"> 1 Min Read</h2>
                            </div>
                            <div class="flex items-center gap-3">
                                <i class="fa-solid fa-award text-lg text-[#6A4EE9]"></i>
                                <h2 class="text-lg text-[#6A4EE9] font-medium"> Difficulty:</h2>
                            </div>
                            <div class="pl-7">
                                <div class="rating rating-md">
                                    <input type="radio" name="rating-1" class="mask mask-star bg-orange-400 " defaultChecked />
                                    <input type="radio" name="rating-1" class="mask mask-star bg-orange-400" defaultChecked />
                                    <input type="radio" name="rating-1" class="mask mask-star bg-orange-400" defaultChecked />

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- second section -->
                    <div class=" pt-12">
                        <div>
                            <a href="Assets/Components/single_post.php?id=<?php echo $row['post_id']?>">
                                <h1 class="text-2xl font-bold text-black hover:underline duration-300"><?php echo $row['post_title'] ?></h1>
                            </a>
                            <p class="  pt-8"><?php echo $row['post_text'] ?></p>
                        </div>
                        <div class="flex justify-between pt-16">
                            <div>
                                <a class="" href="">
                                    <span class="w-2.5 h-2.5 bg-blue-700 rounded-full hover:w-4 flex duration-300"><span class="text-sm text-black font-medium  relative bottom-1.5 left-5">code</span></span>
                                </a>
                            </div>
                            <div class="flex items-center gap-2 pr-9 ">
                                <img class="w-8 h-8 object-cover rounded-full" src="Admin/upload/<?php echo $row['user_image'] ?>" alt="">
                                <h3 class="text-lg font-bold text-black"><?php echo ucwords($row['user_name']) ?></h3>

                            </div>
                        </div>

                    </div>
                </div>

            </div>














    <?php  }
    } ?>

</div>