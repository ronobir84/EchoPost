<?php include_once('./adminPartials/Admin_header.php') ?>

<?php
$limit = 5;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$offset = ($page - 1) * $limit;

?>

<div class="container-fluid min-h-screen bg-[#E5ECFF]">

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow relative top-10">
        <div class="card-header py-3 d-flex justify-content-between ">

            <a href="add_user.php">
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
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center text-[#6A4EE9] text-lg font-semibold">
                            <th>User id</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th colspan="2">Action</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $sql = "SELECT * FROM users LIMIT $offset, $limit";
                        $query = mysqli_query($database, $sql);
                        $rows = mysqli_num_rows($query);
                        if ($rows) {
                            while ($row = mysqli_fetch_assoc($query)) {



                        ?>



                                <tr class="text-center text-lg text-[#282424] font-medium">
                                    <td><?php echo $row['user_id'] ?></td>
                                    <td><?php echo $row['user_name'] ?></td>
                                    <td><?php echo $row['user_email'] ?></td>
                                    <td>
                                        <?php
                                        if ($row['user_role'] == 1) {
                                            echo "<p class='text-green-500'>Admin</p>";
                                        } elseif ($row['user_role'] == 0) {
                                            echo "CO-Admin";
                                        } else {
                                            echo "other";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <div class="group relative inline-block ">


                                            <a class="mr-3" href="edit_user.php?id=<?php echo $row['user_id'] ?>">
                                                <button type="button">
                                                    <i class="fa-solid fa-pen-to-square text-xl font-bold  text-[#309267]   duration-500 "></i>
                                                </button>
                                            </a>


                                            <span
                                                class="absolute -top-11 left-1/2 transform -translate-x-1/2 z-20 px-4 py-2 text-base font-bold text-white bg-[#309267] rounded-lg shadow-lg transition-transform duration-300 ease-in-out scale-0 group-hover:scale-100">Edit</span>
                                        </div>
                                        <a href="">Delete</a>
                                        <a href="">view</a>

                                    </td>



                                </tr>
                            <?php  }
                        } else { ?>

                            <tr>
                                <td colspan="7">No Record Found</td>
                            </tr>

                        <?php } ?>



                    </tbody>
                </table>
            </div>

        </div>





    </div>


    <!-- pagination -->

    <?php

    $pagination = "SELECT * FROM  comments";
    $page_result = mysqli_query($database, $pagination);

    if (mysqli_num_rows($page_result) > 0) {

        $total_records = mysqli_num_rows($page_result);
        $total_page = ceil($total_records / $limit)


    ?>


        <!-- -------------------- -->


        <div>
            <nav class="mt-20" aria-label="Pagination">


                <ul class="mb-4 flex justify-center space-x-4">
                    <li>
                        <?php
                        if ($page > 1) {


                        ?>
                            <a class="rounded-full hover:text-white hover:bg-[#9333EA] duration-500 border-2 text-lg font-bold  border-[#9333EA]  px-3.5 py-2.5 text-black" href="users.php?page=<?php echo $page - 1 ?>"><i class="fa-solid fa-angle-left fa-lg"></i></a>
                        <?php } ?>
                    </li>

                    <?php
                    for ($i = 1; $i <= $total_page; $i++) {




                    ?>
                        <li>
                            <?php

                            if ($i == $page) {
                            ?>
                                <a class="rounded-full  border-2 shadow-md shadow-[#9333EA]  text-lg font-bold bg-[#9333EA] border-[#9333EA]  px-[18px] py-[10px] text-white" href="users.php?page=<?php echo $i ?>"><?php echo $i ?></a>
                            <?php

                            } else {
                            ?>
                                <a class="rounded-full border-2 text-lg hover:text-white hover:bg-[#9333EA] duration-500 font-bold  border-[#9333EA]  px-[17px] py-[10px] text-black" href="users.php?page=<?php echo $i ?>"><?php echo $i ?></a>


                            <?php

                            }
                            ?>
                        </li>
                    <?php } ?>


                    <li>
                        <?php
                        if ($page < $total_page) {


                        ?>
                            <a class="rounded-full hover:text-white hover:bg-[#9333EA] duration-500 border-2 text-lg font-bold  border-[#9333EA]  px-3.5 py-2.5 text-black" href="users.php?page=<?php echo $page + 1 ?>"><i class="fa-solid fa-angle-right fa-lg"></i></a>
                        <?php } ?>
                    </li>
                </ul>


            </nav>
        </div>

    <?php }
    else{
        echo "not Data";
    } ?>
</div>





<?php include_once('./adminPartials/Admin_footer.php') ?>