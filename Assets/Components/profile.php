<?php ob_start() ?>
<?php include_once('header.php') ?>


<?php
include('../../database.php');
$id = $_GET['id'];
$profile_sql = "SELECT * FROM post_users WHERE post_user_id = '$id'";
$profile_query = mysqli_query($database, $profile_sql);
$result = mysqli_fetch_assoc($profile_query);



?>


<section class="w-full bg-[#F3F4F6]">
    <!-- container -->
    <div class="w-[80%] mx-auto    border-2 border-black bg-[#F3F4F6] ">
        <!-- flex min section -->
        <div class="flex ">
            <!-- side bar -->
            <div>
                <?php include_once('profile_sidebar.php') ?>
            </div>


            <!-- min content -->
            <div class="w-full py-12 bg-[#170F21] p ">
                <div class=" ">
                    <!-- Card start -->
                    <div class="max-w-lg mx-auto items-center bg-white dark:bg-[#6A4EE9]  overflow-hidden shadow-lg ">
                        <div class="px-4 py-6">
                            <div class="flex justify-end mr-4 mt-4">


                                <div class="group relative inline-block ">

                                    <!-- <button class="btn" onclick="my_modal_1.showModal()">open modal</button> -->
                                    <dialog id="<?php echo $id ?>" class="modal">
                                        <div class="bg-white w-[500px] h-[420px]">

                                            <div class="modal-action  absolute ml-[26%]">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="w-8 h-8 hover:bg-black duration-500 bg-red-600 rounded-full relative bottom-2"><i class="fa-solid fa-xmark fs-2xl text-white"></i></button>
                                                </form>
                                            </div>
                                            <form action="">

                                                <div class="px-9 mt-16">
                                                    <div class="flex justify-between mt-5">
                                                        <input name="images" type="file" class="rounded bg-gray-200 px-4  text-black  py-2.5 w-full  focus:outline-none   transition ease-in-out duration-150">
                                                        <img class="w-[60px] h-[60px] rounded-full absolute  right-[38%] p-2" src="http://localhost/EchoPost/Admin/upload/20240419_171936_lmc_8.4.NIGHT-01.jpeg.jpg" alt="">
                                                    </div>
                                                    <div class="mt-5">
                                                        <input placeholder="name" name="user_name" type="text" class="rounded bg-gray-200 px-4  text-black  py-2.5 w-full  focus:outline-none   transition ease-in-out duration-150">
                                                    </div>
                                                    <div class="mt-5">
                                                        <input placeholder="email" name="user_email" type="email" class="rounded bg-gray-200 px-4  text-black  py-2.5 w-full  focus:outline-none   transition ease-in-out duration-150">
                                                    </div>
                                                    <div class="mt-5">
                                                        <div class="" x-data="{ show: true }">

                                                            <div class="relative">
                                                                <input value="<?php echo $user_password ?>" name="new_password" placeholder="confirm Password" :type="show ? 'password' : 'text'" class=" rounded bg-gray-200 px-4  text-black  py-2.5 w-full  focus:outline-none   transition ease-in-out duration-150">
                                                                <div class="absolute inset-y-0 right-0 pr-4 flex items-center text-sm leading-5">
                                                                    <svg class="h-6 text-gray-700 cursor-pointer" fill="none" @click="show = !show"
                                                                        :class="{'block': !show, 'hidden':show }" xmlns="http://www.w3.org/2000/svg"
                                                                        viewbox="0 0 640 512">
                                                                        <path fill="currentColor"
                                                                            d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                                                        </path>
                                                                    </svg>

                                                                    <svg class="h-6 text-gray-700 cursor-pointer" fill="none" @click="show = !show"
                                                                        :class="{'hidden': !show, 'block':show }" xmlns="http://www.w3.org/2000/svg"
                                                                        viewbox="0 0 576 512">


                                                                        <path fill="currentColor"
                                                                            d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                                                        </path>
                                                                    </svg>



                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="mt-5">
                                                        <button class="w-full h-10 bg-[#6A4EE9] text-white font-semibold text-lg hover:bg-black duration-300">Update</button>

                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </dialog>



                                    <button onclick="document.getElementById('<?php echo $id ?>').showModal()" type=" button">
                                        <i class="fa-solid fa-ellipsis-vertical fa-xl text-white   duration-500 "></i>
                                    </button>




                                    <span
                                        class="absolute -top-11 left-1/2 transform -translate-x-1/2 z-20 px-6 py-2 text-base font-bold text-white bg-[#309267] rounded-md shadow-lg transition-transform duration-300 ease-in-out scale-0 group-hover:scale-100">Edit</span>
                                </div>
                            </div>
                            <div class="text-center my-4">
                                <img class="h-32 w-32 rounded-full border-4 border-white dark:border-gray-800 mx-auto my-4"
                                    src="http://localhost/EchoPost/Admin/upload/<?php echo $result['images'] ?>" alt="">
                                <div class="py-2">
                                    <h3 class="font-bold text-2xl text-gray-800 dark:text-white mb-1"><?php echo $result['post_user_name'] ?></h3>
                                    <h2 class="text-xl font-bold text-white"><?php echo $result['post_user_email'] ?></h2>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card end -->

                </div>


            </div>


        </div>

    </div>

</section>



<?php include_once('footer.php') ?>