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
    // Define the initial cart data

    console.log(getCookie("cart"));
    var cart = [
        {
            'true_id': 1,
            'product_id': 'Tapsilog',
            'price': 120,
            'quantity': 2
        },
        {
            'true_id': 2,
            'product_id': 'Liempsilog',
            'price': 100,
            'quantity': 1
        },
        {
            'true_id': 3,
            'product_id': 'Chicksilog',
            'price': 120,
            'quantity': 3
        },
        {
            'true_id': 4,
            'product_id': 'Daingsilog',
            'price': 100,
            'quantity': 1
        }
    ];

    // Function to set cookie
    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    // Function to get cookie
    function getCookie(name) {
        var nameEQ = name + "=";
        var cookies = document.cookie.split(';');
        for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i];
            while (cookie.charAt(0) == ' ') {
                cookie = cookie.substring(1, cookie.length);
            }
            if (cookie.indexOf(nameEQ) == 0) {
                return decodeURIComponent(cookie.substring(nameEQ.length, cookie.length));
            }
        }
        return null;
    }

    // Function to view cart
    function viewCart() {
        cart = JSON.parse(getCookie("cart") || JSON.stringify(cart)); // Initialize cart with default if no cookie
        console.log("Cart Items:");
        console.table(cart);
    }

    viewCart();

    // Function to populate cart table
    function populateCartTable() {
        var cartBody = document.getElementById('cart-body');
        cartBody.innerHTML = '';

        cart.forEach(function(item) {
            console.log(item.price);
            var row = document.createElement('tr');
            row.innerHTML = `
                <td class="food-column">
                    <button class="delete-button" onclick="deleteCartItem(${item.true_id});">
                        <span class="material-symbols-outlined">delete</span>
                    </button> 
                    ${item.product_id}
                </td>
                <td>${item.price} PHP</td> <!-- Display price with currency -->
                <td class="quantity-cell">
                    <button class="quantity-button" onclick="qtyDecrease(${item.true_id});">-</button>
                    <p id="item-${item.true_id}-qty">${item.quantity}</p>
                    <button class="quantity-button" onclick="qtyIncrease(${item.true_id});">+</button>
                </td>
            `;
            cartBody.appendChild(row);
        });
        calculateTotalAmount();
    }

    populateCartTable();

    // Function to increase quantity
    function qtyIncrease(true_id) {
        var num = 0;
        for (var i = 0; i < cart.length; i++) {
            if (cart[i].true_id === true_id) {
                cart[i].quantity++;
                num = cart[i].quantity;
                console.log(num);
                break;
            }
        }

        console.log('Product ID:', true_id);

        document.querySelector('#item-' + true_id + '-qty').innerHTML = num;

        console.log('Quantity increase');
        calculateTotalAmount();
        setCookie("cart", JSON.stringify(cart), 7); // Update cookie after modifying cart
    }

    // Function to decrease quantity
    function qtyDecrease(true_id) {
        var num = 0;
        for (var i = 0; i < cart.length; i++) {
            if (cart[i].true_id === true_id) {
                if (cart[i].quantity > 1) {
                    cart[i].quantity--;
                }
                num = cart[i].quantity;
                console.log(num);
                break;
            }
        }

        document.querySelector('#item-' + true_id + '-qty').innerHTML = num;
        calculateTotalAmount();
        setCookie("cart", JSON.stringify(cart), 7); // Update cookie after modifying cart
    }

    // Function to calculate total amount
    function calculateTotalAmount() {
        var total = 0;
        cart.forEach(function(item) {
            total += item.price * item.quantity;
        });

        document.querySelector('#total-amount').innerHTML = 'Total: ' + total.toFixed(2) + ' PHP'; // Fix total to 2 decimal places
    }

    // Function to delete item from cart
    function deleteCartItem(true_id) {
        const index = cart.findIndex(item => item.true_id === true_id);
        if (index !== -1) {
            cart.splice(index, 1);
            populateCartTable();
            setCookie("cart", JSON.stringify(cart), 7); // Update cookie after modifying cart
        }
    }
</script>



</body>

</html>