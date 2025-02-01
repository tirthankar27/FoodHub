<?php
include 'includes/header.php';
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM items LIMIT 12";
$result = $conn->query($sql);

$images = [
    '1.jpg',
    '2.jpg',
    'chickennuggets.jpg',
    'pasta.jpg',
    'n.jpg',
    'samosa.jpg',
    'idli.jpg',
    'e.jpg',
    'pizza.jpg',
    'k.jpg',
    'm.jpg',
    'burger.jpg'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Food List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="flex flex-col min-h-screen">
    <?php include 'includes/header.php'; ?>

    <main class="flex-grow py-8">
        <div class="container mx-auto">
            <h1 class="text-3xl font-bold text-center mb-8">Food List</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                <?php $index = 0; ?>
                <?php while ($row = $result->fetch_assoc() && $index < count($images)) { ?>
                    <div class="bg-white border border-gray-300 shadow rounded-lg p-4">
                        <div class="h-48 bg-gray-300 rounded-lg mb-4 flex items-center justify-center">
                            <img src="images/<?php echo $images[$index]; ?>" alt="<?php echo htmlspecialchars($row['item_name']); ?>" class="w-full h-full object-cover rounded-lg">
                        </div>
                        <h2 class="text-xl font-semibold mb-2"><?php echo htmlspecialchars($row['item_name']); ?></h2>
                        <p class="text-gray-700 mb-4">Price: $<?php echo htmlspecialchars($row['price']); ?></p>
                        <div class="flex justify-between">
                            <button class="bg-red-600 text-white px-3 py-2 rounded hover:bg-red-800 transition duration-300 ease-in-out">Add to Cart</button>
                            <button class="bg-green-600 text-white px-3 py-2 rounded hover:bg-green-800 transition duration-300 ease-in-out">Buy Now</button>
                        </div>
                    </div>
                    <?php $index++; ?>
                <?php } ?>
            </div>
        </div>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>
</html>