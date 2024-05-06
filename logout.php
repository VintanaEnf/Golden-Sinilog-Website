<?php



setcookie('loggedin', 0);
setcookie("FirstName", "");

setcookie("LastName", "");

$_SESSION['step'] = 1;
header('Location: http://localhost/Golden_Sinilog/index.php');
exit()
?>