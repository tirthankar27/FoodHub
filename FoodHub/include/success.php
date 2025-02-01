<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg p-8 text-center max-w-lg">
        <h2 class="text-2xl font-bold mb-4">Thank you for ordering!</h2>
        <p class="text-gray-700 mb-6">Our delivery partner will reach out to you soon.</p>
        <a href="../B230036_3.php" class="bg-green-500 text-white font-bold py-2 px-6 rounded hover:bg-green-600">OK</a>
    </div>
</body>
</html>
