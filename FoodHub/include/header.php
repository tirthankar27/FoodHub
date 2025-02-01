<nav class="flex flex-col sm:flex-row justify-between p-4 bg-black text-yellow-400 fixed top-0 left-0 right-0 z-10">
    <a href="../B230036_3.php" class="text-3xl font-bold mb-2 sm:mb-0">FoodHub</a>
    <div class="space-y-2 sm:space-y-0 sm:space-x-8 flex flex-col sm:flex-row items-center">
        <?php if (!isset($_SESSION['id'])): ?>
            <a href="../B230036_3.php" class="text-lg hover:underline">Home</a>
            <a href="include/login.php" class="text-lg hover:underline">Login</a>
            <a href="include/signup.php" class="text-lg hover:underline">Signup</a>
        <?php else: ?>
            <a href="../B230036_3.php" class="text-lg hover:underline">Home</a>
            <a href="include/cart.php" class="text-lg hover:underline">Cart</a>
            <a href="include/contactus.php" class="text-lg hover:underline">Contact</a>
            <a href="include/logout.php" class="text-lg hover:underline">Logout</a>
        <?php endif; ?>
    </div>
</nav>