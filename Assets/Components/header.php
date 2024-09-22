 <?php session_start() ?>

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
 <?php


    // $image2 = '<img class="w-5 h-5" src="./Assets/Images/footer_image/pink-star (1).png" alt="">';
    // $_SESSION['image2'] = $image2;







    ?>
 <header id="header_component" class="py-5">
     <nav class="current__header  w-10/12  z-50 bg-white rounded-full border border-black-200 text-black duration-150 px-8">
         <div class="navbar justify-between ">
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
             <div class=" flex gap-7 ">
                 <button class="px-5   md:block py-2.5 rounded hover:bg-[#282424] duration-500 text-lg font-semibold text-white bg-[#6A4EE9]">
                     Subscribe
                 </button>
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
                                     <a href="./login.php">
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
             <input placeholder="Type to start your search" class="w-full h-16 duration-200 rounded  px-4 bg-white text-black " type="text">
             <button class="px-7 py-2.5 absolute right-0  mr-8  mt-2 rounded hover:bg-[#282424] duration-500 text-lg font-semibold text-white bg-[#6A4EE9]">Search</button>
         </form>
     </div>
     <form method="dialog" class="modal-backdrop">
         <button>close</button>
     </form>
 </dialog>