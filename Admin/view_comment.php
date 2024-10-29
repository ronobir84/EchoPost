<?php include_once('./adminPartials/Admin_header.php');


$id = $_GET['id'];
$sql = "SELECT * FROM comments WHERE comment_id = '$id'";
$query = mysqli_query($database, $sql);
$result = mysqli_fetch_array($query);



?>


<div class="group absolute ml-[3%] mt-14 inline-block  ">
    <a href="comments.php">
        <button class="focus:outline-none  ">

            <i class="fa-solid fa-arrow-left text-lg  w-12 h-12  p-2  duration-500 hover:bg-[#17082D] border-2 border-[#282424] hover:text-white  text-[#17082D] rounded-full"></i>


        </button>
    </a>
    <button
        class="absolute -top-11 left-1/2 transform -translate-x-1/2 z-20  w-24 h-10 text-base font-bold text-white bg-[#17082D] rounded shadow-lg transition-transform duration-300 ease-in-out scale-0 group-hover:scale-100">Go Back</button>


</div>



<div class="flex items-center justify-center w-full">
    <div class=" w-full  min-h-screen bg-[#E5ECFF]  py-16">


        <div class="w-2/3 bg-white mx-auto py-12  rounded-sm shadow">
            <div class="flex flex-col gap-4 p-2 select-none">
                <div class="flex items-end">
                    <div class="w-8   p-1.5">

                    </div>
                    <p class="mx-2 p-4 rounded bg-[#6A4EE9] leading-4 text-lg font-semibold text-white"><?php echo $result['comment_content'] ?></p>
                </div>
                <div class="flex items-end flex-row-reverse">
                    <div class="rounded   w-8 aspect-square p-1.5">

                    </div>
                    <p class="mx-2 p-4 rounded bg-[#86EFAC] leading-4 text-lg text-[#6A4EE9] font-semibold">Hi there 👋 How can I help you today?</p>
                </div>

            </div>
            <div class="flex items-center px-10 gap-5 mt-6">
                <input class="border-[1px] border-gray-500 w-[90%] h-12 px-4 rounded-sm" placeholder="Replay The Comment" type="text" name="" id="">
                <button class="w-12 rounded-full bg-[#86EFAC] h-12 border">
                    <i class="fa-solid fa-arrow-right fa-lg  text-[#6A4EE9] "></i>

                </button>

            </div>
        </div>




    </div>
</div>








<?php include_once('./adminPartials/Admin_footer.php') ?>