<?php
session_start();

$user = $_SESSION['logged_in'];
if (!isset($user)) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet"href="style.css">
</head>
<style>
  .contact-form {
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
      border-radius: 5px;
      background-color: #f6f6f6;
    }

    .contact-form h1 {
      text-align: center;
      margin-bottom: 30px;
    }

    .contact-form .form-control {
      border-radius: 0;
    }

    .contact-form textarea.form-control {
      resize: none;
    }

    .contact-form .btn {
      border-radius: 0;
      width: 100%;
    }
    .container1 {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  
  .flex-container {
    display: flex;
    align-items: center;
  }
  
  .image-container {
    flex-basis: 40%;
    margin-right: 20px;
  }
  
  .image-container img {
    width: 100%;
    height: auto;
  }
  
  .text-container {
    flex-basis: 60%;
  }
  .p1{display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    margin: 0 0 15px 0;
    text-rendering: optimizeLegibility;
}
   
  </style>

<body>
<?php include('header.php'); ?>
      <div id="demo" class="carousel slide" data-bs-ride="carousel">
  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./image/forcarousel1.jpg"  class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="./image/forcarousel2.jpg"  class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="./image/forcarousel3.jpg"  class="d-block w-100">
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>


<br>
<br>
<h2 style="text-align:center"><b> products</b></h2>
<hr>

<div class="container">
    <div class="row row1 justify-content-evenly ms-auto me-auto">
        <div class="  col-md-6 col-xl-3 col-lg-4" style="margin-bottom: 20px;">
    <div class="card bg-light" style="width: 18rem;">
      <a href="shop.php">  <img class="card-img-top" src="./image/bingo.jpg"> </a>
        <div class="card-body">
            <h2 class="card-title text-info">bingo 8000puffs</h2>
            <p class="card-text text-black">SUPBLISS BINGO 8000 DISPOSABLE VAPE POD DEVICE WHOLESALE (8000 PUFFS) </p>
       
        </div>
      
    </div>
    </div>
  
    <div class="  col-md-6 col-xl-3 col-lg-4" style="margin-bottom: 20px;">
        <div class="card bg-white" style="width: 18rem;">
          <a href="shop.php">  <img class="card-img-top" src="./image/Original-Randmtornado9000puffs.jpg"></a>
            <div class="card-body">
                <h2 class="card-title text-info">randm 9000puffs</h2>
                <p class="card-text text-black">RANDM TORNADO 9000 DISPOSABLE VAPE DEVICE WHOLESALE (9000 PUFFS)</p>
           
            </div>
          
        </div>

</div>
<div class="  col-md-6 col-xl-3 col-lg-4" style="margin-bottom: 20px;">
    <div class="card bg-white" style="width: 18rem;">
        <a href="shop.php"><img class="card-img-top" src="./image/randmtornado10000.jpg"></a>
        <div class="card-body">
            <h2 class="card-title text-info">randm 10000puff</h2>
            <p class="card-text text-black">RANDM TORNADO 10000 AIRFLOW CONTROL DISPOSABLE VAPE DEVICE WHOLESALE (10000 PUFFS)</p>
           
        </div>
      
    </div>

</div>
    </div>
    <hr>
<br   id="aboutus">
<br>
<br >
<br>
<br>
<div style="background-color: gray;">
  <br>
  <br>
  <br>
  <br>
  <div style="text-align: center; margin-left: 25%; margin-right: 25%;">
    <h1>About RandM Vape</h1>
    <p>RandM Vape is a brand specializing in the disposable vape pen and customization vape hardware. We have the most innovative hardware designs and put the best tasting flavors into our devices. With powerful R&D, production, and marketing ability, our products have covered main markets like North America, South America, Russia, etc.</p>
    <p><b>Our mission is to provide the best disposable vape device to our customers!</b></p>
  </div>
  <br>
  <br>
</div>
<br>
<div>
        <div class="container1"class="flex-container">
          <div class=".image-container">
            <img src="./image/aboutus.jpg" alt="Image">
          </div>
          <div class="text-container">
            <h4>RANDMVAPE SECURITY CHECKING</h4>
            <p class="p1">We have use the best battery, eliquid and strict quality checking during production for all the RandMvape products. But there maybe clones using bad battery and eliuqid with poor quality control, so we have authentic stickers on every single RandMvape product. As a result, cusomers can have an idea whether the product is original or clone.</p>
          </div>
        </div>
      </div>










<div  class="container"id="contactus" style="background-color:#f6f6f6;"  >
    <div class="contact-form">
      <h1>Contact Us</h1>
      <form>
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
          <label for="subject" class="form-label">Subject</label>
          <input type="text" class="form-control" id="subject" placeholder="Enter the subject" required>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" id="message" rows="5" placeholder="Enter your message" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>









  