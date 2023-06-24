
<?php
include("./db-config/connect.php");

session_start();
$user = $_SESSION['logged_in'];
if (!isset($user)) {
    header("location:login.php");
}

if (isset($_POST["submit"])) {    

    $name = $_POST["name"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    
    $image = $_FILES["image"];
    $image_name = $image["name"];
    $image_tmp_name = $image["tmp_name"];
    $image_path = "./images/" . $image_name; 
    
    move_uploaded_file($image_tmp_name, $image_path);

    $insertProduct = "INSERT INTO products (name, price, description, image,date) 
                      VALUES ('$name', '$price', '$description','$image_path',NOW())";
    
    if (mysqli_query($conn, $insertProduct)) {
        echo "Product added successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    error_reporting(E_ALL);
ini_set('display_errors', 1);

}
?>

<!DOCTYPE html>
<html>
<head>
  <?php include("header.php"); ?>
  <title>Add Product</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<link rel="stylesheet"href="style.css">
</head>
<body>
  <div class="container">
    <h1>Add Product</h1>
    <form method="POST" action="addproduct.php" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="name" class="form-label">Product Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      
      <div class="mb-3">
        <label for="price" class="form-label">Price:</label>
        <input type="number" class="form-control" id="price" name="price" required>
      </div>
      
      <div class="mb-3">
        <label for="description" class="form-label">Description:</label>
        <textarea class="form-control" id="description" name="description" required></textarea>
      </div>
     
 
      
      <div class="mb-3">
        <label for="image" class="form-label">Image:</label>
        <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
      </div>
      
      <button type="submit" name="submit" class="btn btn-primary">Add Product</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/js/bootstrap.bundle.min.js"></script>

</body>
</html>