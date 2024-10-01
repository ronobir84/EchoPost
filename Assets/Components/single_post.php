<?php
ob_start();
include_once('../../database.php');

$id = $_GET['id'];


$sql = "SELECT * FROM posts LEFT JOIN categories ON posts.category_id = categories.category_id LEFT JOIN users ON posts.user_id = users.user_id WHERE post_id = '$id'";

$query = mysqli_query($database, $sql);
$result = mysqli_fetch_assoc($query);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EchoPost</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Playwrite+AU+VIC:wght@100..400&family=Playwrite+NZ:wght@100..400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">







    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

            scroll-behavior: smooth;

        }

        body {
            background-color: #F5F5F5;
            width: 100%;
            min-height: 100vh;
            max-height: auto;
            font-family: "Nunito Sans", sans-serif;

        }

        .banner_1 {
            width: 100%;
            height: 350px;
            background-color: black;
            text-align: center;

        }

        .banner_text {
            color: #FFFFFF;

            font-size: 40px;

            font-family: "Noto Serif", serif;

            font-weight: 700;
            /* text-align: center; */
            padding-top: 100px;


        }

        .dev {
            display: inline-block;
            font-size: 40px;
            line-height: 1;
            font-weight: black;
            background: linear-gradient(to top left, #ff75c3, #ffa647, #ffe83f, #9fff5b, #70e2ff, #cd93ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-family: "Noto Serif", serif;

        }

        .text-pr {
            /* text-align: center; */
            color: darkgray;
            font-size: 20px;
            font-weight: 400;
            padding-top: 15px;
            font-weight: 600;
        }

        .banner_button {
            padding: 10px 20px;
            background-color: #6A4EE9;
            color: white;
            font-size: larger;
            font-weight: 600;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 16px;
        }

        .nav_item {
            width: 90%;
            height: 80px;
            /* border: 1px solid darkgray; */
            background-color: white;
            margin-left: auto;
            margin-right: auto;
            margin-top: 40px;
            box-shadow: 10px 5px 5px darkgray;
            border-radius: 1px;
        }

        .nav_title {
            display: flex;
            gap: 13px;
            align-items: center;
            padding-left: 6%;
            padding-top: 24px;
        }

        .h3_min {
            font-size: 22px;
            color: black;
            font-weight: 600;
        }

        .a_1 {
            text-decoration: none;
            color: black;
            font-size: 20px;
            font-weight: 700;

        }

        .a_1:hover {
            color: #6A4EE9;
            transition-duration: 500ms;
        }

        /* home page button */
        .tooltip {
            position: relative;
            display: inline-block;
            cursor: pointer;
        }

        .tooltip button {
            background-color: #1F2937;
            color: #fff;
            border: none;
            position: relative;
            width: 40px;
            height: 40px;
            left: 75px;
            /* bottom: 2px; */
            top: 20px;
            border-radius: 100%;


            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s ease-out;
        }

        .tooltip button:hover {

            transform: scale(1.05);
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }

        .tooltiptext {
            visibility: hidden;
            width: 160px;
            background-color: #1F2937;
            color: #fff;
            text-align: center;
            border-radius: 10px;
            padding: 5px;
            position: absolute;
            z-index: 1;
            bottom: 78%;

            /* margin-left: -80px; */
            opacity: 0;
            transition: opacity 0.3s;
        }

        .tooltiptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #333 transparent transparent transparent;
            
        }
    </style>


</head>

<body>
    <!-- banner section first -->
    <section>

        <div>
            <div class="banner_1">
                <h1 class="banner_text">Every <span class="dev">developer</span> has a tab open to EchoPost</h1>
                <h4 class="text-pr">For over New we’ve been the Q&A platform of choice that millions of people visit every month to ask questions, </h4>
                <button class="banner_button">Get started</button>



            </div>


        </div>
        <div>
            <div class="tooltip">
                <a href="../../index.php">
                    <button><i class="fa-solid fa-house"></i></button>
                </a>
                <div class="tooltiptext">BACK TO HOME!</div>
            </div>
        </div>
        <div class="nav_item">
            <div class="nav_title">
                <i class="fa-solid fa-chevron-right icon-min fa-lg"></i>
                <h3 class="h3_min">Post Title</h3>
                <i class="fa-solid fa-chevron-right icon-min fa-lg"></i>
                <a class="a_1" href="">
                    <h3 class="h3_title"><?php echo $result['post_title']?></h3>
                </a>
            </div>

        </div>

    </section>



<!-- post section -->


<section>
    <?php include_once('post_min.php') ?>

</section>

 




</body>

</html>