<?php include_once('./adminPartials/Admin_header.php') ?>

<?php

if (isset($_POST['edit_post'])) {


    $post_name = mysqli_real_escape_string($database, $_POST['post_name']);
    $post_text = mysqli_real_escape_string($database, $_POST['post_text']);

    // image edit section
    $folder = "upload/";

    $image_file = $_FILES['images']['name'];
    $file = $_FILES['images']['tmp_name'];
    $path = $folder . $image_file;
}







?>











<div class="group absolute ml-[3%] mt-14 inline-block  ">
    <a href="blogs.php">
        <button class="focus:outline-none  ">

            <i class="fa-solid fa-arrow-left text-lg  w-12 h-12  p-2  duration-500 hover:bg-[#17082D] border-2 border-[#282424] hover:text-white  text-[#17082D] rounded-full"></i>
        </button>
    </a>
    <button
        class="absolute -top-11 left-1/2 transform -translate-x-1/2 z-20  w-24 h-10 text-base font-bold text-white bg-[#17082D] rounded shadow-lg transition-transform duration-300 ease-in-out scale-0 group-hover:scale-100">Go Back</button>


</div>

<div class=" bg-[#6A4EE9] py-20  overflow-hidden flex items-center justify-center  ">

    <div class="bg-white w-[75%]  shadow-3xl rounded  ">
        <div>

            <h1 id="title_font" class="text-3xl relative top-5  text-center font-bold from-green-600 via-pink-700 to-blue-600 bg-gradient-to-r bg-clip-text text-transparent [text-shadow:_0_1px_0_rgb(0_0_0_/_40%)]">Edit Post</h1>
        </div>
        <form method="post" class=" p-12 " action="" enctype="multipart/form-data">
            <div class=" mb-3">
                <input type="text" name="post_name" class="bg-gray-200 rounded text-black duration-200 px-4  py-[11px] focus:outline-none w-full" placeholder="Post Title" />
            </div>
            <div class=" mb-3">
                <input type="text" name="post_text" class="bg-gray-200 rounded text-black duration-200 px-4  py-[11px] focus:outline-none w-full" placeholder="Post Text" />
            </div>
            <div class=" mb-2">
                <input name="images" type="file" class="w-full p-[11px]  text-black bg-gray-200 cursor-pointer px-4 rounded focus:ring-1   transition ease-in-out duration-150">
            </div>
            <div class="mb-3">

            </div>
            <div class="mb-3">

                <select class="w-full py-[11px] cursor-pointer bg-gray-200 text-black  px-4 rounded" name="category_name">
                    <option value="">Select Categories</option>
                </select>
            </div>
            <div class="mb-3">
                <select class="w-full py-[11px] bg-gray-200 cursor-pointer text-black  px-4 rounded" name="user_name">
                    <option value="">Select User Name</option>
                    <option value=""></option>
                </select>
            </div>
            <div class="mb-3">
                <textarea required name="post_body" id="blog" placeholder="Describe yourself " class="bg-gray-200 rounded text-black duration-200 px-4  py-2.5 focus:outline-none w-full" rows="3"></textarea>
            </div>
            <button name="edit_post" class="bg-[#6A4EE9] hover:bg-[#282424] duration-300 font-bold py-2 md:p-4 text-white  w-full rounded">Add Post</button>
        </form>
    </div>
</div>




<?php include_once('./adminPartials/Admin_footer.php') ?>