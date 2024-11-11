<div class="space-y-4">

    <?php
    $limit = 2;

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $offset = ($page - 1) * $limit;


    $sql = "SELECT * FROM posts LEFT JOIN categories ON posts.category_id = categories.category_id LEFT JOIN users ON posts.user_id = users.user_id  ORDER BY posts.publish_date DESC LIMIT $offset, $limit";

    $query = mysqli_query($database, $sql);
    $rows = mysqli_num_rows($query);
    if ($rows) {
        while ($row = mysqli_fetch_assoc($query)) {
            # code...



    ?>
            <!-- first post -->

            <div class="w-[950px]   h-80  relative bg-white shadow-md shrink rounded-sm ">
                <div class="flex  justify-between ">
                    <!-- fist section -->
                    <div class="w-[27%] ">
                        <div>
                            <button class="px-5 py-2 hover:px-7 duration-500 bg-[<?php echo $row['category_color'] ?>] text-lg  text-white font-semibold rounded-r-full mt-8"><?php echo $row['category_name'] ?></button>
                        </div>
                        <div class="space-y-3 pt-6 pl-5">
                            <div class="flex items-center gap-3">
                                <i class="fa-solid fa-calendar-days text-lg text-[#6A4EE9]"></i>
                                <h2 class="text-lg text-[#6A4EE9] font-medium"><?php echo date("M  j,  Y", strtotime($row['publish_date'])) ?></h2>
                            </div>
                            <div class="flex items-center gap-3">
                                <i class="fa-solid fa-stopwatch text-lg text-[#6A4EE9]"></i>

                                <h2 class="text-lg text-[#6A4EE9] font-medium"> <?php echo date("i", strtotime($row['publish_date'])) ?> Min Read</h2>
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
                    <div class=" relative top-11 pr-4 w-[95%] ">
                        <div>
                            <a class="" href="Assets/Components/single_post.php?id=<?php echo $row['post_id'] ?>">
                                <h1 class="text-2xl font-bold text-black hover:underline duration-300 "><?php echo $row['post_title'] ?></h1>
                            </a>
                            <p class="text-gray-800 font-medium  text-base  pt-8"><?php echo $row['post_text'] ?></p>
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

    <!-- pagination -->

    <?php

    $pagination = "SELECT * FROM posts";
    $page_result = mysqli_query($database, $pagination);

    if (mysqli_num_rows($page_result) > 0) {

        $total_records = mysqli_num_rows($page_result);
        $total_page = ceil($total_records / $limit)


    ?>


        <!-- -------------------- -->


        <div>
            <nav class="" aria-label="Pagination">


                <ul class="mb-4 flex justify-center space-x-4">
                    <li>
                        <?php
                        if ($page > 1) {


                        ?>
                            <a class="rounded-full border text-lg font-bold  border-[#9333EA]  px-3.5 py-2.5 text-black" href="index.php?page=<?php echo $page - 1 ?>"><i class="fa-solid fa-angle-left fa-lg"></i></a>
                        <?php } ?>
                    </li>

                    <?php
                    for ($i = 1; $i <= $total_page; $i++) {




                    ?>
                        <li>
                            <?php

                            if ($i == $page) {
                            ?>
                                <a class="rounded-full border   text-lg font-bold bg-[#9333EA] border-[#9333EA]  px-[18px] py-[10px] text-white" href="index.php?page=<?php echo $i ?>"><?php echo $i ?></a>
                            <?php

                            } else {
                            ?>
                                <a class="rounded-full border text-lg hover:bg-[#9333EA] duration-500 font-bold  border-[#9333EA]  px-[18px] py-[10px] text-black" href="index.php?page=<?php echo $i ?>"><?php echo $i ?></a>


                            <?php

                            }
                            ?>
                        </li>
                    <?php } ?>


                    <li>
                        <?php
                        if ($page < $total_page) {


                        ?>
                            <a class="rounded-full border text-lg font-bold  border-[#9333EA]  px-3.5 py-2.5 text-black" href="index.php?page=<?php echo $page + 1 ?>"><i class="fa-solid fa-angle-right fa-lg"></i></a>
                        <?php } ?>
                    </li>
                </ul>


            </nav>
        </div>

    <?php } ?>

</div>