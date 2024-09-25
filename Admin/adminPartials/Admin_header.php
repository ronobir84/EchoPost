<?php
session_start();
$page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1);
include_once('../database.php');

if (!isset($_SESSION['user_data'])) {
    header("Location: http://localhost/EchoPost/login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>EchoPost Admin</title>
    <link href="vendor/css/sb-admin-2.css" rel="stylesheet">


    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


    <style>
        .active {
            background-color: #6A4EE9;
        }

        body {
            font-family: "DM Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: weight;
            font-style: normal;

        }

        #title_font {

            font-family: "Cormorant", serif;

        }
    </style>

</head>

<body>


    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            <div class="bg-[#282424] w-[350px]  relative shadow-md  min-h-screen  py-14">
                <div>
                    <div class="  py-2 px-3 absolute  top-0">
                        <a href="index.php">
                            <img class="w-52 h-20 object-cover" src="http://localhost/EchoPost/Assets/Images/echopost-logo.png" alt="">
                        </a>


                    </div>

                </div>
                <ul class=" " id="">
                    <!-- Sidebar - Brand -->


                    <div class="relative top-10 space-y-10 px-4">

                        <li>
                            <a class="   flex hover:bg-[#6A4EE9]   gap-3 px-2 items-center  py-1.5  text-white rounded-sm  duration-500  0    w-40  mt-4  <?= $page == "index.php" ? 'active' : '' ?>" href="index.php">
                                <i class="fa-solid fa-house text-lg"></i>
                                <button class="text-lg font-semibold ">Dashboard </button>
                            </a>
                        </li>


                        <li>
                            <a class="flex  gap-3 px-2 items-center  py-1.5  text-white rounded-sm hover:bg-[#6A4EE9]   duration-500  w-44 " href="">
                                <i class="fa-solid fa-blog text-lg"></i>
                                <button class="text-lg font-semibold ">Blog</button>
                            </a>
                        </li>


                        <li>
                            <a class="flex  gap-3 px-2 items-center  py-1.5  text-white rounded-sm hover:bg-[#6A4EE9] duration-500    w-36 <?= $page == "categories.php" ? 'active' : ''; ?>" href="categories.php">
                                <i class="fa-solid fa-list text-lg"></i>
                                <button class="text-lg font-semibold ">Categories</button>
                            </a>
                        </li>


                        <li>
                            <a class="flex  gap-3 px-2 items-center  py-1.5  text-white rounded-sm hover:bg-[#6A4EE9] duration-500   w-36 <?= $page == "users.php" ? 'active' : ''; ?>" href="users.php">
                                <i class="fa-solid fa-user text-lg"></i>
                                <button class="text-lg font-semibold ">Users</button>
                            </a>
                        </li>







                    </div>
                </ul>
            </div>

            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-[#282424] topbar  static-top shadow-md ">


                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">


                            <li>
                                <!-- 1 -->
                                <div class="flex gap-4 items-center relative right-4">
                                    <h3 class="text-lg text-white  font-semibold">
                                        <?php 
                                        if (isset($_SESSION['user_data'])) {
                                            $name_data = ucwords($_SESSION['user_data'][1]);
                                            echo $name_data;
                                        }
                                        
                                        ?>
                                    </h3>
                                    <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar" class="flex text-sm bg-gray-800 rounded-full md:me-0 " type="button">
                                        <?php 
                                        if (isset($_SESSION['user_data'])) {
                                            $image_data = $_SESSION['user_data'][2];
                                             
                                        }
                                        ?>
                                        <img class="w-12 h-12 rounded-full " src="./upload/<?php echo $image_data?>" alt="">
                                    </button>
                                </div>

                                <!-- Dropdown menu -->
                                <div id="dropdownAvatar" class="z-10 hidden bg-[#282424]  absolute    divide-gray-100  shadow-md w-44 h-40">


                                    <ul class="py-3  font-semibold text-lg text-white text-center">
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-[#6A4EE9]  duration-500">Profile</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-[#6A4EE9]  duration-500  ">Settings</a>
                                        </li>
                                        <li>
                                            <a href="logout.php" class="block px-4 py-2 hover:bg-[#6A4EE9]  duration-500  ">Logout</a>
                                        </li>
                                    </ul>

                                </div>

                            </li>
                        </ul>
                    </nav>