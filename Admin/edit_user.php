<?php include_once('./adminPartials/Admin_header.php') ?>






<div class=" bg-[#E5ECFF]   min-h-screen overflow-hidden flex items-center justify-center  ">

    <div class="bg-white w-[60%]  shadow-3xl rounded  ">
        <div>

            <h1 id="title_font" class="text-3xl relative top-5  text-center font-bold from-green-600 via-pink-700 to-blue-600 bg-gradient-to-r bg-clip-text text-transparent [text-shadow:_0_1px_0_rgb(0_0_0_/_40%)]">Edit User</h1>
        </div>
        <form method="post" class=" p-12 " action="" enctype="multipart/form-data">
            <div class=" mb-3">
                <input value="" type="text" name="user_name" class="bg-gray-200 rounded  duration-200 px-4 text-lg font-bold text-black  py-[11px] focus:outline-none w-full" placeholder="name..." />
            </div>
            <div class=" mb-3">
                <input value="" type="email" name="user_email" class="bg-gray-200 rounded  duration-200 px-4 text-lg font-bold text-black  py-[11px] focus:outline-none w-full" placeholder="email..." />
            </div>
            <div class="flex justify-between mb-2">
                <input name="images" type="file" class="w-full bg-gray-200 p-[11px] border-2 border-gray-200 cursor-pointer px-4 rounded-md focus:outline-none  transition ease-in-out duration-150">
                <img class="w-[54px] h-[54px] rounded-md absolute  right-[20%] p-2" src="https://ronobirdev.surge.sh/assets/ronobir-cbde17b2.png" alt="">
            </div>
            <div class="mb-2">
                <select class="w-full bg-gray-200 p-[11px] border-2 border-gray-200 cursor-pointer px-4 rounded-md focus:outline-none  transition ease-in-out duration-150" name="">
                    <option value="1">Admin</option>
                    <option value="2">CO-Admin</option>

                </select>

            </div>
            <button name="edit_user" class="bg-[#6A4EE9] hover:bg-[#282424] duration-300 font-bold py-2 md:p-4 text-white  w-full rounded"> Update User</button>
        </form>
    </div>
</div>



<?php include_once('./adminPartials/Admin_footer.php') ?>