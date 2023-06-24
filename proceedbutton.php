<?php
session_start();
include("./db-config/connect.php");

$user = $_SESSION['logged_in'];
if (!isset($user)) {
    header("location: login.php");
    exit;
}

$id = $_SESSION['userId'];

// Delete all orders for the user from the database
$deleteOrders = "DELETE FROM orders WHERE user_id = '$id'";
mysqli_query($conn, $deleteOrders);

// Redirect the user back to the cart page
header("location: cart.php");
exit;
?>