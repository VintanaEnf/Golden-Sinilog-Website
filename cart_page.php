<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <link rel="icon" type="images/x-icon" href="./IMAGES/general/Gred.png">

    <link rel="stylesheet" href="./CSS/order_page.css">
    <link rel="stylesheet" href="./CSS/home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>My Cart</title>
</head>

<body>
    <?php
    $login = true;
    require './navbar.php';
    ?>
    <div class="main-content">
        <div class="head">
            <b>Cart</b>
            <a href="./order_page.php">Return to food menu</a>
        </div>
        <div class="cart-container">
            <table>
                <thead>
                    <th>Food Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </thead>
                <tbody id="cart-body">

                </tbody>
            </table>
            <div class="total">
                <b id="total-amount">Total: 440PHP</b>
                <a href="./checkout_page.php" class="btn">Checkout</a>
            </div>
        </div>
    </div>
    <script>
        /* Fetch and populate user's cart here. In the meantime, it is static. Your choice if from database or from browser/client-side yung shopping cart niyo. */
        var cart = [{
                'product_id': 'Tapsilog',
                'price': 120,
                'quantity': 2,
            },
            {
                'product_id': 'Liempsilog',
                'price': 100,
                'quantity': 1,
            },
            {
                'product_id': 'Chicksilog',
                'price': 120,
                'quantity': 3,
            },
            {
                'product_id': 'Daingsilog',
                'price': 100,
                'quantity': 1,
            },
        ];

        function populateCartTable() {
            var cartBody = document.getElementById('cart-body');
            cartBody.innerHTML = '';

            cart.forEach(function(item) {
                var row = document.createElement('tr');
                row.innerHTML = `
                    <td class="food-column"><button class="delete-button" onclick="deleteCartItem('${item.product_id}');"><span class="material-symbols-outlined">
delete
</span></button> ${item.product_id}</td>
                    <td>${item.price} php</td>
                    <td class="quantity-cell">
                        <button class="quantity-button" onclick="qtyDecrease('${item.product_id}');">-</button>
                        <p id="${item.product_id}">${item.quantity}</p>
                        <button class="quantity-button" onclick="qtyIncrease('${item.product_id}');">+</button>
                    </td>
                `;
                cartBody.appendChild(row);
            });
            calculateTotalAmount();
        }

        populateCartTable();

        function qtyIncrease(product_id) {
            var num = 0;
            for (var i = 0; i < cart.length; i++) {
                if (cart[i].product_id === product_id) {
                    cart[i].quantity++;
                    num = cart[i].quantity;
                    console.log(num);
                    break;
                }
            }

            document.querySelector('#' + product_id).innerHTML = num;

            console.log('quantity increase');
            calculateTotalAmount();
        }

        function qtyDecrease(product_id) {
            var num = 0;
            for (var i = 0; i < cart.length; i++) {
                if (cart[i].product_id === product_id) {
                    if (cart[i].quantity > 1) {
                        cart[i].quantity--;
                    }

                    num = cart[i].quantity;
                    console.log(num);
                    break;
                }
            }

            document.querySelector('#' + product_id).innerHTML = num;
            calculateTotalAmount();
        }

        function calculateTotalAmount() {
            var total = 0;
            cart.forEach(function(item) {
                total += item.price * item.quantity;
            });

            document.querySelector('#total-amount').innerHTML = 'Total: ' + total + 'PHP';
        }

        function deleteCartItem(product_id) {
            const index = cart.findIndex(item => item.product_id === product_id);
            if (index !== -1) {
                cart.splice(index, 1);
                populateCartTable();
            }
        }
    </script>
</body>

</html>