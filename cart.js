    let toastBox = document.querySelector('#toastBox');
    let message = 'An item has been added to cart.';

    function showToast(productID, PriceP) {
        console.log('function was called');
        let toast = document.createElement('div');
        toast.classList.add('toast');
        toast.innerHTML = message;
        toastBox.appendChild(toast);
        addToCart(productID, PriceP);
        setTimeout(() => {
            toast.remove();
        }, 5000);
    }

    function addToCart(ROWID, productId, PriceS) {
    // Retrieve existing cart data from cookie or initialize as empty array
    var cart = JSON.parse(getCookie("cart") || "[]");
    // Add the new item to the cart
    cart.push({true_id: ROWID, product_id: productId, price: PriceS, quantity: 1});

    console.log(cart);
    
    // Save the updated cart back to the cookie
    setCookie("cart", JSON.stringify(cart), 30); // Expires in 30 days
    }

    function viewCart() {
        var cart = JSON.parse(getCookie("cart") || "[]");
        console.log("Cart Items:");
        console.table(cart);
    }
    
    function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

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