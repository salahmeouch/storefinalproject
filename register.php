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
  
  <script>
    
    function validateForm() {
  
      var name = document.forms["registrationForm"]["name"].value;
      var email = document.forms["registrationForm"]["email"].value;
      var password = document.forms["registrationForm"]["password"].value;
      var confirm_password = document.forms["registrationForm"]["confirm_password"].value;
      var image = document.forms["registrationForm"]["image"].value;


      if (name == "" || email == "" || password == "" || confirm_password == "" || image == "") {
        alert("All fields must be filled out");
        return false;
      }


      if (password != confirm_password) {
        alert("Passwords do not match");
        return false;
      }
    }
  </script>
</head>
<style>
  body {
    background-image: url('https://rosedalekb.com/wp-content/uploads/2023/03/r-and-m-vape.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      overflow: hidden;
  
  }
</style>
<body>
  <section>
    <div class="mask d-flex signup_container align-items-center h-90 gradient-custom-3 justify-content-center">
      <div class="container h-90 signup_container">
        <div class="row d-flex justify-content-center align-items-center h-90">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6 py-5">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-2">Create an account</h2>

                <form name="registrationForm" onsubmit="return validateForm()" method="post" action="registeraction.php"
                  enctype="multipart/form-data">

                  <div class="form-outline mb-2">
                    <input type="text" name="name" id="form3Example1cg" class="form-control form-control-lg" required />
                    <label class="form-label" for="form3Example1cg">Your Name</label>
                  </div>

                  <div class="form-outline mb-2">
                    <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" required />
                    <label class="form-label" for="form3Example3cg">Your Email</label>
                  </div>

                  <div class="form-outline mb-2">
                    <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" required />
                    <label class="form-label" for="form3Example4cg">Password</label>
                  </div>
                  <div class="form-outline mb-2">
                    <input type="password" name="confirm_password" id="form3Example4cg" class="form-control form-control-lg" required />
                    <label class="form-label" for="form3Example4cg">Confirm Password</label>
                  </div>
                  <div class="form-outline mb-2">
                    <input type="file" name="image" id="form3Example4cg" class="form-control form-control-lg" required />
                    <label class="form-label" for="form3Example4cg">Image</label>
                  </div>

                  <div class="d-flex justify-content-center">
                    <button type="submit" name="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                  </div>

                  <p class="text-center text-muted mt-1 mb-0">Already have an account? <a href="login.php" class="fw-bold text-body"><u>Login here</u></a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
