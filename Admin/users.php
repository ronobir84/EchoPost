<?php include_once('./adminPartials/Admin_header.php') ?>



<div class="container-fluid">

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



                        <tr class="text-center text-lg text-[#282424] font-medium">
                            <td>1</td>
                            <td>Ronobir</td>
                            <td>Ronobir@gmail.com</td>
                            <td>3</td>
                            <td>
                                <a href="">edit</a>
                                <a href="">Delete</a>
                                <a href="">view</a>

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





<?php include_once('./adminPartials/Admin_header.php') ?>