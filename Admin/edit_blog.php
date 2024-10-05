
<?php ob_start(); include_once('./adminPartials/Admin_header.php') ?>

<?php
$post_id = $_GET['id'];
if (empty($post_id)) {
     header("Location: blogs.php");
}

if (isset($_POST['edit_post'])) {


    $post_name = mysqli_real_escape_string($database, $_POST['post_name']);
    $post_text = mysqli_real_escape_string($database, $_POST['post_text']);

    // image edit section
    $folder = "upload/";
    $image_file = $_FILES['images']['name'];
    $file = $_FILES['images']['tmp_name'];
    $path = $folder . $image_file;
    $target_file = $folder . basename($image_file);
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    if ($file != '') {
        if ($_FILES['images']['size'] > 5000000) {
            $error[] = "Sorry, your image is too large. Upload less than 500 KB in size.";
        }
        //  //Allow only JPG, JPEG, PNG & GIF 
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed';
        }
    }

    $category_name = mysqli_real_escape_string($database, $_POST['category_name']);
    $user_name = mysqli_real_escape_string($database, $_POST['user_name']);
    $post_body = mysqli_real_escape_string($database, $_POST['post_body']);

    if (!isset($error)) {

        if ($file != '') {
            $post_sql = "SELECT * FROM posts  WHERE post_id = '$post_id'";
            $res = mysqli_query($database, $post_sql);
            if ($row = mysqli_fetch_array($res)) {
                $delete_image = $row['post_image'];
            }
            unlink($folder . $delete_image);
            move_uploaded_file($file, $target_file);

            $update_sql = "UPDATE posts SET  post_title='$post_name', post_image='$image_file', post_content='$post_body',user_id='$user_name', category_id='$category_name',  post_text='$post_text' WHERE posts_id = '$post_id'";
            $result = mysqli_query($database, $update_sql);
        }else{
            $update_sql = "UPDATE posts SET  post_title='$post_name',  post_content='$post_body',user_id='$user_name', category_id='$category_name',  post_text='$post_text' WHERE posts_id = '$post_id'";
            $result = mysqli_query($database, $update_sql);

        }
        if ($result) {
            $_SESSION['post_edit_succ'] = "Post Data Update Successful";
            header("Location: blogs.php");
        }
        else{
            $_SESSION['post_edit_error'] = "Something went wrong";
            
        }
    }


}


if (isset($error)) {
    foreach($error as $all_error){
        $_SESSION['type_error'] = $all_error;

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

            <div class="flex justify-between mb-2">
                <input name="images" type="file" class="w-full bg-gray-200 p-[11px] border-2 border-gray-200 cursor-pointer px-4 rounded-md focus:outline-none  transition ease-in-out duration-150">
                <img class="w-[54px] h-[54px] rounded-md absolute  right-[14%] p-2" src="https://ronobirdev.surge.sh/assets/ronobir-cbde17b2.png" alt="">
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