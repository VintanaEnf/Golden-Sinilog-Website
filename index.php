<?php

if(isset($_COOKIE["loggedin"])){
    
}
else{
 setcookie("loggedin", 0);
};

 ?>;

<html>

<head>
    <title>Golden Sinilog | Home</title>
    <link rel="icon" type="images/x-icon" href="./IMAGES/general/Gred.png">
    <link rel="stylesheet" href="./CSS/home.css">
</head>

<body>
    <?php require './navbar.php'; ?>
    <!-- <nav class="flexnav">
        <div id=start-button>
            <div id="Logo-Golden-Sinilog">
                <img src="./IMAGES/general/logo.png" alt="Logo" width="206" height="64"
                    class="d-inline-block align-text-top">
            </div>

            <div id="WhiteVerticalLine">
                <img src="./IMAGES/general/WhiteVerticalLine.png" alt="Logo" width="1" height="64"
                    class="d-inline-block align-text-top">
            </div>

            <div>
                <a href="index.php" id="HomeNavButton">Home</a>
            </div>
            <div>
                <a href="aboutus.php" id="AboutUsButton">About Us</a>
            </div>
        </div>
        <div id="end-button">
            <button onclick="window.location.href = 'http://localhost/Golden-Sinilog/SignIn.php'" class="loginbutton"
                type="submit" href="SignIn.php">Login</button>
            <button onclick="window.location.href = 'http://localhost/Golden-Sinilog/signup.php'" class="loginbutton"
                type="submit" href="signup.php">Sign Up</button>
            <button type="submit" href="#">Order Now</button>
        </div>
    </nav> -->

    <div class="MainText">
        <p id="bold-flavors"><b>Bold flavors, unforgettable experiences:</b> welcome to <b>Sinilog</b> paradise.</p>
        <img src="./IMAGES/general/WhiteLine.png" alt="Logo" width="900" height="2" class="d-inline-block align-text-top">
        <p id="paragraphWelcome">Welcome to our Sinilog sanctuary, where tradition meets innovation in every flavorful
            bite. Indulge in the artistry of Filipino cuisine, crafted with passion and authenticity. Join us on a
            journey of culinary delight, where each dish tells a story of tradition and taste.</p>
    </div>

    <div class="FoodDisplays">
        <div class="Foods" id="Golden Liempo">
            <img src="./IMAGES/home/liempoOrtho.png" alt="Image of a Liempsilog" class="FoodImages" width="200" height="200">
            <div class="fancytext">Golden Liempo</div>
            <div class="bottomPriceCart">
                <div>
                    <p class="price">Price: 120PHP</p>
                </div>
                <div>
                    <button class="shopnow"><img src="./IMAGES/home/ShoppingCart.png" alt="Logo" width="16" height="16"></button>
                </div>
            </div>
        </div>

        <div class="Foods" id="Golden Tapa">
            <img src="./IMAGES/home/tapaOrtho.png" alt="Image of a Tapsilog" class="FoodImages" width="200" height="200">
            <div class="fancytext">Golden Tapa</div>
            <div class="bottomPriceCart">
                <div>
                    <p class="price">Price: 120PHP</p>
                </div>
                <div>
                    <button class="shopnow"><img src="./IMAGES/home/ShoppingCart.png" alt="Logo" width="16" height="16"></button>
                </div>
            </div>
        </div>

        <div class="Foods" id="Golden Chicken">
            <img src="./IMAGES/home/chickenOrtho.png" alt="Image of a Chicksilog" class="FoodImages" width="200" height="200">
            <div class="fancytext">Golden Chicksilog</div>
            <div class="bottomPriceCart">
                <div>
                    <p class="price">Price: 130PHP</p>
                </div>
                <div>
                    <button class="shopnow"><img src="./IMAGES/home/ShoppingCart.png" alt="Logo" width="16" height="16"></button>
                </div>
            </div>
        </div>

        <div class="Foods" id="Golden Bangus">
            <img src="./IMAGES/home/bangusOrtho.png" alt="Image of a Daingsilog" class="FoodImages" width="200" height="200">
            <div class="fancytext">Golden Bangus</div>
            <div class="bottomPriceCart">
                <div>
                    <p class="price">Price: 120PHP</p>
                </div>
                <div>
                    <button class="shopnow"><img src="./IMAGES/home/ShoppingCart.png" alt="Logo" width="16" height="16"></button>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>Located at B5 L6 PH4L MAIN ROAD GOLDEN CITY STA ROSA LAGUNA.</p>
        <p>Copyright © 2024 Golden Sinilog, All rights reserved.</p>
        <a class="footerLinks" href="Privacy_Policy.php">Privacy Policy</a>
        <a class="footerLinks" href="Terms_of_Use.php">Terms of Use</a>
    </div>
</body>

</html>