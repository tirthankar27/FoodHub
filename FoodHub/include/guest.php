<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>FoodHub</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="flex flex-col min-h-screen">
    <?php 
    include 'include/header.php'; 
    $welcomeMessage = "Welcome to FoodHub! Please log in or sign up.";
    ?>

    <main class="flex-grow">
        <section id="page1" class="bg-cover bg-center text-white h-[calc(100vh-4rem)]" style="background-image: url('images/d.jpg');">
            <div class="container mx-auto h-full flex flex-col justify-center">
                <div class="text-center bg-black bg-opacity-70 p-8 rounded w-2/3 mx-auto">
                    <h2 class="text-3xl font-semibold"><?php echo $welcomeMessage; ?></h2>
                    <p class="mt-4">Delicious recipes, fresh ingredients, and mouthwatering dishes await you.</p>
                    <p class="mt-2">Explore our menu and discover flavors that will satisfy every craving!</p>
                    <div class="mt-6">
                        <a href="#page2" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-800 transition duration-300 ease-in-out">Start your journey</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="page2" class="mt-8">
            <div class="container mx-auto max-w-7xl">
                <div class="bg-gray-400 text-black h-[80vh] flex flex-col md:flex-row items-center p-8 rounded-lg">
                    <div class="md:w-1/2 text-center md:text-left md:pr-8">
                        <h1 class="text-3xl font-bold text-purple-900">About FoodHub</h1>
                        <p class="mt-4">Welcome to The FOOD HUB - your one-stop destination for delicious and fresh culinary delights! Explore a wide variety of mouth-watering dishes, handpicked to satisfy your cravings.</p>
                        <p class="mt-2">Our chefs are passionate about using the freshest ingredients, sourced locally and globally, to create dishes that are not only delicious but also nutritious.</p>
                        <p class="mt-2">Join us at FoodHub and embark on a culinary journey like no other.</p>
                    </div>
                    <div class="md:w-1/2 mt-6 md:mt-0 h-full">
                        <img src="images/5.jpg" alt="Food Image" class="w-full h-full object-cover rounded-lg">
                    </div>
                </div>
            </div>
        </section>
        <section id="items" class="py-20 bg-gray-100">
            <div class="container mx-auto text-center">
                <h2 class="text-3xl font-bold">Our Menu</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mt-8">
                    <div class="item bg-white border border-gray-300 shadow rounded-lg overflow-hidden relative group mb-4 cursor-pointer">
                        <a href="include/login.php">
                            <img src="images/3.jpg" alt="Pizzas" class="w-full h-48 object-cover rounded-lg">
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition duration-300 flex items-center justify-center">
                                <p class="text-white font-semibold opacity-0 group-hover:opacity-100 transition duration-300">Pizzas</p>
                            </div>
                        </a>
                    </div>
                    <div class="item bg-white border border-gray-300 shadow rounded-lg overflow-hidden relative group mb-4 cursor-pointer">
                        <a href="include/login.php">
                            <img src="images/4.jpg" alt="Noodles" class="w-full h-48 object-cover rounded-lg">
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition duration-300 flex items-center justify-center">
                                <p class="text-white font-semibold opacity-0 group-hover:opacity-100 transition duration-300">Noodles</p>
                            </div>
                        </a>
                    </div>
                    <div class="item bg-white border border-gray-300 shadow rounded-lg overflow-hidden relative group mb-4 cursor-pointer">
                        <a href="include/login.php">
                            <img src="images/2.jpg" alt="Desserts" class="w-full h-48 object-cover rounded-lg">
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition duration-300 flex items-center justify-center">
                                <p class="text-white font-semibold opacity-0 group-hover:opacity-100 transition duration-300">Desserts</p>
                            </div>
                        </a>
                    </div>
                    <div class="item bg-white border border-gray-300 shadow rounded-lg overflow-hidden relative group mb-4 cursor-pointer">
                        <a href="include/login.php">
                            <img src="images/8.jpg" alt="Others" class="w-full h-48 object-cover rounded-lg">
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition duration-300 flex items-center justify-center">
                                <p class="text-white font-semibold opacity-0 group-hover:opacity-100 transition duration-300">Others</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'include/footer.php'; ?>
</body>
</html>