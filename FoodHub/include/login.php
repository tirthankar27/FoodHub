<?php
session_start();
include 'db.php';

if (!$conn) {
    echo "<script>alert('Database connection failed.'); window.location.href='login.php';</script>";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;

    if ($email && $password) {
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['id'] = $user['id'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['email'] = $user['email'];

                header("Location: ../B230036_3.php");
                exit();
            } else {
                $error = "Invalid password.";
            }
        } else {
            $error = "No user found with this email.";
        }
    } else {
        $error = "Email and Password must be provided.";
    }

    echo "<script>alert('" . htmlspecialchars($error) . "'); window.location.href='login.php';</script>";
}

if (isset($stmt)) {
    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="flex min-h-screen bg-cover bg-center" style="background-image: url('images/bg.jpg');">
    <main class="flex-grow flex items-center justify-center">
        <div class="bg-black bg-opacity-70 p-8 rounded-lg flex w-3/4 mx-auto">
            <div class="w-1/2">
                <img src="images/ln.jpg" alt="Login Image" class="h-full w-full object-cover rounded-lg">
            </div>
            <div class="w-1/2 pl-4">
                <h2 class="text-3xl font-bold text-center text-white mb-6">Login</h2>
                <form method="POST" action="" class="space-y-4">
                    <div>
                        <input type="email" name="email" id="email" placeholder="Email" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div>
                        <input type="password" name="password" id="password" placeholder="Password" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="flex justify-center">
                        <button type="submit" class="bg-red-600 hover:bg-red-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Login</button>
                    </div>
                    <div class="flex justify-center">
                        <a href="../B230036_3.php" class="mt-4 bg-gray-600 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Back to Home</a>
                    </div>
                    <p class="mt-4 text-center text-gray-200 text-sm">
                        Don't have an account? <a href="signup.php" class="text-red-600 hover:text-red-800">Sign up</a>
                    </p>
                </form>
            </div>
        </div>
    </main>
</body>
</html>