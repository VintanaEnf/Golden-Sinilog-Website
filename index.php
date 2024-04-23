<?php 



?>

<!DOCTYPE html>
<html>


<head>
	<?php include 'css.php' ?>
	<link rel = "stylesheet" href = "./CSS/home.css">
</head>

<body>
	<?php include 'navbar.php' ?>
</body>

	<!-- INDEX HTML -->
	<div class = "MainText">
        <p id = "bold-flavors"><b>Bold flavors, unforgettable experiences:</b> welcome to <b>Sinilog</b> paradise.</p>
        <img src="./IMAGES/general/WhiteLine.png" alt="Logo" width="900" height="2" class="d-inline-block align-text-top">
        <p id = "paragraphWelcome">Welcome to our Sinilog sanctuary, where tradition meets innovation in every flavorful bite. Indulge in the artistry of Filipino cuisine, crafted with passion and authenticity. Join us on a journey of culinary delight, where each dish tells a story of tradition and taste.</p>
        </div>

        <div class = "FoodDisplays">
            <div class = "Foods" id = "Golden Liempo">
                <img src="./IMAGES/home/liempoOrtho.png" alt="Image of a Liempsilog" class="FoodImages" width="200" height="200">
                <div class = "fancytext">Golden Liempo</div>
                <div class = "bottomPriceCart">
                    <div>
                        <p class = "price">Price: 120PHP</p>
                    </div>
                    <div>
                        <button class="shopnow"><img src="./IMAGES/home/ShoppingCart.png" alt="Logo" width="16" height="16"></button>
                    </div>
                </div>
            </div>

            <div class = "Foods" id = "Golden Tapa">
                <img src="./IMAGES/home/tapaOrtho.png" alt="Image of a Tapsilog" class="FoodImages" width="200" height="200">
                <div class = "fancytext">Golden Tapa</div>
                <div class = "bottomPriceCart">
                    <div>
                        <p class = "price">Price: 120PHP</p>
                    </div>
                    <div>
                        <button class="shopnow"><img src="./IMAGES/home/ShoppingCart.png" alt="Logo" width="16" height="16"></button>
                    </div>
                </div>
            </div>

            <div class = "Foods" id = "Golden Chicken">
                <img src="./IMAGES/home/chickenOrtho.png" alt="Image of a Chicksilog" class="FoodImages" width="200" height="200">
                <div class = "fancytext">Golden Chicksilog</div>
                <div class = "bottomPriceCart">
                    <div>
                        <p class = "price">Price: 130PHP</p>
                    </div>
                    <div>
                        <button class="shopnow"><img src="./IMAGES/home/ShoppingCart.png" alt="Logo" width="16" height="16"></button>
                    </div>
                </div>
            </div>

            <div class = "Foods" id = "Golden Bangus">
                <img src="./IMAGES/home/bangusOrtho.png" alt="Image of a Daingsilog" class="FoodImages" width="200" height="200">
                <div class = "fancytext">Golden Bangus</div>
                <div class = "bottomPriceCart">
                    <div>
                        <p class = "price">Price: 120PHP</p>
                    </div>
                    <div>
                        <button class="shopnow"><img src="./IMAGES/home/ShoppingCart.png" alt="Logo" width="16" height="16"></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF INDEX HTML -->

        <?php include 'footer.php' ?>

</html>