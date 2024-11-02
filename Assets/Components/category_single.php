 <div class="fixed top-0 left-0 w-full z-30 h-2 ">
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

    $category_query = mysqli_query($database, "SELECT * FROM categories LEFT JOIN posts ON  posts.category_id =  categories.category_id  WHERE categories.category_id = '$category_id'");
    $cat_res = mysqli_fetch_array($category_query);
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

                 <?php

                    $CountPost = "SELECT COUNT(post_id) as post_data  FROM posts  LEFT JOIN categories ON posts.category_id = categories.category_id WHERE posts.category_id = '$category_id'";


                    $countResult = $database->query($CountPost);


                    if ($countResult) {
                        while ($result = $countResult->fetch_assoc()) {


                    ?>
                         <h3 class="text-xl font-medium text-gray-600 mt-2">A collection of <span class="font-bold text-black"><?php echo $result['post_data'] ?> posts</span></h3>

                 <?php
                        }
                    } else {
                        echo "Not Data";
                    }


                    ?>

             </div>
         </div>
         <div class="border-l-2 border-gray-400 pl-16">
             <div class="w-[500px]  text-center">
                 <p class="text-xl font-semibold text-gray-600"><?php echo $cat_res['post_text'] ?></p>
             </div>
         </div>
     </div>


     <div class=" ">

         <div class="grid grid-cols-3 px-40 mt-14 gap-5 ">
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
                             <a href="../../Assets/Components/single_post.php?id=<?php echo $row['post_id'] ?>">
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
         </div>

         <div class="">
             <section class="bg-white dark:bg-gray-900">
                 <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                     <div class="mx-auto max-w-screen-sm text-center">
                         <h1 class="mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl text-red-400">404</h1>
                         <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-4xl dark:text-white">Something's missing.</p>
                         <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">Sorry, we can't find that page. You'll find lots to explore on the home page. </p>
                         <a href="../../index.php" class="">
                             <button
                                 type="submit"
                                 class="flex justify-center gap-2 items-center mx-auto shadow-xl text-lg bg-gray-50 backdrop-blur-md lg:font-semibold isolation-auto border-gray-50 before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full before:-left-full before:hover:left-0 before:rounded-full before:bg-emerald-500 hover:text-gray-50 before:-z-10 before:aspect-square before:hover:scale-150 before:hover:duration-700 relative z-10 px-4 py-2 overflow-hidden border-2 rounded-full group text-black font-semibold ">
                                 Back Home
                                 <svg
                                     class="w-8 h-8 justify-end group-hover:rotate-90 group-hover:bg-gray-50 text-gray-50 ease-linear duration-300 rounded-full border border-gray-700 group-hover:border-none p-2 rotate-45"
                                     viewBox="0 0 16 19"
                                     xmlns="http://www.w3.org/2000/svg">
                                     <path
                                         d="M7 18C7 18.5523 7.44772 19 8 19C8.55228 19 9 18.5523 9 18H7ZM8.70711 0.292893C8.31658 -0.0976311 7.68342 -0.0976311 7.29289 0.292893L0.928932 6.65685C0.538408 7.04738 0.538408 7.68054 0.928932 8.07107C1.31946 8.46159 1.95262 8.46159 2.34315 8.07107L8 2.41421L13.6569 8.07107C14.0474 8.46159 14.6805 8.46159 15.0711 8.07107C15.4616 7.68054 15.4616 7.04738 15.0711 6.65685L8.70711 0.292893ZM9 18L9 1H7L7 18H9Z"
                                         class="fill-gray-800 group-hover:fill-gray-800"></path>
                                 </svg>
                             </button>


                         </a>
                     </div>
                 </div>
             </section>


         </div>

     <?php
                }
        ?>





     </div>

 </div>








 <?php include('./footer.php') ?>