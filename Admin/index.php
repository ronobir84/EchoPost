<?php include_once('./adminPartials/Admin_header.php') ?>





<div>
    <div class="w-full min-h-screen bg-[#E5ECFF]">
        <div class="pt-10 px-8">
            <!-- overview -->
            <div class="flex justify-between items-center ">
                <div>
                    <h3 class="text-2xl font-bold text-[#6A4EE9]">Overview</h3>
                </div>
                <div class="flex gap-5">
                    <i class="fa-solid fa-comment fa-2xl text-[#6A4EE9]"></i>
                    <i class="fa-solid fa-bell fa-2xl text-[#6A4EE9]"></i>
                </div>


            </div>
            <!-- div card section all details -->
            <div class="flex gap-4 pt-4">

                <!-- all Blogs -->
                <div class="w-80 h-32 bg-white shadow-md rounded-sm">
                    <div class="flex justify-center gap-10 pt-6 items-center">

                        <div class="w-20 h-20 rounded-full bg-[#A9F0E8] p-[21px]">
                            <i class="fa-solid fa-rss text-4xl text-white"></i>
                        </div>
                        <div class="border-l-4 border-[#A9F0E8] pl-11">
                            <h2 class="text-xl font-bold text-black">Posts</h2>
                            <h1 class="text-3xl font-black text-[#6A4EE9] text-center">10</h1>
                        </div>

                    </div>

                </div>

                <!-- all  category -->
                <div class="w-80 h-32 bg-white shadow-md rounded-sm">
                    <div class="flex justify-center gap-6 pt-6 items-center">

                        <div class="w-20 h-20 rounded-full bg-[#FCA6D4] p-[21px]">
                            <i class="fa-solid fa-compass text-4xl text-white"></i>

                        </div>
                        <div class="border-l-4 border-[#FCA6D4] pl-11">
                            <h2 class="text-xl font-bold text-black">Categories</h2>
                            <h1 class="text-3xl font-black text-[#6A4EE9] text-center">12</h1>
                        </div>

                    </div>

                </div>

                <!-- all users -->
                <div class="w-80 h-32 bg-white shadow-md rounded-sm">
                    <div class="flex justify-center gap-10 pt-6 items-center">

                        <div class="w-20 h-20 rounded-full bg-[#FDECA9] p-[21px]">
                            <i class="fa-solid fa-users text-4xl text-white"></i>


                        </div>
                        <div class="border-l-4 border-[#FDECA9] pl-11">
                            <h2 class="text-xl font-bold text-black">Users</h2>
                            <h1 class="text-3xl font-black text-[#6A4EE9] text-center">9</h1>
                        </div>

                    </div>

                </div>

                <!-- all users -->
                <div class="w-80 h-32 bg-white shadow-md rounded-sm">
                    <div class="flex justify-center gap-10 pt-6 items-center">

                        <div class="w-20 h-20 rounded-full bg-[#C0F7C1] p-[21px]">
                            <i class="fa-solid fa-comments  text-4xl text-white"></i>



                        </div>
                        <div class="border-l-4 border-[#C0F7C1] pl-11">
                            <h2 class="text-xl font-bold text-black">Comments</h2>
                            <h1 class="text-3xl font-black text-[#6A4EE9] text-center">14</h1>
                        </div>

                    </div>

                </div>

            </div>


            <div class="pt-8 flex gap-4">
                <div class="w-2/3">
                    <div>
                        <canvas id="myChart"></canvas>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                    <script>
                        const ctx = document.getElementById('myChart');

                        new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ['Posts', 'Categories', 'Users', 'Comments', 'View', 'Like'],
                                datasets: [{
                                    label: '# of Votes',
                                    data: [12, 19, 3, 5, 2, 3],
                                    borderWidth: 2
                                }]
                            },
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            }
                        });
                    </script>
                </div>


                <div>

                    <div class="w-[480px] flex flex-col pt-4 h-[400px]">
                        <div class="bg-gray-200  flex-1 overflow-y-scroll">
                            <div class="px-4 py-2">
                                <div class="flex items-center mb-2">
                                    <img class="w-8 h-8 rounded-full mr-2" src="https://picsum.photos/50/50" alt="User Avatar">
                                    <div class="font-medium">John Doe</div>
                                </div>
                                <div class="bg-white rounded-lg p-2 shadow mb-2 max-w-sm">
                                    Hi, how can I help you?
                                </div>
                                <div class="flex items-center justify-end">
                                    <div class="bg-blue-500 text-white rounded-lg p-2 shadow mr-2 max-w-sm">
                                        Sure, I can help with that.
                                    </div>
                                    <img class="w-8 h-8 rounded-full" src="https://picsum.photos/50/50" alt="User Avatar">
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-100 px-4 py-2">
                            <div class="flex items-center">
                                <input class="w-full border rounded-full py-2 px-4 mr-2" type="text" placeholder="Type your message...">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-full">
                                    Send
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>









<?php include_once('./adminPartials/Admin_footer.php') ?>