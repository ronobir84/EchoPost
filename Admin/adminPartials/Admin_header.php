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

    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        .active {
            background-color: #309267;
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
                    <div class="f    py-2 px-3 absolute  top-0">
                        <img class="w-52 h-20 object-cover" src="http://localhost/EchoPost/Assets/Images/echopost-logo.png" alt="">


                    </div>

                </div>
                <ul class=" " id="">
                    <!-- Sidebar - Brand -->


                    <div class="relative top-10 space-y-4 px-4">

                        <li>
                            <a class="   flex hover:bg-[#309267]   gap-3 px-2 items-center  py-1.5  text-white rounded-sm  duration-500] duration-500    w-40  mt-4  <?= $page == "index.php" ? 'active' : '' ?>" href="index.php">
                                <i class="fa-solid fa-house"></i>
                                <button class="text-lg font-semibold ">Dashboard </button>
                            </a>
                        </li>


                        <li>
                            <a class="flex  gap-3 px-2 items-center  py-1.5  text-white rounded-sm hover:bg-[#309267] duration-500] duration-500  w-44 " href="">
                                <i class="fa-solid fa-circle-exclamation"></i>
                                <button class="text-lg font-semibold ">Blog</button>
                            </a>
                        </li>


                        <li>
                            <a class="flex  gap-3 px-2 items-center  py-1.5  text-white rounded-sm hover:bg-[#309267] duration-500] duration-500   w-36 <?= $page == "subject.php" ? 'active' : ''; ?>" href="subject.php">
                                <i class="fa-solid fa-book-open"></i>
                                <button class="text-lg font-semibold ">Category</button>
                            </a>
                        </li>


                        <li>
                            <a class="flex  gap-3 px-2 items-center  py-1.5  text-white rounded-sm hover:bg-[#309267] duration-500] duration-500   w-36 <?= $page == "user.php" ? 'active' : ''; ?>" href="user.php">
                                <i class="fa-solid fa-user"></i>
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
                                    <h3 class="text-lg text-white  font-semibold">Ronobir</h3>
                                    <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar" class="flex text-sm bg-gray-800 rounded-full md:me-0 " type="button">
                                        <img class="w-12 h-12 rounded-full " src="https://i.ibb.co/98W6xRQ/new.png" alt="">
                                    </button>
                                </div>

                                <!-- Dropdown menu -->
                                <div id="dropdownAvatar" class="z-10 hidden bg-[#17082D]  absolute    divide-gray-100  shadow-md w-44 h-40">


                                    <ul class="py-3  font-semibold text-lg text-white text-center">
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-[#309267]  duration-500">Profile</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-[#309267]  duration-500  ">Settings</a>
                                        </li>
                                        <li>
                                            <a href="Logout.php" class="block px-4 py-2 hover:bg-[#309267]  duration-500  ">Logout</a>
                                        </li>
                                    </ul>

                                </div>

                            </li>
                        </ul>
                    </nav>