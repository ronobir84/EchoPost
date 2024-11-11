<?php
include_once('../../database.php');

$page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1);

?>
<style>
    .active {
        background-color: #6A4EE9;
    }
</style>



<div class="w-60 py-12 h-[450px] bg-[#170F21]">
    <ul class=" " id="">
        <!-- Sidebar - Brand -->


        <div class="space-y-10 p-2 px-7">

            <li>
                <a class="   flex hover:bg-[#6A4EE9]   gap-3 px-2 items-center  py-1.5  text-white rounded-sm  duration-500  0    w-40  mt-4  <?= $page == "profile.php" ? 'active' : '' ?>" href="profile.php">
                    <i class="fa-solid fa-user text-lg"></i>

                    <button class="text-lg font-semibold ">Profile</button>
                </a>
            </li>



            <li>
                <a class="flex  gap-3 px-2 items-center  py-1.5  text-white rounded-sm hover:bg-[#6A4EE9] duration-500   w-36 <?= $page == "blogs.php" ? 'active' : ''; ?>" href="blogs.php">
                    <i class="fa-solid fa-gear text-lg"></i>
                    <button class="text-lg font-semibold ">Settings</button>
                </a>
            </li>
            <li>
                <a class="flex  gap-3 px-2 items-center  py-1.5  text-white rounded-sm hover:bg-[#6A4EE9] duration-500   w-40 <?= $page == "comments.php" ? 'active' : ''; ?> " href=" comments.php">
                    <i class="fa-solid fa-comment text-lg"></i>

                    <button class="text-lg font-semibold ">Comments</button>
                </a>
            </li>

            <li>
                <a class="flex  gap-3 px-2 items-center  py-1.5  text-white rounded-sm hover:bg-[#6A4EE9] duration-500   w-40 <?= $page == "comments.php" ? 'active' : ''; ?> " href="http://localhost/EchoPost/post_logout.php">
                    <i class="fa-solid fa-right-from-bracket text-lg"></i>

                    <button class="text-lg font-semibold ">Logout</button>
                </a>
            </li>









        </div>
    </ul>
</div>