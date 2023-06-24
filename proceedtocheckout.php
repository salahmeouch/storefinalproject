<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f1f5f8;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 2rem;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
            color: #1a237e;
        }

        .form-label {
            display: none;
        }

        .form-control {
            padding-left: 3.5rem;
            background-color: #e8eaf6;
            border: none;
            border-radius: 5px;
            color: #1a237e;
            width: 100%;
        }

        .form-control:focus + .form-label,
        .form-control:valid + .form-label {
            top: 0;
            font-size: 0.8rem;
            color: #3949ab;
        }

        .btn-primary {
            background-color: #3949ab;
            border-color: #3949ab;
            margin-top: 1.5rem;
        }

        .btn-primary:hover {
            background-color: #1a237e;
            border-color: #1a237e;
        }
    </style>
</head>

<body>
    <?php include("header.php");?>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title mb-4">Card Details</h5>
                    <form>
                        <div class="form-outline form-white mb-4">
                            <input type="text" id="typeName" class="form-control form-control-lg" size="17" placeholder="Cardholder's Name" />
                        </div>

                        <div class="form-outline form-white mb-4">
                            <input type="text" id="typeText" class="form-control form-control-lg" size="17" placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="form-outline form-white">
                                    <input type="text" id="typeExp" class="form-control form-control-lg" placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-outline form-white">
                                    <input type="password" id="typeText" class="form-control form-control-lg" placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                                </div>
                            </div>
                        </div>
                        <a href="proceedbutton.php" class="btn btn-primary">Proceed to Checkout</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
