<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro / Login</title>
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <div class="forms-wrapper">

    <!-- ========== REGISTER ========== -->
    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">Register</h1>
      <form method="post" action="register.php">
        <div class="input-group">
          <i class="fas fa-user"></i>
          <input name="fName" id="fName" placeholder="First Name" required>
          <label for="fName">First Name</label>
        </div>

        <div class="input-group">
          <i class="fas fa-user"></i>
          <input name="lName" id="lName" placeholder="Last Name" required>
          <label for="lName">Last Name</label>
        </div>

        <div class="input-group">
          <i class="fas fa-envelope"></i>
          <input type="email" name="email" id="emailReg"
                 placeholder="Email" required>
          <label for="emailReg">Email</label>
        </div>

        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" id="passwordReg"
                 placeholder="Password" required>
          <label for="passwordReg">Password</label>
        </div>

        <input type="submit" class="btn" value="Sign Up" name="signUp">
      </form>

      <p class="or">---------- or ----------</p>

      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>

      <div class="links">
        <p>Already have an account?</p>
        <button id="switchToSignIn">Sign In</button>
      </div>
    </div><!-- /Register -->

    <!-- ========== SIGN IN ========== -->
    <div class="container" id="signin">
      <h1 class="form-title">Sign In</h1>
      <form method="post" action="register.php">
        <div class="input-group">
          <i class="fas fa-envelope"></i>
          <input type="email" name="email" id="emailLogin"
                 placeholder="Email" required>
          <label for="emailLogin">Email</label>
        </div>

        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" id="passwordLogin"
                 placeholder="Password" required>
          <label for="passwordLogin">Password</label>
        </div>

        <p class="recover"><a href="#">Recover Password</a></p>
        <input type="submit" class="btn" value="Sign In" name="signIn">
      </form>

      <p class="or">---------- or ----------</p>

      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>

      <div class="links">
        <p>Don't have an account yet?</p>
        <button id="switchToSignUp">Sign Up</button>
      </div>
    </div><!-- /Sign In -->

  </div><!-- /forms-wrapper -->

  <script src="script.js"></script>
</body>
</html>