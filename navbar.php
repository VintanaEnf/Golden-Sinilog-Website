<?php


    if($_COOKIE['loggedin']){
        echo '<nav class="flexnav">
    <div style="display: flex; justify-content: start; align-items: center; color: white;">
        <div style="margin-top: 10px;">
            <img src="./IMAGES/general/logo.png" alt="Logo" width="206" height="64">
        </div>
        <div>
            <img src="./IMAGES/general/WhiteVerticalLine.png" alt="Logo" width="1" height="64">
        </div>

        <div>
            <a style="font-size: 22px;text-decoration:none; font-family: aotf; color: white; margin: auto;margin-left: 30px;" href="index.php">Home</a>
        </div>
        <div>
            <a style="font-size: 22px;text-decoration:none; font-family: aotf; color: white;
    margin: auto;margin-left: 15px;" href="aboutus.php">About Us</a>
        </div>
    </div>
    <div style="justify-content: end; align-items: center; margin-right: 30px;">
        


        <button onclick="window.location.href = \'#\'" class="loginbutton" type="submit" href="#">'; 
        echo $_COOKIE['FirstName'];
        echo ' '; 
        echo $_COOKIE['LastName'];
         echo '</button>
        <button onclick="window.location.href = \'./logout.php\'" class="loginbutton" type="submit">Logout</button>
        <a href="./order_page.php" class="button-order">Order Now</a>
        
    </div>
</nav>';
    }
    else{
        echo '<nav class="flexnav">
    <div style="display: flex; justify-content: start; align-items: center; color: white;">
        <div style="margin-top: 10px;">
            <img src="./IMAGES/general/logo.png" alt="Logo" width="206" height="64">
        </div>
        <div>
            <img src="./IMAGES/general/WhiteVerticalLine.png" alt="Logo" width="1" height="64">
        </div>

        <div>
            <a style="font-size: 22px;text-decoration:none; font-family: aotf; color: white; margin: auto;margin-left: 30px;" href="index.php">Home</a>
        </div>
        <div>
            <a style="font-size: 22px;text-decoration:none; font-family: aotf; color: white;
    margin: auto;margin-left: 15px;" href="aboutus.php">About Us</a>
        </div>
    </div>
    <div style="justify-content: end; align-items: center; margin-right: 30px;">
        <button onclick="window.location.href = \'./SignIn.php\'" class="loginbutton" type="submit" href="#">Login</button>
        <button onclick="window.location.href = \'./signup.php\'" class="loginbutton" type="submit">Sign
            Up</button>
        <a href="./order_page.php" class="button-order">Order Now</a>
    </div>
</nav>';
    }

?>