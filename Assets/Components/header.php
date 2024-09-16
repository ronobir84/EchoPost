 <header id="header_component" class="py-5">
     <nav class="current__header bg-white rounded-full border border-black-200 text-black duration-150 px-4">
         <div class="navbar justify-between">
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
             <div class=" ">
                 <button class="px-4 py-2 bg-[#6A4EE9]">
                     Subscribe
                 </button>
                 <div class="drawer drawer-end">
                     <input id="nav-drawer" type="checkbox" class="drawer-toggle" />
                     <div class="drawer-content">
                         <!-- Page content here -->
                         <label for="nav-drawer" class="drawer-button cursor-pointer">
                             Side
                         </label>

                     </div>
                     <div class="drawer-side">
                         <label for="nav-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                         <ul class="menu bg-base-200 text-base-content min-h-full w-80 p-4">
                             <!-- Sidebar content here -->
                             <li><a>Sidebar Item 1</a></li>
                             <li><a>Sidebar Item 2</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </nav>
 </header>

 <!-- Search Modal -->
 <dialog id="searchModal" class="modal">
     <div class="modal-box">
         <h3 class="text-lg font-bold">Hello!</h3>
         <p class="py-4">Press ESC key or click outside to close</p>
     </div>
     <form method="dialog" class="modal-backdrop">
         <button>close</button>
     </form>
 </dialog>