<?php
include("./db-config/connect.php");
session_start();
$user = $_SESSION['logged_in'];
if (!isset($user)) {
    header("location:.php");
}
$id = $_SESSION['userId'];
$type = isset($_GET['type']) ? $_GET['type'] : '';
$p_ID = $_GET['pid'];
$getProduct = "SELECT * FROM products WHERE productid = '$p_ID'";
$productResult = mysqli_query($conn, $getProduct);
$product = mysqli_fetch_assoc($productResult);

if ($product) {
    $userid = $_SESSION['userId'];
    $name = $product['name'];
    $price = $product['price'];
    $quantity = isset($_POST['quantity_option']) ? $_POST['quantity_option'] : 1;
    $productId = $product['productid'];
    $status = '1';

    $insertOrder = "INSERT INTO orders (user_id, name, price, quantity, product_id, status)
                    VALUES ('$userid', '$name', '$price', '$quantity', '$productId', '$status')";

    if (mysqli_query($conn, $insertOrder)) {
        echo "Order added to cart successfully.";
    } else {
        echo "Error adding order to cart: " . mysqli_error($conn);
    }
} else {
    echo "Product not found.";
}

mysqli_close($conn);
header("Location: shop.php?id={$id}&type=$type");
exit;
?>