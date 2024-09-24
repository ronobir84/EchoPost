<?php include_once('./adminPartials/Admin_header.php') ?>


<

<div class="group absolute ml-[7%] mt-14 inline-block  ">
    <a href="categories.php">
        <button class="focus:outline-none  ">

            <i class="fa-solid fa-arrow-left text-lg  w-12 h-12  p-2  duration-500 hover:bg-[#17082D] border-2 border-[#282424] hover:text-white  text-[#17082D] rounded-full"></i>


        </button>
    </a>
    <button
        class="absolute -top-11 left-1/2 transform -translate-x-1/2 z-20  w-24 h-10 text-base font-bold text-white bg-[#17082D] rounded shadow-lg transition-transform duration-300 ease-in-out scale-0 group-hover:scale-100">Go Back</button>


</div>

<div class=" bg-[#6A4EE9] h-screen overflow-hidden flex items-center justify-center">

    <div class="bg-white lg:w-6/12 md:7/12 w-8/12 shadow-3xl rounded">
        <div>

            <h1 id="title_font" class="text-3xl relative top-5  text-center font-bold from-green-600 via-pink-700 to-blue-600 bg-gradient-to-r bg-clip-text text-transparent [text-shadow:_0_1px_0_rgb(0_0_0_/_40%)]">Add Category</h1>
        </div>

        <form method="post" class=" p-12 " action="" enctype="multipart/form-data">
            <div class=" mb-4">

                <input type="text" name="category_name" class="bg-gray-200 rounded text-black duration-200 px-4  py-2.5 focus:outline-none w-full" placeholder="Username" />
            </div>
            <div class="mb-4">

                <input type="color" class=" rounded w-full h-11 cursor-pointer" name="" id="">
            </div>




            <button name="add_user" class="bg-[#6A4EE9] hover:bg-[#282424] duration-300 font-bold py-2 md:p-4 text-white  w-full rounded">Add Category</button>
        </form>
    </div>
</div>





<?php include_once('./adminPartials/Admin_footer.php') ?>