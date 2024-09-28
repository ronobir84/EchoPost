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
            margin-top: 50px;
            box-shadow: 10px 5px 5px darkgray;
            border-radius: 1px;
        }

        .nav_title {
            display: flex;
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
        <div class="nav_item">
            <div class="nav_title">
                <i class="fa-solid fa-chevron-right icon-min"></i>
                <h3 class="h3_min">Post Title</h3>
                <i class="fa-solid fa-chevron-right icon-min"></i>
                <a class="a_1" href="">
                    <h3 class="h3_title">hello title</h3>
                </a>
            </div>

        </div>

    </section>
    <!-- na -->






</body>

</html>