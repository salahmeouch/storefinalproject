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
    * {
      overflow: hidden;
    }
  </style>
  <script>

    function validateForm() {
      var email = document.forms["loginForm"]["email"].value;
      var password = document.forms["loginForm"]["password"].value;

      if (email == "" || password == "") {
        alert("All fields must be filled out");
        return false;
      }
    }
  </script>
</head>
<body>
  <section class="vh-100" style="background-color: #3badca;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="image/loginimage.jpeg " style="height:100% !important;" alt="login form" class="img-fluid" style="border-radius: 1rem 1 0 1rem  ;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                  <form name="loginForm" onsubmit="return validateForm()" method="post" action="loginaction.php">
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h1 fw-bold mb-0">sign up</span>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="email" name="email" id="form2Example17" class="form-control form-control-lg" required />
                      <label class="form-label" for="form2Example17">Email address</label>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" required />
                      <label class="form-label" for="form2Example27">Password</label>
                    </div>
                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" type="submit" name="submit">Login</button>
                    </div>
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="register.php" style="color: #393f81;">Register here</a></p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
