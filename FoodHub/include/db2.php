<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function getAllItems($conn) {
    $sql = "SELECT * FROM items";
    $result = $conn->query($sql);
    $items = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $items[] = $row;
        }
    }
    return $items;
}

function getItemById($conn, $itemId) {
    $stmt = $conn->prepare("SELECT * FROM items WHERE item_id = ?");
    $stmt->bind_param("i", $itemId);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

function addItem($conn, $name, $price, $image) {
    $stmt = $conn->prepare("INSERT INTO items (item_name, item_price, item_image) VALUES (?, ?, ?)");
    $stmt->bind_param("sds", $name, $price, $image);
    return $stmt->execute();
}

function updateItem($conn, $itemId, $name, $price, $image) {
    $stmt = $conn->prepare("UPDATE items SET item_name = ?, item_price = ?, item_image = ? WHERE item_id = ?");
    $stmt->bind_param("sdsi", $name, $price, $image, $itemId);
    return $stmt->execute();
}

function deleteItem($conn, $itemId) {
    $stmt = $conn->prepare("DELETE FROM items WHERE item_id = ?");
    $stmt->bind_param("i", $itemId);
    return $stmt->execute();
}
?>