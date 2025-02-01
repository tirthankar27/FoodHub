<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $checkStmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $checkStmt->bind_param("s", $email);
    $checkStmt->execute();
    $result = $checkStmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('User with this email already exists. Please use another email or login.'); window.location.href='signup.php';</script>";
    } else {
        $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $password);

        if ($stmt->execute()) {
            echo "<script>alert('Signup successful! Please login.'); window.location.href='login.php';</script>";
            exit();
        } else {
            echo "<script>alert('Error: " . $stmt->error . "'); window.location.href='signup.php';</script>";
        }
        $stmt->close();
    }
    $checkStmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Signup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="flex min-h-screen bg-cover bg-center" style="background-image: url('images/bg.jpg');">
    <main class="flex-grow flex items-center justify-center">
        <div class="bg-black bg-opacity-70 p-8 rounded-lg flex w-3/4 mx-auto">
            <div class="w-1/2 pr-4">
                <h2 class="text-3xl font-bold text-center text-white mb-6">Sign Up</h2>
                <form method="POST" action="" class="space-y-4">
                    <div>
                        <input type="text" name="name" id="name" placeholder="Name" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div>
                        <input type="email" name="email" id="email" placeholder="Email" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div>
                        <input type="password" name="password" id="password" placeholder="Password (min 8 characters)" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="flex justify-center">
                        <button type="submit" class="bg-red-600 hover:bg-red-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Sign Up</button>
                    </div>
                    <div class="flex justify-center">
                        <a href="../B230036_3.php" class="mt-4 bg-gray-600 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Back to Home</a>
                    </div>
                    <p class="mt-4 text-center text-gray-200 text-sm">
                        Already have an account? <a href="login.php" class="text-red-600 hover:text-red-800">Log in</a>
                    </p>
                </form>
            </div>
            <div class="w-1/2">
                <img src="images/lo.jpg" alt="Login Image" class="h-full w-full object-cover rounded-lg">
            </div>
        </div>
    </main>
</body>
</html>