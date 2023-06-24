<?php

include("./db-config/connect.php");
session_start();
include("header.php");
$user = $_SESSION['logged_in'];
if (!isset($user)) {
    header("location:login.php");
}
$id=$_GET['id'];
$type=$_GET['type'];
if (isset($_POST['order_id'])) {
  $orderId = $_POST['order_id'];


  $deleteOrderQuery = "DELETE FROM orders WHERE id = $orderId";
  mysqli_query($conn, $deleteOrderQuery);
}

header("Location: cart.php?id=$id&type=$type");
exit;
?>
