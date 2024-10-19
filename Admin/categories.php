<?php include_once('./adminPartials/Admin_header.php') ?>




<div class="container-fluid   ">

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow relative top-10">
        <div class="card-header py-3 d-flex justify-content-between ">

            <a href="add_category.php">
                <button
                    type="button"
                    class="bg-white text-center w-48 rounded-sm shadow   h-14 relative font-sans text-black text-xl font-semibold group">
                    <div
                        class="bg-[#282424] rounded-sm  h-12 w-1/4 flex items-center justify-center absolute left-1 top-[4px] group-hover:w-[184px] z-10 duration-500">
                        <i class="fa-solid fa-arrow-right w-6 h-6 text-white"></i>
                    </div>
                    <p class="translate-x-2">Add User</p>
                </button>
            </a>







            <form action="">
                <div class="relative">
                    <input
                        placeholder="Search User...."
                        class="input shadow  border-gray-300 px-4 py-3  w-64 transition-all  focus:w-72 outline-none"
                        name="search"
                        type="search" />
                    <button class="py-[12px] px-4 text-white font-semibold bg-[#282424] relative right-1 text-lg ">Search</button>

                </div>
            </form>







        </div>
        <div class="card-body ">
            <div class="table-responsive ">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center text-[#6A4EE9] text-lg font-semibold">
                            <th>Category Id</th>
                            <th>Category Name</th>
                            <th>Category Color</th>
                            <th colspan="2">Action</th>
                        </tr>

                    </thead>
                    <tbody>

                        <?php


                        $sql = "SELECT * FROM categories";
                        $query = mysqli_query($database, $sql);
                        $rows = mysqli_num_rows($query);
                        if ($rows) {
                            while ($row = mysqli_fetch_assoc($query)) {




                        ?>





                                <tr class="text-center text-lg text-[#282424] font-medium ">
                                    <td><?php echo $row['category_id'] ?></td>
                                    <td><?php echo $row['category_name'] ?></td>
                                    <td><?php echo $row['category_color'] ?></td>
                                    <td>
                                        <form method="post" action="">
                                            <!-- blog edit icon -->
                                            <div class="group relative inline-block ">


                                                <a href="edit_category.php?id=<?php echo $row['category_id'] ?>">
                                                    <button type="button">
                                                        <i class="fa-solid fa-pen-to-square text-xl font-bold  text-[#309267]   duration-500 "></i>
                                                    </button>
                                                </a>


                                                <span
                                                    class="absolute -top-11 left-1/2 transform -translate-x-1/2 z-20 px-4 py-2 text-base font-bold text-white bg-[#309267] rounded-lg shadow-lg transition-transform duration-300 ease-in-out scale-0 group-hover:scale-100">Edit</span>
                                            </div>
                                            <a href="">Delete</a>
                                            <a href="">View</a>
                                        </form>
                                    </td>




                                </tr>

                            <?php }
                        } else {
                            ?>

                            <tr>
                                <td colspan="7">No Record Found</td>
                            </tr>
                        <?php } ?>



                    </tbody>
                </table>
            </div>

        </div>





    </div>
</div>

<?php
$cat_sql = "SELECT * FROM categories WHERE category_id = category_id";











?>




<!-- Main modal -->
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4  ">
                <h2 class="text-2xl font-bold text-black">Edit Category</h2>

                <button type="button" class="text-red-700 hover:text-blue-700 duration-300  w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="default-modal">
                    <i class="fa-solid fa-circle-xmark text-3xl"></i>
                </button>
            </div>
            <!-- Modal body -->
            <form method="post" action="">
                <div class="p-6 pb-10 space-y-4">
                    <div>
                        <input value="<?php echo $new_result ?>" class="w-full border-2 px-4 text-black font-bold text-xl rounded-sm border-gray-400 bg-[#EAECF4] h-12" type="text">
                        <input type="color" class="w-full text-black font-bold text-xl rounded-sm  hover:cursor-pointer   h-12 mt-4">
                    </div>
                    <div>
                        <button name="update_cat" class="w-full h-10 bg-[#6A4EE9] text-lg font-bold text-white rounded-sm hover:bg-[#282424] duration-300">Update</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>



<?php include_once('./adminPartials/Admin_footer.php') ?>