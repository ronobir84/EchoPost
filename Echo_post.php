<?php
ob_start();
session_start();
include_once('database.php');

if (isset($_SESSION['min_user_data'])) {
    echo "<script>window.location.href='./index.php'</script>";
}
if (isset($_POST['post_login'])) {
    $user_email = mysqli_real_escape_string($database, $_POST['user_email']);
    $user_password = mysqli_real_escape_string($database, $_POST['user_password']);
    $sql = "SELECT * FROM post_users WHERE post_user_email = '$user_email' AND post_user_password = '$user_password'";
    $query = mysqli_query($database, $sql);
    $data = mysqli_num_rows($query);
    if ($data) {
        $result = mysqli_fetch_assoc($query);


        $min_user_data = array($result['post_user_id'], $result['post_user_name'], $result['post_user_email'], $result['post_user_password'], $result['images']);


        $_SESSION['min_user_data'] = $min_user_data;

        echo "<script>window.location.href='./index.php'</script>";
    } else {
        $_SESSION['post_data_error'] = "Invalid Email/Password!!";
        // echo "<script>window.location.href='login.php'</script>";
    }
}





?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EchoPost</title>
    <!-- #Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/337002c4cc.js" crossorigin="anonymous"></script>
</head>

<body>






    <div class=" bg-[#E5ECFF] h-screen overflow-hidden flex items-center justify-center">

        <div class="bg-white lg:w-6/12 md:7/12 w-8/12 shadow-3xl rounded-xl">
             <?php
             if (isset($_SESSION['post_data_error'])) {
                 $login_error = $_SESSION['post_data_error'];
                 echo $login_error;
                  
             }
             
             ?>

            <div class="bg-[#6A4EE9] shadow shadow-gray-200 absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 rounded-full p-4 md:p-8">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="#FFF">
                    <path d="M0 3v18h24v-18h-24zm6.623 7.929l-4.623 5.712v-9.458l4.623 3.746zm-4.141-5.929h19.035l-9.517 7.713-9.518-7.713zm5.694 7.188l3.824 3.099 3.83-3.104 5.612 6.817h-18.779l5.513-6.812zm9.208-1.264l4.616-3.741v9.348l-4.616-5.607z" />
                </svg>
            </div>
            <div>


            </div>
            <form method="post" class="p-12 md:p-24 ">
                <div class="flex items-center text-lg mb-6 md:mb-8">
                    <svg class="absolute ml-3" width="24" viewBox="0 0 24 24">
                        <path d="M20.822 18.096c-3.439-.794-6.64-1.49-5.09-4.418 4.72-8.912 1.251-13.678-3.732-13.678-5.082 0-8.464 4.949-3.732 13.678 1.597 2.945-1.725 3.641-5.09 4.418-3.073.71-3.188 2.236-3.178 4.904l.004 1h23.99l.004-.969c.012-2.688-.092-4.222-3.176-4.935z" />
                    </svg>
                    <input type="email" name="user_email" class="bg-gray-200 rounded pl-12 py-2 md:py-4 focus:outline-none w-full" placeholder="User Email" />
                </div>
                <div class="flex items-center text-lg mb-6 md:mb-8">
                    <svg class="absolute ml-3" viewBox="0 0 24 24" width="24">
                        <path d="m18.75 9h-.75v-3c0-3.309-2.691-6-6-6s-6 2.691-6 6v3h-.75c-1.24 0-2.25 1.009-2.25 2.25v10.5c0 1.241 1.01 2.25 2.25 2.25h13.5c1.24 0 2.25-1.009 2.25-2.25v-10.5c0-1.241-1.01-2.25-2.25-2.25zm-10.75-3c0-2.206 1.794-4 4-4s4 1.794 4 4v3h-8zm5 10.722v2.278c0 .552-.447 1-1 1s-1-.448-1-1v-2.278c-.595-.347-1-.985-1-1.722 0-1.103.897-2 2-2s2 .897 2 2c0 .737-.405 1.375-1 1.722z" />
                    </svg>
                    <input type="password" name="user_password" class="bg-gray-200 rounded pl-12 py-2 md:py-4 focus:outline-none w-full" placeholder="Password" />




                </div>
                <button name="post_login" class="bg-[#6A4EE9] hover:bg-[#282424] duration-300 font-bold p-2.5 text-white  text-lg  w-full rounded">Login</button>
                <a class="text-xl font-bold text-[#6A4EE9] relative top-4 hover:text-blue-400 duration-300" href="post_register.php">
                    Register
                </a>
            </form>
        </div>
    </div>

</body>

</html>