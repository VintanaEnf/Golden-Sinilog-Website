<html>
  <head>
    <title>Golden Sinilog Sign in</title>
    <link rel="icon" type="images/x-icon" href="./IMAGES/general/Gred.png" />
    <link rel="stylesheet" type="text/css" href="./CSS/saimon_css.css" />
  </head>
  <body>
    <nav class="flexnav">
      <div
        style="
          display: flex;
          justify-content: start;
          align-items: center;
          color: white;
        "
      >
        <div style="margin-top: 10px">
          <img
            src="./IMAGES/general/logo.png"
            alt="Logo"
            width="206"
            height="64"
          />
        </div>
        <div>
          <img
            src="./IMAGES/general/WhiteVerticalLine.png"
            alt="Logo"
            width="1"
            height="64"
          />
        </div>

        <div>
          <a
            style="
              text-decoration: none;
              font-family: aotf;
              color: white;
              margin: auto;
              margin-left: 30px;
            "
            href="index.php"
            >Home</a
          >
        </div>
        <div>
          <a
            style="
              text-decoration: none;
              font-family: aotf;
              color: white;
              margin: auto;
              margin-left: 15px;
            "
            href="aboutus.php"
            >About Us</a
          >
        </div>
      </div>
      <div
        style="justify-content: end; align-items: center; margin-right: 30px"
      >
        <button class="navbutton nav_loginbutton" type="submit" href="#">
          Login
        </button>
        <button class="navbutton nav_loginbutton" type="submit" href="#">
          Sign Up
        </button>
        <button type="submit" href="#">Order Now</button>
      </div>
    </nav>

    <section class="container">
      <div class="wrapper">
        <form action="">
          <h1 id="heading">Create new Account</h1>
          <div class="input-box">
            <input type="text" placeholder="Name" required />
          </div>
          <div class="input-box">
            <input type="text" placeholder="Email" required />
          </div>
          <div class="input-box">
            <input type="password" placeholder="Password" required />
          </div>

          
          <button type="submit" class="btn">Sign Up</button>
          <div class="register-link">
            <p>
              Already have an account?
              <a href="SignIn.php" id="register-anchor">Sign In</a>
            </p>
          </div>
        </form>
      </div>
    </section>
  </body>
</html>
