<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./CSS/order_page.css">
    <link rel="icon" type="images/x-icon" href="./IMAGES/general/Gred.png">
    <link rel="stylesheet" href="./CSS/home.css">
    <title>Order Page</title>
</head>

<body>
    <?php require './navbar.php'; ?>
    <div class="main-content">
        <div class="head">
            <b>Menu</b>
            <a href="./cart_page.php">View Cart</a>
        </div>

        <div class="menu">
            <div class="Foods order" id="Golden Liempo">
                <img src="./IMAGES/home/liempoOrtho.png" alt="Image of a Liempsilog" class="FoodImages" width="200"
                    height="200">
                <div class="fancytext">Golden Liempo</div>
                <div class="bottomPriceCart">
                    <div>
                        <p class="price">Price: 120PHP</p>
                    </div>
                    <div>
                        <button class="shopnow" onclick="showToast()"><img src="./IMAGES/home/ShoppingCart.png"
                                alt="Logo" width="16" height="16"></button>
                    </div>
                </div>
            </div>
            <div class="Foods order" id="Golden Tapa">
                <img src="./IMAGES/home/TapaOrtho.png" alt="Image of a Liempsilog" class="FoodImages" width="200"
                    height="200">
                <div class="fancytext">Golden Tapa</div>
                <div class="bottomPriceCart">
                    <div>
                        <p class="price">Price: 120PHP</p>
                    </div>
                    <div>
                        <button class="shopnow" onclick="showToast()"><img src="./IMAGES/home/ShoppingCart.png"
                                alt="Logo" width="16" height="16"></button>
                    </div>
                </div>
            </div>
            <div class="Foods order" id="Golden Chicken">
                <img src="./IMAGES/home/ChickenOrtho.png" alt="Image of a Liempsilog" class="FoodImages" width="200"
                    height="200">
                <div class="fancytext">Golden Chicken</div>
                <div class="bottomPriceCart">
                    <div>
                        <p class="price">Price: 130PHP</p>
                    </div>
                    <div>
                        <button class="shopnow" onclick="showToast()"><img src="./IMAGES/home/ShoppingCart.png"
                                alt="Logo" width="16" height="16"></button>
                    </div>
                </div>
            </div>
            <div class="Foods order" id="Golden Bangus">
                <img src="./IMAGES/home/BangusOrtho.png" alt="Image of a Liempsilog" class="FoodImages" width="200"
                    height="200">
                <div class="fancytext">Golden Bangus</div>
                <div class="bottomPriceCart">
                    <div>
                        <p class="price">Price: 120PHP</p>
                    </div>
                    <div>
                        <button class="shopnow" onclick="showToast()"><img src="./IMAGES/home/ShoppingCart.png"
                                alt="Logo" width="16" height="16"></button>
                    </div>
                </div>
            </div>
            <div class="Foods order" id="Golden Liempo">
                <img src="./IMAGES/home/liempoOrtho.png" alt="Image of a Liempsilog" class="FoodImages" width="200"
                    height="200">
                <div class="fancytext">Golden Liempo</div>
                <div class="bottomPriceCart">
                    <div>
                        <p class="price">Price: 120PHP</p>
                    </div>
                    <div>
                        <button class="shopnow" onclick="showToast()"><img src="./IMAGES/home/ShoppingCart.png"
                                alt="Logo" width="16" height="16"></button>
                    </div>
                </div>
            </div>
            <div class="Foods order" id="Golden Liempo">
                <img src="./IMAGES/home/liempoOrtho.png" alt="Image of a Liempsilog" class="FoodImages" width="200"
                    height="200">
                <div class="fancytext">Golden Liempo</div>
                <div class="bottomPriceCart">
                    <div>
                        <p class="price">Price: 120PHP</p>
                    </div>
                    <div>
                        <button class="shopnow" onclick="showToast()"><img src="./IMAGES/home/ShoppingCart.png"
                                alt="Logo" width="16" height="16"></button>
                    </div>
                </div>
            </div>
            <div class="Foods order" id="Golden Liempo">
                <img src="./IMAGES/home/liempoOrtho.png" alt="Image of a Liempsilog" class="FoodImages" width="200"
                    height="200">
                <div class="fancytext">Golden Liempo</div>
                <div class="bottomPriceCart">
                    <div>
                        <p class="price">Price: 120PHP</p>
                    </div>
                    <div>
                        <button class="shopnow" onclick="showToast()"><img src="./IMAGES/home/ShoppingCart.png"
                                alt="Logo" width="16" height="16"></button>
                    </div>
                </div>
            </div>
            <div class="Foods order" id="Golden Liempo">
                <img src="./IMAGES/home/liempoOrtho.png" alt="Image of a Liempsilog" class="FoodImages" width="200"
                    height="200">
                <div class="fancytext">Golden Liempo</div>
                <div class="bottomPriceCart">
                    <div>
                        <p class="price">Price: 120PHP</p>
                    </div>
                    <div>
                        <button class="shopnow" onclick="showToast()"><img src="./IMAGES/home/ShoppingCart.png"
                                alt="Logo" width="16" height="16"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="toastBox"></div>
    <script>
    let toastBox = document.querySelector('#toastBox');
    let message = 'An item has been added to cart.';

    function showToast() {
        console.log('function was called');
        let toast = document.createElement('div');
        toast.classList.add('toast');
        toast.innerHTML = message;
        toastBox.appendChild(toast);

        setTimeout(() => {
            toast.remove();
        }, 5000);
    }
    </script>
</body>


</html>