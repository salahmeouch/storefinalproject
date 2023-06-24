<?php
include("./db-config/connect.php");
session_start();
include("header.php");
$id=$_SESSION['userId'];
$user = $_SESSION['logged_in'];
if (!isset($user)) {
    header("location:login.php");
}
$getOrders = "SELECT * FROM orders WHERE user_id = '$id'";
$ordersResult = mysqli_query($conn, $getOrders);
$totalPrice = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin-top: 50px;
        }

        .table {
            background-color: #fff;
        }

        .table thead {
            background-color: #e9ecef;
        }

        .table th,
        .table td {
            border: none;
            vertical-align: middle;
        }

        .table td:first-child {
            font-weight: bold;
        }

        .total-price {
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
        }

        .btn-back {
            margin-top: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Cart</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($order = mysqli_fetch_assoc($ordersResult)) : ?>
                    <tr>
                        <td><?php echo $order['name']; ?></td>
                        <td><?php echo $order['quantity']; ?></td>
                        <td>$<?php echo $order['price'] * $order['quantity']; ?></td>
                        <td>
                            <form method="POST" action="update.php">
                                <input type="hidden" name="order_id" value="<?php echo $order['id']; ?>">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>

                            <form method="POST" action="delete.php?<?php echo $order['id']; ?>">
                                <input type="hidden" name="order_id" value="<?php echo $order['id']; ?>">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php
                    $totalPrice += $order['price'] * $order['quantity'];
                endwhile; ?>
            </tbody>
        </table>

        <div class="row">
            <div class="col-md-6">
                <div class="total-price">Total Price: $<?php echo $totalPrice; ?></div>
                <a href="shop.php?id=<?= $id ?>" class="btn btn-primary btn-back">Back to Shop</a>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-end">
                  <a href="proceedtocheckout.php" class="btn btn-primary">Proceed to Checkout</a>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
