<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./CSS/checkout.css">
    <link rel="icon" type="images/x-icon" href="./IMAGES/general/Gred.png">
    <link rel="stylesheet" href="./CSS/home.css">
    <link rel="stylesheet" href="./CSS/table-css.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Sinilog | Checkout Page</title>
</head>

<body>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#method_onsite").hide();
            $("label[for=method_onsite],#zone_r1").hide();
            $('#method_gcash').click(function() {
                $(".qr-code").show(1000);
                $('#refID').prop('disabled', false)
                $('#refID').show(1000);
                $('#refTitle').show(1000);
                $('#refID').prop('required', true);
            });
            $('#method_cod').click(function() {
                $(".qr-code").hide(1000);
                $('#refID').hide(1000);
                $('#refTitle').hide(1000);
                $('#refID').prop('disabled', true);
                $('#refID').prop('required', false);
            });
            $('#method_onsite').click(function() {
                $(".qr-code").hide(1000);
                $('#refID').prop('disabled', true);
                $('#refID').hide(500);
                $('#refTitle').hide(1000);
                $('#refID').prop('required', false);
            });
            $('#order_deliver').click(function() {
                $("#method_onsite").hide(500);
                $("#method_cod").show(500);
                $("label[for=method_onsite],#zone_r1").hide(500);
                $("label[for=method_cod],#zone_r1").show(500);

            });
            $('#order_pickup').click(function() {
                $("#method_onsite").show(500);
                $("label[for=method_onsite],#zone_r1").show(500);
                $("#method_cod").hide(500);
                $("label[for=method_cod],#zone_r1").hide(500);
            });
        });
    </script>
    <?php include './navbar.php'; ?>

    <form style="text-align: center;" action="order_success_page.php">
        <div class="main-cont">
            <div class="main">
                <div class="checkout">
                    <div class="cart-details">
                        <h1 style="text-align: center;">Payment Form</h1>
                        <img src="./IMAGES/gcash.png" style="text-align: center;" alt="qr code" width="100px">
                        <div class="qr-code">
                            <p style="text-align: center;">Pay the amount to this account (09XXXXXXXXX) </p>
                            <img src="./IMAGES/QR-demonstration.png" style="text-align: center;" alt="qr code" width="200px">
                        </div>
                        <h6 id="refTitle">Reference ID</h6>
                        <input type="text" name="pRef" id="refID" placeholder="13 Digit GCash Ref. No." minlength="13" maxlength="13" class="input-field" required>
                        <br>
                        <a href="cart_page.php" class="back">Go Back</a>
                        <input type="submit" value="Place Order" name="order" class="submit-btn">

                    </div>
                </div>
                <br>
                <div class="cart">
                    <h5>Cart Details</h5>
                    <table class="table-css">
                        <thead>
                            <tr>
                                <th>Product Details</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>

                        <tbody>
                            
                                <?php   
                                
                                $cartItems = json_decode($_COOKIE['cart'], true);
                                if ($cartItems === null){
                                    echo '<tr> <td>DATA HERE</td> 
                                        <td>DATA HERE</td> 
                                        <td>DATA HERE</td> </tr> ';
                          
                                        
                                    }

                                    if (isset($cartItems)) {
                                    foreach ($cartItems as $item) {
                                        echo '<tr>';
                                        //echo '<td style="min-width: fit-content; display: flex; justify-content: start; align-items: center; gap: 24px">
                                    //</tbody img src="'; 

                                      //  echo '" alt="product" style="display: inline-block;" width="80px" height="60px">';
                                        echo '<td>';
                                        echo "". htmlspecialchars($item['product_id']) . "<br><br>";
                                       echo  '</td> ';
                                        echo '<td>';

                                        echo "". htmlspecialchars($item['quantity']) . "<br><br>";
                                        echo '</td>';

                                        echo '<td>';
                                        echo "". htmlspecialchars($item['price']) . "<br><br>";
                                        echo '</td>';

                                        echo '<td>';
                                        echo "". htmlspecialchars($item['price'] * $item['quantity']) . "<br><br>";
                                        echo '</td>';


                                        echo '</tr>';


                                    }
}


                                ?>
                           

                            

                        </tbody>
                    </table>

                </div>
            </div>



        </div>
    </form>
</body>

</html>
