
<nav class="navbar navbar-expand-lg navbar-light bg-white bg-opacity-50 ">
    <div class="container-fluid">
        <a class="navbar-brand text-dark fs-2"> <img class="card-img-top " src="./image/logo.jpg"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  " id="navbarNav">
            <ul class="navbar-nav mx-auto gap-5">
                <li class="nav-item">
                    <a class="nav-link  text-dark" aria-current="page" href="index.php"><b>home</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#aboutus"><b>about us</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#contactus"><b>contact us</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="shop.php"><b>shop</b></a>
                </li>
                <?php if (isset($_SESSION['usertype']) && $_SESSION['usertype'] === 'admin') : ?>

                    <li class="nav-item">
                        <a class="nav-link text-dark" href="addproduct.php"><b>add new product</b></a>
                    </li>
                    
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="cart.php"><b>your cart</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="logout.php" tabindex="-1"><b>logout</b></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
