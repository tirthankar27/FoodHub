<footer>
    <div class="flex flex-col w-full h-fit bg-[#374151] text-[#e5e7eb] px-6 md:px-14 py-10 mt-5">
        <div class="flex flex-col md:flex-row m-1">
            <div class="flex flex-col gap-2 justify-center md:w-[35%] w-full">
                <div class="flex items-center gap-4">
                    <img class="bg-white border border-white shadow-2xl rounded-full" src="images/foodie.jpg" width="100" alt="Logo">
                    <div class="text-2xl md:text-3xl">Join our team</div>
                </div>
            </div>
            <div class="flex flex-col gap-2 w-full md:w-[65%] mt-6 md:mt-0 md:justify-end text-nowrap">
                <div class="font-bold uppercase text-[#9ca3af] pb-3">Contact us</div>
                <form class="flex items-center" action="include/contactus.php" method="get">
                    <input type="email" name="email" placeholder="Enter your email" class="w-full bg-gray-100 text-gray-700 rounded-l-lg py-3 px-4 focus:outline-none focus:ring-purple-600 focus:border-transparent" required>
                    <button type="submit" class="bg-[#7e22ce] text-[#ffffff] font-semibold py-3 px-6 rounded-r-lg transition-colors duration-300">Join</button>
                </form>
            </div>
        </div>
        <div class="w-full border-t border-gray-500 my-3"></div>
        <div class="text-center">@foodhub</div>
    </div>
</footer>