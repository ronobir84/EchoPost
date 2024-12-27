 <? ob_start() ?>
 <?php session_start() ?>

 <?php
    // include_once('./database.php');
    // if (!isset($_SESSION['min_user_data'])) {
    //     echo "<script>window.location.href='http://localhost/EchoPost/Echo_post.php'</script>";
    // }


    ?>


 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>EchoPost</title>
     <!-- #Cuastom CSS File -->
     <link rel="stylesheet" href="./Assets/Css/index.css">
     <!-- #Tailwind CDN -->
     <script src="https://cdn.tailwindcss.com"></script>
     <!-- #DaisyUI CDN -->
     <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
     <!-- #Fontawesome CDN -->
     <script src="https://kit.fontawesome.com/337002c4cc.js" crossorigin="anonymous"></script>
     <link
         rel="stylesheet"
         href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


     <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />


 </head>


 <body>


     <header id="header_component" class="py-5 bg-[#F3F4F6] ">
         <nav style="width: 85%;" class="current__header      z-50  bg-white  rounded-full border border-black-200 text-black duration-150 px-8 mx-auto">

             <div class="navbar justify-between ">
                 <div class="fixed top-0 left-0 w-full z-30 h-2">
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
                 <div class=" ">
                     <button class="" onclick="searchModal.showModal()">
                         <i class="fa-solid fa-magnifying-glass text-[#6A4EE9]"></i>
                         <span>Quick Search...</span>
                     </button>
                 </div>
                 <div class="">
                     <a class="" href="">

                         <img class="w-52 h-20 object-cover" src="http://localhost/EchoPost/Assets/Images/echopost-logo.png" alt="">

                     </a>
                 </div>





                 <div class="   ">
                    
                         <div class="flex gap-6 items-center relative right-5 ">
                             <h3 class="text-lg text-[#6A4EE9]  font-bold ">
                                 <?php
                                    if (isset($_SESSION['min_user_data'])) {
                                        $name_data = ucwords($_SESSION['min_user_data'][1]);
                                        echo $name_data;
                                        
                                    }

                                    ?>
                             </h3>
                             <?php
                                if (isset($_SESSION['min_user_data'])) {
                                    $user_image = $_SESSION['min_user_data'][0];
                                }


                                ?>

                             <a class="h-12  w-12 " href="http://localhost/EchoPost/Assets/Components/profile.php?id=<?php echo $user_image ?>">
                                 <?php
                                    if (isset($_SESSION['min_user_data'])) {
                                        $user_image = $_SESSION['min_user_data'][4];
                                    }
                                    ?>
                                 <img class="rounded-full  " src="http://localhost/EchoPost/Admin/upload/<?php echo $user_image ?> " alt="">

                             </a>
                         </div>
                     




                     <div class="drawer drawer-end s">
                         <input id="nav-drawer" type="checkbox" class="drawer-toggle" />
                         <div class="drawer-content">
                             <!-- Page content here -->
                             <label for="nav-drawer" class="drawer-button cursor-pointer">
                                 <img class="w-10 h-10" src="https://icons.iconarchive.com/icons/ionic/ionicons/256/grid-icon.png" alt="">
                             </label>

                         </div>
                         <div class="drawer-side">
                             <label for="nav-drawer" aria-label="close sidebar"
                                 class="bg-[#6A4EE9] text-white rounded-l-full pl-4 pr-6 py-2 hover:pr-8 duration-300 absolute top-8 right-0 cursor-pointer">
                                 <i class="fa-solid fa-xmark fa-2x"></i>
                             </label>
                             <label for="nav-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                             <ul class=" bg-white    min-h-full w-96 px-14 ">
                                 <label for="nav-drawer" aria-label="close sidebar"
                                     class="bg-[#6A4EE9] text-white rounded-l-full pl-4 pr-6 py-3 hover:pr-8 duration-300 absolute top-5 right-0 cursor-pointer">
                                     <i class="fa-solid fa-xmark fa-2x"></i>
                                 </label>


                                 <div class="relative top-20 space-y-8">
                                     <li class="">
                                         <a class="relative left-6" href="index.php">
                                             <img class="w-52 h-20 object-cover" src="http://localhost/EchoPost/Assets/Images/echopost-logo.png" alt="">
                                         </a>
                                     </li>
                                     <!-- sidevar drop down section -->

                                     <li>



                                         <a href="" class="flex gap-1">
                                             <img class="w-5 h-5" src="http://localhost/EchoPost/Assets/Images/footer_image/pink-star (1).png">

                                             <h4 class=" text-xl font-bold text-black hover:underline duration-300">
                                                 Home
                                             </h4>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="" class="flex gap-1">
                                             <img class="w-5 h-5" src="http://localhost/EchoPost/Assets/Images/footer_image/pink-star (1).png">

                                             <h4 class="text-xl font-bold text-black hover:underline duration-300">
                                                 Product
                                             </h4>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="" class="flex gap-1">
                                             <img class="w-5 h-5" src="http://localhost/EchoPost/Assets/Images/footer_image/pink-star (1).png">

                                             <h4 class="text-xl font-bold text-black hover:underline duration-300">
                                                 Shop
                                             </h4>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="" class="flex gap-1">
                                             <img class="w-5 h-5" src="http://localhost/EchoPost/Assets/Images/footer_image/pink-star (1).png">

                                             <h4 class="text-xl font-bold text-black hover:underline duration-300">
                                                 Category
                                             </h4>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="" class="flex gap-1">
                                             <img class="w-5 h-5" src="http://localhost/EchoPost/Assets/Images/footer_image/pink-star (1).png" alt="">

                                             <h4 class="text-xl font-bold text-black hover:underline duration-300">
                                                 Features
                                             </h4>
                                         </a>



                                     </li>
                                     <li>



                                         <a href="" class="flex gap-1">
                                             <img class="w-5 h-5" src="http://localhost/EchoPost/Assets/Images/footer_image/pink-star (1).png">

                                             <h4 class="text-xl font-bold text-black hover:underline duration-300">
                                                 Explore Categories 🚀
                                             </h4>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="./admin_login.php">
                                             <button class="px-5  mt-4   md:block py-2.5 rounded hover:bg-[#282424] duration-500 text-lg font-semibold text-white bg-[#6A4EE9]">
                                                 Sign In
                                             </button>
                                         </a>
                                     </li>
                                 </div>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </nav>
     </header>

     <!-- Search Modal -->
     <!--  -->
     <dialog id="searchModal" class="modal">
         <div class="modal-box bg-transparent shadow-none max-w-3xl">
             <p class="pb-10 text-center text-3xl font-bold text-white">Press ESC to close</p>
             <form class="flex " action="">
                 <input placeholder="Type to start your search" class="w-full h-16 duration-200 rounded  px-4 bg-white text-black focus:outline-none " type="text">
                 <button class="px-7 py-2.5 absolute right-0  mr-8  mt-2 rounded hover:bg-[#282424] duration-500 text-lg font-semibold text-white bg-[#6A4EE9]">Search</button>
             </form>
         </div>
         <form method="dialog" class="modal-backdrop">
             <button>close</button>
         </form>
     </dialog>