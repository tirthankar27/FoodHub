<?php 
include 'db.php'; 
?>

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
    <?php include 'header.php'; ?>
    
    <main class="flex-grow mt-16">
        <section id="page1" class="bg-cover bg-center text-white h-[calc(100vh-4rem)]" style="background-image: url('images/b.jpg');">
            <div class="container mx-auto h-full flex flex-col justify-center">
                <div class="text-center bg-black bg-opacity-70 p-8 rounded w-2/3 mx-auto">
                    <?php if (isset($_SESSION['name'])): ?>
                        <h2 class="text-3xl font-semibold">Welcome, <?php echo htmlspecialchars($_SESSION['name']); ?>!</h2>
                    <?php else: ?>
                        <h2 class="text-3xl font-semibold">Welcome to FoodHub!</h2>
                    <?php endif; ?>
                    <p class="mt-2">Discover our amazing features and benefits!</p>
                    <input type="text" placeholder="Discover our foods" class="mt-4 p-2 w-full max-w-xs rounded border border-gray-300">
                    <div class="mt-4">
                        <a href="#foodlist" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-800 transition duration-300 ease-in-out">Explore More</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="foodlist" class="py-20 bg-gray-100">
            <div class="container mx-auto text-center">
                <h2 class="text-3xl font-bold">Delicious Food Items</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-8">
                    <div class="item bg-white border border-gray-300 shadow rounded-lg p-4">
                        <img src="images/1.jpg" alt="Food Item 1" class="w-full h-32 object-cover rounded-lg">
                        <h3 class="mt-2 font-semibold">Waffle</h3>
                        <p class="mt-1 text-lg font-bold">Rs. 150</p>
                        <div class="mt-4 flex justify-between">
                            <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700 transition duration-300">Add to Cart</button>
                            <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-700 transition duration-300">Buy Now</button>
                        </div>
                    </div>
                    <div class="item bg-white border border-gray-300 shadow rounded-lg p-4">
                        <img src="images/2.jpg" alt="Food Item 2" class="w-full h-32 object-cover rounded-lg">
                        <h3 class="mt-2 font-semibold">Croissant</h3>
                        <p class="mt-1 text-lg font-bold">Rs. 120</p>
                        <div class="mt-4 flex justify-between">
                            <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700 transition duration-300">Add to Cart</button>
                            <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-700 transition duration-300">Buy Now</button>
                        </div>
                    </div>
                    <div class="item bg-white border border-gray-300 shadow rounded-lg p-4">
                        <img src="images/chickennuggets.jpg" alt="Chicken Nuggets" class="w-full h-32 object-cover rounded-lg">
                        <h3 class="mt-2 font-semibold">Chicken Nuggets</h3>
                        <p class="mt-1 text-lg font-bold">Rs. 200</p>
                        <div class="mt-4 flex justify-between">
                            <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700 transition duration-300">Add to Cart</button>
                            <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-700 transition duration-300">Buy Now</button>
                        </div>
                    </div>
                    <div class="item bg-white border border-gray-300 shadow rounded-lg p-4">
                        <img src="images/pasta.jpg" alt="Pasta" class="w-full h-32 object-cover rounded-lg">
                        <h3 class="mt-2 font-semibold">Pasta</h3>
                        <p class="mt-1 text-lg font-bold">Rs. 250</p>
                        <div class="mt-4 flex justify-between">
                            <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700 transition duration-300">Add to Cart</button>
                            <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-700 transition duration-300">Buy Now</button>
                        </div>
                    </div>
                    <div class="item bg-white border border-gray-300 shadow rounded-lg p-4">
                        <img src="images/n.jpg" alt="Pancake" class="w-full h-32 object-cover rounded-lg">
                        <h3 class="mt-2 font-semibold">Pancake</h3>
                        <p class="mt-1 text-lg font-bold">Rs. 180</p>
                        <div class="mt-4 flex justify-between">
                            <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700 transition duration-300">Add to Cart</button>
                            <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-700 transition duration-300">Buy Now</button>
                        </div>
                    </div>
                    <div class="item bg-white border border-gray-300 shadow rounded-lg p-4">
                        <img src="images/samosa.jpg" alt="Samosa" class="w-full h-32 object-cover rounded-lg">
                        <h3 class="mt-2 font-semibold">Samosa</h3>
                        <p class="mt-1 text-lg font-bold">Rs. 100</p>
                        <div class="mt-4 flex justify-between">
                            <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700 transition duration-300">Add to Cart</button>
                            <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-700 transition duration-300">Buy Now</button>
                        </div>
                    </div>
                    <div class="item bg-white border border-gray-300 shadow rounded-lg p-4">
                        <img src="images/idli.jpg" alt="Idli" class="w-full h-32 object-cover rounded-lg">
                        <h3 class="mt-2 font-semibold">Idli</h3>
                        <p class="mt-1 text-lg font-bold">Rs. 60</p>
                        <div class="mt-4 flex justify-between">
                            <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700 transition duration-300">Add to Cart</button>
                            <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-700 transition duration-300">Buy Now</button>
                        </div>
                    </div>
                    <div class="item bg-white border border-gray-300 shadow rounded-lg p-4">
                        <img src="images/e.jpg" alt="Muffin" class="w-full h-32 object-cover rounded-lg">
                        <h3 class="mt-2 font-semibold">Muffin</h3>
                        <p class="mt-1 text-lg font-bold">Rs. 90</p>
                        <div class="mt-4 flex justify-between">
                            <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700 transition duration-300">Add to Cart</button>
                            <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-700 transition duration-300">Buy Now</button>
                        </div>
                    </div>
                    <div class="item bg-white border border-gray-300 shadow rounded-lg p-4">
                        <img src="images/pizza.jpg" alt="Pizza" class="w-full h-32 object-cover rounded-lg">
                        <h3 class="mt-2 font-semibold">Pizza</h3>
                        <p class="mt-1 text-lg font-bold">Rs. 300</p>
                        <div class="mt-4 flex justify-between">
                            <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700 transition duration-300">Add to Cart</button>
                            <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-700 transition duration-300">Buy Now</button>
                        </div>
                    </div>
                    <div class="item bg-white border border-gray-300 shadow rounded-lg p-4">
                        <img src="images/k.jpg" alt="Chicken" class="w-full h-32 object-cover rounded-lg">
                        <h3 class="mt-2 font-semibold">Chicken</h3>
                        <p class="mt-1 text-lg font-bold">Rs. 500</p>
                        <div class="mt-4 flex justify-between">
                            <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700 transition duration-300">Add to Cart</button>
                            <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-700 transition duration-300">Buy Now</button>
                        </div>
                    </div>
                    <div class="item bg-white border border-gray-300 shadow rounded-lg p-4">
                        <img src="images/m.jpg" alt="Pastry" class="w-full h-32 object-cover rounded-lg">
                        <h3 class="mt-2 font-semibold">Pastry</h3>
                        <p class="mt-1 text-lg font-bold">Rs. 60</p>
                        <div class="mt-4 flex justify-between">
                            <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700 transition duration-300">Add to Cart</button>
                            <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-700 transition duration-300">Buy Now</button>
                        </div>
                    </div>
                    <div class="item bg-white border border-gray-300 shadow rounded-lg p-4">
                        <img src="images/burger.jpg" alt="Burger" class="w-full h-32 object-cover rounded-lg">
                        <h3 class="mt-2 font-semibold">Burger</h3>
                        <p class="mt-1 text-lg font-bold">Rs. 250</p>
                        <div class="mt-4 flex justify-between">
                            <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700 transition duration-300">Add to Cart</button>
                            <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-700 transition duration-300">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php include 'footer.php'; ?>
</body>
</html>