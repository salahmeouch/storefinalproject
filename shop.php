<?php
include("./db-config/connect.php");

session_start();
$user = $_SESSION['logged_in'];
if (!isset($user)) {
    header("location:login.php");
}
$id = $_SESSION['userId'];
$type = $_SESSION['usertype'];

$orderBy = "name"; 
$orderDirection = "ASC"; 


if (isset($_GET['sort'])) {
    $sort = $_GET['sort'];
    if ($sort === "newest") {
        $orderBy = "date";
        $orderDirection = "ASC";
    } elseif ($sort === "atoz") {
        $orderBy = "name";
        $orderDirection = "ASC";
    } elseif ($sort === "latest") {
        $orderBy = "productid";
        $orderDirection = "DESC";
    }
}

$getProducts = "SELECT * FROM products ORDER BY $orderBy $orderDirection";
$result = mysqli_query($conn, $getProducts);



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <style>
    body {
      background-color: #ecedee;
    }

    .card {
      border: none;
      overflow: hidden;
      max-width: 350px;
      margin: 0 auto;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      transition: all 0.3s;
    }

    .card:hover {
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    }

    .card-img-top {
      max-height: 200px;
      object-fit: cover;
    }

    .card-body {
      padding: 15px;
    }

    .card-title {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
    color: #333;
    font-family: Arial, sans-serif;
  }

  .card-text {
    font-size: 14px;
    color: #777;
    margin-bottom: 10px;
    font-family: Arial, sans-serif;
  }

  .card-price {
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 10px;
    color: #ff6600;
    font-family: Arial, sans-serif;
  }

    .card-quantity {
      margin-bottom: 10px;
    }

    .card-quantity label {
      font-weight: bold;
      margin-right: 10px;
    }

    .card-quantity input {
      width: 60px;
      padding: 4px 8px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    .card-addtocart {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .card-addtocart button {
      height: 40px;
      width: 100%;
      border-radius: 4px;
      background-color:royalblue;
      color: #fff;
      border: none;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .card-addtocart button:hover {
      background-color:coral;
    }

    .container {
      margin-top: 50px;
      margin-bottom: 50px;
    }

    .dropdown-menu {
      border-radius: 4px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body>
  <?php include("header.php"); ?>
  <div class="container">
    <div class="row mb-3">
      <div class="col">
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" id="sortDropdown" data-bs-toggle="dropdown"
            aria-expanded="false">
            Sort By
          </button>
          <ul class="dropdown-menu" aria-labelledby="sortDropdown">
            <li><a class="dropdown-item" href="?sort=newest">Newest</a></li>
            <li><a class="dropdown-item" href="?sort=atoz">A to Z</a></li>
            <li><a class="dropdown-item" href="?sort=latest">Latest</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <div class="col">
          <div class="card">
            <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="Product Image">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['name']; ?></h5>
              <p class="card-text"><?php echo $row['description']; ?></p>
              <p class="card-price"><?php echo $row['price']; ?> <?php echo ('$'); ?></p>
              <form method="POST" action="addtocart.php?pid=<?php echo $row['productid']; ?>">
                <div class="card-quantity">
                  <label for="quantity_input">Quantity:</label>
                  <input type="number" class="form-control" id="quantity_input" name="quantity_option" value="1" min="1">
                </div>
                <div class="card-addtocart">
                  <button type="submit" class="btn">Add to Cart</button>
                 

                </div>
              </form>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</body>
</html>
