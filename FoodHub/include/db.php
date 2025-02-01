<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$servername = getenv('DB_SERVER') ?: 'localhost';
$username = getenv('DB_USER') ?: 'root';
$password = getenv('DB_PASS') ?: '';
$dbname = getenv('DB_NAME') ?: 'wde';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    error_log("Database connection failed: " . mysqli_connect_error());
    exit("Connection to database failed.");
}
?>