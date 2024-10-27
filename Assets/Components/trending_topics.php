<div class="mt-20">
    <?php
    $host = "localhost";
    $user_name = 'root';

    $user_password = '';

    $database_name = 'echo_post';
    $database = new mysqli($host, $user_name, $user_password, $database_name);
    $sql = "SELECT * FROM categories LIMIT 4";
    $query = mysqli_query($database, $sql);
    $rows = mysqli_num_rows($query);


    ?>
    <div class="flex justify-center  items-center">
        <img class="w-5 h-5" src="http://localhost/EchoPost/Assets/Images/footer_image/pink-star (1).png" alt="">
        <img src="" alt="">
        <h2 class="text-xl text-black font-bold text-center">Trending Topics</h2>
    </div>
    <div class="w-10/12  bg-white shadow-md mt-10  rounded-full py-3 mx-auto ">

        <div class="flex justify-between px-16">

            <!-- first category -->
            <?php
            if ($rows) {
                while ($row = mysqli_fetch_assoc($query)) {




            ?>
                    <div class="w-32  ">

                        <a href="Assets/Components/category_single.php?id=<?php echo $row['category_id'] ?>">"
                            <div class="w-24 h-24 mx-auto shadow-xl hover:shadow-[<?php echo $row['category_color'] ?>] duration-500  rounded-full bg-[<?php echo $row['category_color'] ?>]">

                            <?php
                            $id = $row['category_id'];
                            
                            ?>
                                <button class="w-7 h-7 bg-[#FF2AAC] text-white font-bold text-lg rounded-full ml-16  ">2</button>


                            </div>
                        </a>
                        <h2 class="text-xl font-bold text-black text-center  pt-1"><?php echo $row['category_name'] ?></h2>

                    </div>


            <?php }
            } ?>


            <div class="flex gap-9 items-center">
                <h3 class="text-xl font-semibold text-black">or....</h3>
                <a href="./Assets/Components/all_category.php">
                    <button class="  w-36 h-12  md:block  rounded hover:bg-[#282424] duration-500 text-lg font-semibold text-white bg-[#6A4EE9]">
                        Explore All
                    </button>
                </a>

            </div>


        </div>



    </div>

</div>