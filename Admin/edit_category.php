<?php include_once('./adminPartials/Admin_header.php') ?>







<div class="relative p-4 w-full  min-h-screen bg-[#6A4EE9]">
    <!-- Modal content -->
    <div class="relative bg-white  shadow dark:bg-gray-700 max-w-2xl mx-auto mt-32">
        <!-- Modal header -->
        <div class="    ">
            <h2 class="text-2xl font-bold text-black text-center pt-4">Edit Category</h2>
        </div>
        <!-- Modal body -->
        <form method="post" action="">
            <div class="p-6 pb-10 space-y-4">
                <div>
                    <input value="" class="w-full border-2 px-4 text-black font-bold text-xl rounded-sm border-gray-400 bg-[#EAECF4] h-12" type="text">
                    <input type="color" class="w-full text-black font-bold text-xl rounded-sm  hover:cursor-pointer   h-12 mt-4">
                </div>
                <div>
                    <button name="update_cat" class="w-full h-10 bg-[#6A4EE9] text-lg font-bold text-white rounded-sm hover:bg-[#282424] duration-300">Update</button>
                </div>
            </div>
        </form>

    </div>
</div>










<?php include_once('./adminPartials/Admin_footer.php') ?>