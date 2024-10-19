<?php ob_start() ?>

<?php include_once('./adminPartials/Admin_header.php') ?>


<?php

$category_id = $_GET['id'];
if (empty($category_id)) {
    header("Location:categories.php");
}


?>




<div class="group absolute ml-[3%] mt-14 inline-block  ">
    <a href="categories.php">
        <button class="focus:outline-none  ">

            <i class="fa-solid fa-arrow-left text-lg  w-12 h-12  p-2  duration-500 hover:bg-[#17082D] border-2 border-[#282424] hover:text-white  text-[#17082D] rounded-full"></i>
        </button>
    </a>
    <button
        class="absolute -top-11 left-1/2 transform -translate-x-1/2 z-20  w-24 h-10 text-base font-bold text-white bg-[#17082D] rounded shadow-lg transition-transform duration-300 ease-in-out scale-0 group-hover:scale-100">Go Back</button>


</div>



<div class=" bg-[#6A4EE9]   min-h-screen overflow-hidden flex items-center justify-center  ">

    <div class="bg-white w-[60%]  shadow-3xl rounded  ">
        <div>

            <h1 id="title_font" class="text-3xl relative top-5  text-center font-bold from-green-600 via-pink-700 to-blue-600 bg-gradient-to-r bg-clip-text text-transparent [text-shadow:_0_1px_0_rgb(0_0_0_/_40%)]">Edit Category</h1>
        </div>
        <form method="post" class=" p-12 " action="" enctype="multipart/form-data">
            <div class=" mb-3">
                <input type="text" name="category_name" class="bg-gray-200 rounded text-black duration-200 px-4  py-[11px] focus:outline-none w-full" />
            </div>
            <div class=" mb-3">
                <input type="color" name="category_color" class=" rounded hover:cursor-pointer duration-200 h-12 w-full" />
            </div>
            <button name="edit_category" class="bg-[#6A4EE9] hover:bg-[#282424] duration-300 font-bold py-2 md:p-4 text-white  w-full rounded">Add Post</button>
        </form>
    </div>
</div>










<?php include_once('./adminPartials/Admin_footer.php') ?>