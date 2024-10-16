 

 <div class="">
     <?php include_once('header.php') ?>
 </div>




<?php
    $host = "localhost";
    $user_name = 'root';

    $user_password = '';

    $database_name = 'echo_post';
$database = new mysqli($host, $user_name, $user_password, $database_name);

$sql = "SELECT * FROM categories";
$query = mysqli_query( $database, query: $sql);
$rows = mysqli_num_rows($query);


?>
 <div class="bg-[#F3F4F6] min-h-screen">
     <div class="text-center relative top-12">
         <h2 class="text-5xl font-black text-black">Explore our Categories ✨</h2>
         <p class="text-lg font-medium text-gray-800 w-[45%] mx-auto mt-6">Whether you’re a photography aficionado or simply intrigued by the art of visual storytelling, our blog is your gateway to exploring the mesmerizing world of renowned photographers and the captivating narratives.</p>
     </div>


     <div class="mx-36 mt-24 py-14 bg-white border-[1px] border-gray-300 shadow-md rounded-sm">
         
                 <div class="grid grid-cols-5 gap-20  px-14 pl-[20%] ">
                    <?php 
                    if ($rows) {
                        while ($row = mysqli_fetch_array($query)) {
                             
                        
                    
                    ?>
                     <!--  -->
                     <div class="w-32  ">

                         <div class="w-24 h-24 mx-auto shadow-xl hover:shadow-[<?php echo $row['category_color']?>] duration-500  rounded-full bg-[<?php echo $row['category_color']?>]">


                         </div>
                         <h2 class="text-xl font-bold text-black text-center  pt-1"><?php echo $row['category_name'] ?></h2>

                     </div>
                     <?php
                        }
                    }
                     ?>
                      
                     
                 </div>

         

     </div>

 </div>





 <?php include_once('footer.php') ?>