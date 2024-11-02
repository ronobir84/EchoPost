 <button id="to-top-button" onclick="goToTop()" title="Go To Top"
     class="hidden fixed z-50 bottom-10 right-10 mr-11 p-4 border-0 w-14 h-14 rounded-full shadow-md bg-purple-600 hover:bg-purple-700 text-white text-lg font-semibold transition-colors duration-300">
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
         <path d="M12 4l8 8h-6v8h-4v-8H4l8-8z" />
     </svg>
     <span class="sr-only">Go to top</span>
 </button>

 <script>
     // Get the 'to top' button element by ID
     var toTopButton = document.getElementById("to-top-button");

     // Check if the button exists
     if (toTopButton) {

         // On scroll event, toggle button visibility based on scroll position
         window.onscroll = function() {
             if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
                 toTopButton.classList.remove("hidden");
             } else {
                 toTopButton.classList.add("hidden");
             }
         };

         // Function to scroll to the top of the page smoothly
         window.goToTop = function() {
             window.scrollTo({
                 top: 0,
                 behavior: 'smooth'
             });
         };
     }
 </script>