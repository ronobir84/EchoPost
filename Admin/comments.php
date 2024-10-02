<?php include_once('./adminPartials/Admin_header.php') ?>




<div class="container-fluid">

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow relative top-10">
        <div class="card-header py-3 d-flex justify-end">



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
                            <th>Comment Id</th>
                            <th>Post Id</th>
                            <th>Author Name</th>
                            <th>Author Email</th>
                            <th>View Comment</th>
                            <th colspan="2">Action</th>
                        </tr>

                    </thead>
                    <tbody>


                    <?php
                    $sql = "SELECT * FROM comments LEFT JOIN posts ON comments.post_id = posts.post_id LEFT JOIN post_users ON comments.post_user_id = post_users.post_user_id";
                    $query = mysqli_query($database, $sql);
                    $rows = mysqli_num_rows($query);
                    if ($rows) {
                      while ($row = mysqli_fetch_assoc($query)) {
                       
                      
                    
                    ?>







                        <tr class="text-center text-lg text-[#282424] font-medium ">
                            <td><?php echo $row['comment_id']?></td>
                            <td><?php echo $row['post_id'] ?></td>
                            <td><?php echo $row['post_user_name']?></td>
                            <td><?php echo $row['email']?></td>
                            <td> <a href="view_comment.php?id=<?php echo $row['comment_id'] ?>">
                                    <i class="fa-regular fa-comment-dots fa-xl text-green-700"></i>
                                </a> </td>
                            <td>

                                <a href="">Delete</a>

                            </td>




                        </tr>
                        <?php }
                    }else{?>



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