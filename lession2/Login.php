<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
  <form class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="https://bisa.design/assets/images/draw2.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="Login_process.php" method="POST">
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <p class="lead fw-normal mb-0 me-3">Sign in with</p>
              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
              </button>
  
              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-twitter"></i>
              </button>
  
              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-linkedin-in"></i>
              </button>
            </div>
  
            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0">Or</p>
            </div>
  
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" name ="email" class="form-control" id="floatingInput" placeholder="name@example.com" 
                value="<?php
                  echo $_SESSION['account']['email'] ?? ''
                ?>"
              >
              <label for="floatingInput">Email address</label>
              <div class="invalid-feedback" style="<?php echo( isset($_SESSION['errors']['email']) ? 'display:block' : '' ) ?>">
              <?php echo $_SESSION['errors']['email'] ?? '' ?>
              </div>
            </div>
  
            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="password" id="password" name="password" class="form-control" id="floatingPassword" placeholder="Password"
              value="<?php
                echo $_SESSION['account']['password'] ?? ''
              ?>"
              >
              <label for="floatingPassword">Password</label>
              <div class="invalid-feedback" style="<?php echo( isset($_SESSION['errors']['password']) ? 'display:block' : '' ) ?>">
              <?php echo $_SESSION['errors']['password'] ?? '' ?>
              </div>
            </div>
  
            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                  Remember me
                </label>
              </div>
              <a href="#!" class="text-body">Forgot password?</a>
            </div>
  
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="button" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                  class="link-danger">Register</a></p>
            </div>
            <?php $_SESSION['errors'] = [] ?>
          </form>
        </div>
      </div>
    </div>
    <div
      class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
      <!-- Copyright -->
      <div class="text-white mb-3 mb-md-0">
        Copyright ?? 2020. All rights reserved.
      </div>
      <!-- Copyright -->
  
      <!-- Right -->
      <div>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="#!" class="text-white">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </div>
      <!-- Right -->
    </div>
  </form>
</body>
</html>
