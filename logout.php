<?php



setcookie('loggedin', 0);
setcookie("FirstName", "");

setcookie("LastName", "");

$_SESSION['step'] = 1;
header('Location: http://localhost/golden-sinilog-website/index.php');
exit()
?>