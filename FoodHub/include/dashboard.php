<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="flex flex-col min-h-screen">
    <?php include 'include/header.php'; ?>

    <main class="flex-grow container mx-auto my-12">
        <h1 class="text-4xl font-bold text-center">Dashboard</h1>
        <p class="text-center mt-4">Hello, <?php echo htmlspecialchars($_SESSION['name']); ?>! Welcome to your dashboard.</p>
    </main>

    <?php include 'include/footer.php'; ?>
</body>
</html>
