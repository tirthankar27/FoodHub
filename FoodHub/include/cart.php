<?php
session_start();
include 'db.php';

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_to_cart'])) {
        $item_id = $_POST['item_id'];
        $stmt = $conn->prepare("SELECT * FROM items WHERE item_id = ?");
        $stmt->bind_param("i", $item_id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $item = $result->fetch_assoc();
            $cart_item = [
                'item_id' => $item['item_id'],
                'item_name' => $item['item_name'],
                'item_price' => $item['item_price']
            ];
            
            $_SESSION['cart'][] = $cart_item;
        }
    } elseif (isset($_POST['remove_from_cart'])) {
        $remove_item_id = $_POST['remove_item_id'];
        
        foreach ($_SESSION['cart'] as $key => $cart_item) {
            if ($cart_item['item_id'] == $remove_item_id) {
                unset($_SESSION['cart'][$key]);
            }
        }
        
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <?php include 'header.php'; ?>

    <div class="min-h-screen flex flex-col items-center justify-center pt-20">
        <h1 class="text-4xl font-bold mb-6">Your Cart</h1>
        
        <table class="w-full max-w-3xl bg-white shadow-lg rounded-lg">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="py-3 px-4">Serial No</th>
                    <th class="py-3 px-4">Item Name</th>
                    <th class="py-3 px-4">Price</th>
                    <th class="py-3 px-4">Remove</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $total = 0;
                if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])): 
                    foreach ($_SESSION['cart'] as $index => $cart_item):
                        $total += $cart_item['item_price'];
                ?>
                    <tr class="text-center">
                        <td class="py-4 px-4"><?= $index + 1; ?></td>
                        <td class="py-4 px-4"><?= htmlspecialchars($cart_item['item_name']); ?></td>
                        <td class="py-4 px-4"><?= number_format($cart_item['item_price'], 2); ?> Rs.</td>
                        <td class="py-4 px-4">
                            <form method="post" action="">
                                <input type="hidden" name="remove_item_id" value="<?= $cart_item['item_id']; ?>">
                                <button type="submit" name="remove_from_cart" class="text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; else: ?>
                    <tr class="text-center">
                        <td colspan="4" class="py-4 px-4">Your cart is empty.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
            <tfoot class="bg-gray-200 text-center">
                <tr>
                    <td colspan="2" class="py-4 px-4 font-bold">Total</td>
                    <td colspan="2" class="py-4 px-4 font-bold"><?= number_format($total, 2); ?> Rs.</td>
                </tr>
                <tr>
                    <td colspan="4" class="py-4">
                        <a href="success.php" class="bg-green-500 text-white font-bold py-2 px-6 rounded hover:bg-green-600">Buy Now</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>