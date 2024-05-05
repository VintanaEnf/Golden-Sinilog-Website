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
            <form action="SignUpSubmit.php" method = "POST">
                <h1 id="heading">Create new Account</h1>
                <div class="input-box">
                    <input type="text" name="First" placeholder="First Name" required />
                </div>
                <div class="input-box">
                    <input type="text" name="Last" placeholder="Last Name" required />
                </div>
                <div class="input-box">
                    <input type="text" name="Email" placeholder="Email" required />
                </div>
                <div class="input-box">
                    <input type="password" name="Pass" placeholder="Password" required />
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