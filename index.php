<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EchoPost</title>
    <!-- #Cuastom CSS File -->
    <link rel="stylesheet" href="./Assets/Css/index.css">
    <!-- #Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- #DaisyUI CDN -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <!-- #Fontawesome CDN -->
    <script src="https://kit.fontawesome.com/337002c4cc.js" crossorigin="anonymous"></script>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>
<?php

$image = '<img class="w-52 h-20 object-cover" src="./Assets/Images/echopost-logo.png" alt="">';
$_SESSION['image'] = $image;
$image2 = '<img class="w-5 h-5" src="./Assets/Images/footer_image/pink-star (1).png" alt="">';
$_SESSION['image2'] = $image2;
// banerr 
// $banner1 = '<img class="max-w-3xl" src="" alt="">';
// $_SESSION['banner1'] = $banner1;

 




?>



<?php include_once('./Assets/Components/header.php') ?>

<!-- banner  -->
<?php include_once('./Assets/Components/banner.php')?>





 





/

<!-- #Footer Component Here -->

<?php include_once('./Assets/Components/footer.php') ?>



<script src="https:cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="./Assets/Js/header.js"></script>
</body>

</html>