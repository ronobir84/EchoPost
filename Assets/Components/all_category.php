 <div class="fixed top-0 left-0 w-full z-30 h-2 bg-gray-300">
     <div class="h-full bg-green-400" id="readingProgress" style="width: 0;"></div>
 </div>

 <script>
     window.addEventListener("scroll", function() {
         var scrollY = window.pageYOffset || document.documentElement.scrollTop;
         var winHeight = window.innerHeight || document.documentElement.clientHeight;
         var docHeight = document.body.scrollHeight || document.documentElement.scrollHeight;
         var scrollPercent = (scrollY / (docHeight - winHeight)) * 100;
         document.querySelector("#readingProgress").style.width = scrollPercent + "%";
     });
 </script>

 <div class="">
     <?php include_once('./header.php') ?>
 </div>




 <?php
    $host = "localhost";
    $user_name = 'root';

    $user_password = '';

    $database_name = 'echo_post';
    $database = new mysqli($host, $user_name, $user_password, $database_name);

    $sql = "SELECT * FROM categories";
    $query = mysqli_query($database, query: $sql);
    $rows = mysqli_num_rows($query);


    ?>
 <div class="bg-[#F3F4F6]  ">
     <div class="text-center relative top-12">
         <h2 class="text-5xl font-black text-black">Explore our Categories ✨</h2>
         <p class="text-lg font-medium text-gray-800 w-[45%] mx-auto mt-6">Whether you’re a photography aficionado or simply intrigued by the art of visual storytelling, our blog is your gateway to exploring the mesmerizing world of renowned photographers and the captivating narratives.</p>
     </div>


     <div class="w-[70%] mx-auto py-10 mt-20 bg-white border-[1px] border-gray-300 shadow-xl rounded">

         <div class="grid grid-cols-4 gap-4 px-14">
             <?php
                if ($rows) {
                    while ($row = mysqli_fetch_array($query)) {



                ?>
                     <!--  -->
                     <div class="">

                         <div class=" grid grid-cols-2 items-center text-center w-56">
                             <a href="category_single.php?id=<?php echo $row['category_id'] ?>">
                                 <div class="w-24 h-24 mx-auto shadow-xl hover:shadow-[<?php echo $row['category_color'] ?>] duration-500  rounded-full bg-[<?php echo $row['category_color'] ?>]">


                                 </div>
                             </a>
                             <div>
                                 <h2 class="text-xl font-bold text-black text-center  pt-1"><?php echo $row['category_name'] ?></h2>
                                 <?php
                                    $id = $row['category_id'];
                                    $countData = "SELECT COUNT(post_id) AS count_data FROM posts LEFT JOIN categories ON posts.category_id = categories.category_id WHERE posts.category_id = '$id'";
                                    $countResult = $database->query($countData);

                                    if ($countResult) {
                                        while ($data = $countResult->fetch_assoc()) {



                                    ?>
                                         <h2 class="text-base mt-1 text-gray-700 font-semibold"> <span class="text-black font-bold mr-1"><?php echo $data['count_data']; ?> </span> Articles</h2>

                                 <?php
                                        }
                                    }
                                    ?>

                             </div>
                         </div>


                     </div>
             <?php
                    }
                }
                ?>


         </div>



     </div>

 </div>





 <?php include_once('./footer.php') ?>