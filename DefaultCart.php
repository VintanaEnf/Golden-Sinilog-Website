<?php
$cart = array();
$cart_serialized = serialize($cart);
setcookie("cart", $cart_serialized, time() + (86400 * 30), "/");
?>