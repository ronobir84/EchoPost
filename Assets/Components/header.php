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
                     <?php echo $_SESSION['image'] ?>
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
                         <label for="nav-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                         <ul class=" bg-white    min-h-full w-96 px-14 ">


                             <div class="relative top-20 space-y-8">
                                 <li class="">
                                     <a class="relative left-6" href="index.php">
                                         <?php echo $_SESSION['image'] ?>
                                     </a>
                                 </li>
                                 <!-- sidevar drop down section -->

                                 <li>



                                     <a href="" class="flex gap-1">
                                         <span><?php echo $_SESSION['image2'] ?></span>

                                         <h4 class="text-xl font-bold text-black hover:underline duration-300">
                                             Home
                                         </h4>
                                     </a>



                                 </li>
                                 <li>



                                     <a href="" class="flex gap-1">
                                         <span><?php echo $_SESSION['image2'] ?></span>

                                         <h4 class="text-xl font-bold text-black hover:underline duration-300">
                                             Product
                                         </h4>
                                     </a>



                                 </li>
                                 <li>



                                     <a href="" class="flex gap-1">
                                         <span><?php echo $_SESSION['image2'] ?></span>

                                         <h4 class="text-xl font-bold text-black hover:underline duration-300">
                                             Shop
                                         </h4>
                                     </a>



                                 </li>
                                 <li>



                                     <a href="" class="flex gap-1">
                                         <span><?php echo $_SESSION['image2'] ?></span>

                                         <h4 class="text-xl font-bold text-black hover:underline duration-300">
                                             Category
                                         </h4>
                                     </a>



                                 </li>
                                 <li>



                                     <a href="" class="flex gap-1">
                                         <span><?php echo $_SESSION['image2'] ?></span>

                                         <h4 class="text-xl font-bold text-black hover:underline duration-300">
                                             Features
                                         </h4>
                                     </a>



                                 </li>
                                 <li>



                                     <a href="" class="flex gap-1">
                                         <span><?php echo $_SESSION['image2'] ?></span>

                                         <h4 class="text-xl font-bold text-black hover:underline duration-300">
                                             Explore Categories 🚀
                                         </h4>
                                     </a>



                                 </li>


                                 <li>
                                     <button class="px-5  mt-4   md:block py-2.5 rounded hover:bg-[#282424] duration-500 text-lg font-semibold text-white bg-[#6A4EE9]">
                                         Sign In
                                     </button>
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