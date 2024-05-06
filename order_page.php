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
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "golden_sinilog";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM foods";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $userlist = array();
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="Foods order" id="' .$row['ID']. '">' .
                             '<img src="./IMAGES/FOODS/'.$row['ImagePath'].'" alt="Image of a '.$row['Name'].'" class="FoodImages" width="200" height="200">' .
                             '<div class="fancytext">'.$row['Name'].'</div>' .
                             '<div class="bottomPriceCart">' .
                             '<div>' .
                             '<p class="price">Price: '.$row['Price'].'</p>' .
                             '</div>' .
                             '<div>' .
                             '<button class="shopnow" onclick="showToast('.$row['ID'].', \''.$row['Name'].'\', '.$row['Price'].')"><img src="./IMAGES/home/ShoppingCart.png" alt="Logo" width="16" height="16"></button>'.
                             '</div>' .
                             '</div>' .
                             '</div>';
                        
                    }

                }

                else {
                    echo "0 results";
                }

                $conn->close();
                ?>
        </div>
    </div>
    <div id="toastBox"></div>

    <script src = 'cart.js'></script>
</body>


</html>