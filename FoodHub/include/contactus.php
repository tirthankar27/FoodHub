<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Contact Us</title>
</head>
<body class="flex flex-col min-h-screen bg-gray-200">
    <?php include 'header.php'; ?>
    <main class="flex-grow flex items-center justify-center p-8">
        <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-lg">
            <h2 class="text-3xl font-bold mb-6 text-center text-black">Contact Us</h2>
            <form method="POST" action="../B230036_3.php" class="space-y-4">
                <input type="text" name="name" placeholder="Name" required class="w-full p-2 border rounded">
                <input type="email" name="email" placeholder="Email" required class="w-full p-2 border rounded">
                <textarea name="message" placeholder="Your message" required class="w-full p-2 border rounded"></textarea>
                <button type="submit" class="w-full py-2 bg-red-600 text-white rounded hover:bg-red-700">Send Message</button>
            </form>
            <div class="mt-6 text-center text-gray-700">
                <p>Email: contact@foodhub.com</p>
                <p>Phone: +123 456 7890</p>
            </div>
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>