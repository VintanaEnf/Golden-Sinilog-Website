<html>

<head>
  <title>Golden Sinilog Sign in</title>

  <link rel="icon" type="images/x-icon" href="./IMAGES/general/Gred.png" />
  <link rel="stylesheet" type="text/css" href="./CSS/saimon_css.css" />
  <link rel="stylesheet" href="./CSS/home.css">

</head>

<body>
  <?php include './navbar.php' ?>

  <section class="container">
    <div class="wrapper">
      <form action="./SignInSubmit.php" method="POST">
        <h1 id="heading">Login Account</h1>
        <div class="input-box">
          <input type="text" name="Email" placeholder="Email" required />
        </div>
        <div class="input-box">
          <input type="password" name="Password" placeholder="Password" required />
        </div>
        <p id="forgot-password">
          Forgot password?
          <a href="#" id="#forgot-password-link">Click Here</a>
        </p>

        <!-- <div class="remember-forgot">
            <label><input type="checkbox" /> Remember me</label>
            <a href="#">Forgot password?</a>
          </div> -->
        <button type="submit" class="btn">Login</button>
        <div class="register-link">
          <p>
            New to Golden Sinilog?
            <a href="signup.php" id="register-anchor">Register</a>
          </p>
        </div>
      </form>
    </div>
  </section>

</body>

</html>