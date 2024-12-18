<?php ob_start() ?>

<?php include_once('./adminPartials/Admin_header.php') ?>


<?php
include('../database.php');

$id = $_GET['id'];

if (empty($id)) {
    header("Location:categories.php");
}

$cat_sql = "SELECT * FROM categories WHERE category_id = '$id'";

$cat_query = mysqli_query($database, $cat_sql);
$result = mysqli_fetch_assoc($cat_query);

?>


<?php
if (isset($_POST['edit_category'])) {
    $category_name = mysqli_real_escape_string($database, $_POST['category_name']);
    $category_color = mysqli_real_escape_string($database, $_POST['category_color']);

    $category_update = "UPDATE `categories` SET `category_name`='$category_name',`category_color`='$category_color' WHERE category_id='$id'";
    $category_query = mysqli_query($database, $category_update);
    if ($category_query) {
        $_SESSION['category_success'] = "Category Has been Edited Successful";
        echo "<script>window.location.href='categories.php'</script>";
    } else {
        $_SESSION['category_error'] = "Failed Please Try Agin";
    }
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



<div class=" bg-[#E5ECFF]   min-h-screen overflow-hidden flex items-center justify-center  ">

    <div class="bg-white w-[60%]  shadow-3xl rounded  ">
        <div>

            <h1 id="title_font" class="text-3xl relative top-5  text-center font-bold from-green-600 via-pink-700 to-blue-600 bg-gradient-to-r bg-clip-text text-transparent [text-shadow:_0_1px_0_rgb(0_0_0_/_40%)]">Edit Category</h1>
        </div>
        <form method="post" class=" p-12 " action="" enctype="multipart/form-data">
            <div class=" mb-3">
                <input value="<?php echo $result['category_name'] ?>" type="text" name="category_name" class="bg-gray-200 rounded  duration-200 px-4 text-lg font-bold text-black  py-[11px] focus:outline-none w-full" />
            </div>
            <div class=" mb-3">
                <input value="<?php echo $result['category_color'] ?>" type="color" name="category_color" class=" rounded hover:cursor-pointer duration-200 h-12 w-full" />
            </div>
            <button name="edit_category" class="bg-[#6A4EE9] hover:bg-[#282424] duration-300 font-bold py-2 md:p-4 text-white  w-full rounded">Update Category</button>
        </form>
    </div>
</div>










<?php include_once('./adminPartials/Admin_footer.php') ?>