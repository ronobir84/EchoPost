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







                        <tr class="text-center text-lg text-[#282424] font-medium ">
                            <td>1</td>
                            <td>3</td>
                            <td>priash</td>
                            <td>ab@gmail.com</td>
                            <td> <a href="view_comment.php">
                                    <i class="fa-regular fa-comment-dots fa-xl text-green-700"></i>
                                </a> </td>
                            <td>

                                <a href="">Delete</a>

                            </td>




                        </tr>



                        <!-- <tr>
                                <td colspan="7">No Record Found</td>
                            </tr> -->





                    </tbody>
                </table>
            </div>

        </div>





    </div>
</div>





<?php include_once('./adminPartials/Admin_footer.php') ?>