<?php ob_start() ?>

<?php include_once('./adminPartials/Admin_header.php') ?>


<?php



$user_id = $_GET['id'];

if (empty($user_id)) {
    header("Location:users.php");
}

if (isset($_POST['edit_user'])) {
    // user name 
    $user_name = mysqli_real_escape_string($database, $_POST['user_name']);
    // user email
    $user_email = mysqli_real_escape_string($database, $_POST['user_email']);
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

    // user password
    $user_password = mysqli_real_escape_string($database, $_POST['new_password']);
    $user_role = mysqli_real_escape_string($database, $_POST['user_role']);

    if (!isset($error)) {

        if ($file != '') {
            $post_sql = "SELECT * FROM  users  WHERE user_id = '$user_id'";
            $res = mysqli_query($database, $post_sql);
            if ($row = mysqli_fetch_array($res)) {
                $delete_image = $row['user_image'];
            }
            unlink($folder . $delete_image);
            move_uploaded_file($file, $target_file);


            $update_sql = "UPDATE `users` SET  `user_name`='$user_name',`user_email`='$user_email',`user_password`='$user_password',`user_image`='$image_file',`user_role`='$user_role' WHERE user_id = '$user_id'";


            $result = mysqli_query($database, $update_sql);
        } else {

            $update_sql = "UPDATE `users` SET  `user_name`='$user_name',`user_email`='$user_email',`user_password`='$user_password', `user_role`='$user_role' WHERE user_id = '$user_id'";
            $result_query = mysqli_query($database, $update_sql);
        }

        if (isset($result_query)) {
            $_SESSION['post_edit_succ'] = "Post Data Update Successful";
            header("Location: users.php");
        } else {
            $_SESSION['post_edit_error'] = "Something went wrong";
        }
    }
}


if (isset($error)) {
    foreach ($error as $all_error) {
        $_SESSION['type_error'] = $all_error;
    }
}


$user_sql = "SELECT * FROM users WHERE user_id = '$user_id'";
$user_query = mysqli_query($database, $user_sql);
if ($data = mysqli_fetch_assoc($user_query)) {
    $user_name = $data['user_name'];
    $user_email = $data['user_email'];
    $user_image = $data['user_image'];
    $user_password = $data['user_password'];
    $user_role = $data['user_role'];
}






?>





<div class=" bg-[#E5ECFF]   min-h-screen overflow-hidden flex items-center justify-center  ">

    <div class="bg-white w-[60%]  shadow-3xl rounded  ">
        <div>

            <h1 id="title_font" class="text-3xl relative top-5  text-center font-bold from-green-600 via-pink-700 to-blue-600 bg-gradient-to-r bg-clip-text text-transparent [text-shadow:_0_1px_0_rgb(0_0_0_/_40%)]">Edit User</h1>
        </div>
        <form method="post" class=" p-12 " action="" enctype="multipart/form-data">
            <div class=" mb-3">
                <input value="<?php echo $user_name ?>" type="text" name="user_name" class="bg-gray-200 rounded  duration-200 px-4 text-lg font-bold text-black  py-[11px] focus:outline-none w-full" placeholder="name..." />
            </div>
            <div class=" mb-3">
                <input value="<?php echo $user_email ?>" type="email" name="user_email" class="bg-gray-200 rounded  duration-200 px-4 text-lg font-bold text-black  py-[11px] focus:outline-none w-full" placeholder="email..." />
            </div>
            <div class="flex justify-between mb-2">
                <input name="images" type="file" class="w-full bg-gray-200 p-[11px] border-2 border-gray-200 cursor-pointer px-4 rounded-md focus:outline-none  transition ease-in-out duration-150">
                <img class="w-[54px] h-[54px] rounded-md absolute  right-[20%] p-2" src="upload/<?php echo $user_image ?>" alt="">
            </div>
            <div class="mb-2">


                <div class="" x-data="{ show: true }">

                    <div class="relative">
                        <input value="<?php echo $user_password ?>" name="new_password" placeholder="confirm Password" :type="show ? 'password' : 'text'" class=" rounded bg-gray-200 px-4  text-black  py-2.5 w-full  focus:outline-none   transition ease-in-out duration-150">
                        <div class="absolute inset-y-0 right-0 pr-4 flex items-center text-sm leading-5">
                            <svg class="h-6 text-gray-700 cursor-pointer" fill="none" @click="show = !show"
                                :class="{'block': !show, 'hidden':show }" xmlns="http://www.w3.org/2000/svg"
                                viewbox="0 0 640 512">
                                <path fill="currentColor"
                                    d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                </path>
                            </svg>

                            <svg class="h-6 text-gray-700 cursor-pointer" fill="none" @click="show = !show"
                                :class="{'hidden': !show, 'block':show }" xmlns="http://www.w3.org/2000/svg"
                                viewbox="0 0 576 512">


                                <path fill="currentColor"
                                    d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                </path>
                            </svg>



                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-2">
                <select class="w-full bg-gray-200 p-[11px] border-2 border-gray-200 cursor-pointer px-4 rounded-md focus:outline-none  transition ease-in-out duration-150" name="user_role">
                    <?php
                    $role_sql = "SELECT user_role FROM users";
                    $role_query = mysqli_query($database, $role_sql);
                    while ($role_result = mysqli_fetch_assoc($role_query)) {



                    ?>
                        <option value="<?php echo $role_result['user_role'] ?>"
                            <?php

                            if ($user_role == $role_result['user_role']) {
                                echo "Selected";
                            } else {
                                echo "";
                            }


                            ?>><?php
                        if ($role_result['user_role'] == 1) {
                            echo "Admin";
                        } elseif ($role_result['user_role'] == 0) {
                            echo "CO-Admin";
                        }
                        ?></option>

                    <?php  } ?>


                </select>

            </div>
            <button name="edit_user" class="bg-[#6A4EE9] hover:bg-[#282424] duration-300 font-bold py-2 md:p-4 text-white  w-full rounded"> Update User</button>
        </form>
    </div>
</div>



<?php include_once('./adminPartials/Admin_footer.php') ?>