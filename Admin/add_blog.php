<?php ob_start() ?>
<?php include_once('./adminPartials/Admin_header.php') ?>


<?php
if (isset($_POST['add_post'])) {
    $post_name = mysqli_real_escape_string($database, $_POST['post_name']);
    $post_text = mysqli_real_escape_string($database, $_POST['post_text']);
    $file_name = $_FILES['images']['name'];
    $tmp_name = $_FILES['images']['tmp_name'];
    $size = $_FILES['images']['size'];
    $image_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $allow_type = ['jpg', 'png', 'jpeg'];
    $destination = 'upload/' . $file_name;

    $category_name = mysqli_real_escape_string($database, $_POST['category_name']);

    $user_name = mysqli_real_escape_string($database, $_POST['user_name']);
    $post_body = mysqli_real_escape_string($database, $_POST['post_body']);

    if (in_array($image_ext, $allow_type)) {
        if ($size <= 2000000) {
            move_uploaded_file($tmp_name, $destination);
            $sql3 = "INSERT INTO `posts`( `post_title`, `post_image`,  `post_content`, `user_id`, `category_id`, `post_text`) VALUES ('$post_name','$file_name','$post_body','$user_name','$category_name', '$post_text') ";
            $query3 = mysqli_query($database, $sql3);
            if ($query3) {
                $_SESSION['post_succ'] = "Post Published Successful";
                echo "<script>window.location.href='blogs.php'</script>";
            } else {
                $_SESSION['post_error'] = "Failed Please try again";
            }
        } else {
            $_SESSION['img_error'] = "image size should be 2mb";
        }
    } else {
        $_SESSION['img_file'] = "File type is not allow";
    }
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

<div class=" bg-[#E5ECFF] py-20  overflow-hidden flex items-center justify-center  ">

    <div class="bg-white w-[75%]  shadow-3xl rounded  ">
        <div>

            <h1 id="title_font" class="text-3xl relative top-5  text-center font-bold from-green-600 via-pink-700 to-blue-600 bg-gradient-to-r bg-clip-text text-transparent [text-shadow:_0_1px_0_rgb(0_0_0_/_40%)]">Add Post</h1>
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
                <?php
                $sql2 = "SELECT * FROM categories";
                $query2 = mysqli_query($database, $sql2);
                $cats = mysqli_num_rows($query2);

                ?>
                <select class="w-full py-[11px] cursor-pointer bg-gray-200 text-black  px-4 rounded" name="category_name">
                    <option value="">Select Categories</option>
                    <?php
                    if ($cats) {
                        while ($cat = mysqli_fetch_assoc($query2)) {



                    ?>
                            <option value="<?php echo $cat['category_id']?>">
                                <?php echo $cat['category_name'] ?>
                            </option>

                    <?php  }
                    } ?>


                </select>



            </div>

            <div class="mb-3">
                <?php
                $sql = "SELECT * FROM users";
                $query = mysqli_query($database, $sql);
                $rows = mysqli_num_rows($query);

                ?>
                <select class="w-full py-[11px] bg-gray-200 cursor-pointer text-black  px-4 rounded" name="user_name">
                    <option value="">Select User Name</option>
                    <?php
                    if ($rows) {
                        while ($row1 = mysqli_fetch_assoc($query)) {



                    ?>
                            <option value="<?php echo $row1['user_id'] ?>"><?php echo $row1['user_name'] ?></option>
                    <?php }
                    } ?>

                </select>



            </div>
            <div class="mb-3">
                <!-- <label class="block text-lg font-semibold text-gray-300 " for="name">Category Name</label> -->
                <textarea required name="post_body" id="blog" placeholder="Describe yourself " class="bg-gray-200 rounded text-black duration-200 px-4  py-2.5 focus:outline-none w-full" rows="3"></textarea>


            </div>








            <button name="add_post" class="bg-[#6A4EE9] hover:bg-[#282424] duration-300 font-bold py-2 md:p-4 text-white  w-full rounded">Add Post</button>
        </form>
    </div>
</div>







<?php include_once('./adminPartials/Admin_footer.php') ?>