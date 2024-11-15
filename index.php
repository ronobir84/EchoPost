


 <div>
    <?php

      $base_url = 'http://localhost/EchoPost/';

      include_once('./Assets/Components/header.php') ?>




    <?php



      ?>

    <!-- banner  section-->
    <?php include_once('./Assets/Components/banner.php') ?>




    <!-- Trending Topics section-->

    <?php include_once('./Assets/Components/trending_topics.php') ?>


    <!-- category and and sidebar post -->

    <?php include_once('./Assets/Components/Category.php') ?>








    <!-- community_banner -->

    <?php include_once('./Assets/Components/community_banner.php') ?>

    <button id="to-top-button" onclick="goToTop()" title="Go To Top"
       class="hidden fixed z-50 bottom-10 right-10 p-4 border-0 w-14 h-14 rounded-full shadow-md bg-purple-600 hover:bg-purple-700 text-white text-lg font-semibold transition-colors duration-300">
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
          <path d="M12 4l8 8h-6v8h-4v-8H4l8-8z" />
       </svg>
       <span class="sr-only">Go to top</span>
    </button>

    <!-- #Footer Component Here -->

    <?php include_once('./Assets/Components/footer.php') ?>
 </div>