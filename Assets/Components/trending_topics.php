<div class="mt-20">
    <?php
    $sql = "SELECT * FROM categories";
    $query = mysqli_query($database, $sql);
    
    
    ?>
    <div class="flex justify-center  items-center">
        <img class="w-5 h-5" src="http://localhost/EchoPost/Assets/Images/footer_image/pink-star (1).png" alt="">
        <img src="" alt="">
        <h2 class="text-xl text-black font-bold text-center">Trending Topics</h2>
    </div>
    <div class="w-10/12 bg-white shadow-md mt-10  rounded-full py-3 mx-auto ">
        <div class="flex justify-between px-16">
            <!-- first category -->
            <div>
                <div class="w-24 h-24  shadow-xl hover:shadow-orange-500/100 duration-500  rounded-full bg-orange-400">


                </div>
                <h2 class="text-xl font-bold text-black pl-3 pt-1">HTML</h2>
            </div>

            <!-- second category -->
            <div>
                <div class="w-24 h-24  shadow-xl hover:shadow-purple-700/100 duration-500 bg-purple-700 rounded-full ">


                </div>
                <h3 class="text-xl font-bold text-black relative right-6 pt-1">Fundamentals</h3>
            </div>
            <!-- third category -->
            <div>
                <div class="w-24 h-24  rounded-full shadow-xl hover:shadow-blue-700/100 duration-500 bg-blue-700">


                </div>
                <h1 class="text-xl font-bold text-black relative left-6 pt-1">CSS</h1>
            </div>
            <!-- Four category -->
            <div>
                <div class="w-24 h-24  shadow-xl hover:shadow-blue-500/100 bg-blue-500 rounded-full ">


                </div>
                <h2 class="text-xl font-bold text-black relative right-2 pt-1">Databases</h2>
            </div>
            <!-- five category -->
            <div>
                <div class="w-24 h-24  shadow-xl hover:shadow-black/100 duration-500 bg-black rounded-full ">


                </div>
                <h3 class="text-xl font-bold text-black relative right-3 pt-1">Deployment</h3>
            </div>
            <div class="flex gap-9 items-center">
                <h3 class="text-xl font-semibold text-black">or....</h3>
                <button class="  w-36 h-12  md:block  rounded hover:bg-[#282424] duration-500 text-lg font-semibold text-white bg-[#6A4EE9]">
                    Explore All
                </button>

            </div>

        </div>



    </div>

</div>