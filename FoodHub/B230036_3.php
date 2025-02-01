<?php
session_start();

if (isset($_SESSION['id'])) {
    include 'include/home.php';
} else {
    include 'include/guest.php';
}
?>