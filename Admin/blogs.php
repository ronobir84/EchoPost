<?php include_once('./adminPartials/Admin_header.php') ?>


<div class="container-fluid">

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow relative top-10">
        <div class="card-header py-3 d-flex justify-content-between ">

            <a href="add_blog.php">
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
                            <th>Post id</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Date</th>
                            <th colspan="2">Action</th>

                        </tr>
                    </thead>
                    <tbody>


                        <?php

                        $sql = "SELECT * FROM posts LEFT JOIN categories ON posts.category_id = categories.category_id LEFT JOIN users ON posts.user_id = users.user_id";
                        $query = mysqli_query($database, $sql);
                        $rows = mysqli_num_rows($query);

                        if ($rows) {
                            while ($row = mysqli_fetch_assoc($query)) {



                        ?>






                                <tr class="text-center text-lg text-[#282424] font-medium">


                                    <td><?php echo $row['post_id'] ?></td>
                                    <td><?php echo $row['post_title'] ?></td>
                                    <td><?php echo $row['category_name'] ?></td>
                                    <td><?php echo $row['user_name'] ?></td>
                                    <td><?php echo date("d-m-Y", strtotime($row['publish_date'])) ?></td>
                                    <td class="">

                                        <!-- blog edit icon -->
                                        <div class="group relative inline-block ">
                                            <a class="pr-3" href="edit_blog.php?id=<?php echo $row['post_id'] ?>">
                                                <button class="" type="button">
                                                    <i class="fa-solid fa-pen-to-square text-xl font-bold  text-[#309267]   duration-500 "></i>
                                                </button>
                                            </a>
                                            <span
                                                class="absolute -top-11 left-1/2 transform -translate-x-1/2 z-20 px-4 py-2 text-base font-bold text-white bg-[#309267] rounded-lg shadow-lg transition-transform duration-300 ease-in-out scale-0 group-hover:scale-100">Edit</span>
                                        </div>
                                        <!-- blog delete icon -->
                                        <div class="group relative inline-block pr-3">
                                            <?php
                                            if (isset($_POST['delete_blog'])) {
                                                $blog_id = $_POST['blog_id'];
                                                $delete_sql = "DELETE FROM posts WHERE post_id = '$blog_id'";
                                                $delete_query = mysqli_query($database, $delete_sql);
                                                if ($delete_query) {
                                                    $_SESSION['delete_blog_succ'] = "Post Has Been Deleted Successful";
                                                } else {
                                                    $_SESSION['delete_blog_error'] = "Failed Please Try Again";
                                                }
                                            }


                                            ?>



                                            <input type="hidden" name="blog_id" value="<?php echo $row['post_id'] ?>">



                                            <form method="post" action="" onsubmit="return confirm('Are You Sure You want to delete?')">
                                                <button value="delete" name="delete_blog" type="button">

                                                    <i class="fa-solid fa-trash text-xl font-bold  text-red-700   duration-500 "></i>
                                                </button>
                                            </form>

                                            <span
                                                class="absolute -top-11 left-1/2 transform -translate-x-1/2 z-20 px-4 py-2 text-base font-bold text-white bg-red-700 rounded-lg shadow-lg transition-transform duration-300 ease-in-out scale-0 group-hover:scale-100">Delete</span>

                                        </div>
                                        <!-- blog view icon -->
                                        <div class="group relative inline-block ">


                                            <a class="pr-3" href=" ">
                                                <button class="" type="button">

                                                    <i class="fa-solid fa-eye text-xl font-bold  text-[#6A4EE9]   duration-500 "></i>
                                                </button>
                                            </a>
                                            <span
                                                class="absolute -top-11 left-1/2 transform -translate-x-1/2 z-20 px-4 py-2 text-base font-bold text-white bg-[#6A4EE9] rounded-lg shadow-lg transition-transform duration-300 ease-in-out scale-0 group-hover:scale-100">View</span>

                                        </div>

                                    </td>

                                </tr>
                            <?php }
                        } else { ?>

                            <tr>
                                <td colspan="6">No Record Found</td>
                            </tr>

                        <?php }
                        ?>





                    </tbody>
                </table>
            </div>

        </div>





    </div>
</div>



<?php include_once('./adminPartials/Admin_footer.php') ?>