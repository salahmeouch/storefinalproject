<?php

session_start();

include("./db-config/connect.php");

$user = $_SESSION['logged_in'];
if (!isset($user)) {
    header("location:login.php");
}
$id = $_SESSION['userId'];
$type = $_SESSION['usertype'];

if (isset($_POST['order_id']) && isset($_POST['quantity'])) {
    $orderId = $_POST['order_id'];
    $quantity = $_POST['quantity'];

    $updateOrderQuery = "UPDATE orders SET quantity = '$quantity' WHERE id = '$orderId'";
    mysqli_query($conn, $updateOrderQuery);
}

mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Order</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <?php include("header.php"); ?>
    <div class="container mt-5">
        <h1>Update Order</h1>
        <form method="POST" action="update.php?id=<?= $id ?>&type=<?= $type ?>">
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity:</label>
                <input type="number" name="quantity" class="form-control" value="<?php echo isset($_POST['quantity']) ? $_POST['quantity'] : ''; ?>">
            </div>
            <input type="hidden" name="order_id" value="<?php echo isset($_POST['order_id']) ? $_POST['order_id'] : ''; ?>">
            <button type="submit" class="btn btn-primary">Update Order</button>
        </form>
        
        <a href="cart.php?id=<?= $id ?>&type=<?= $type ?>" class="btn btn-secondary mt-3">save</a>
    </div>
</body>

</html>
