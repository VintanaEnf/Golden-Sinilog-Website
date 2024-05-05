<?php



setcookie('loggedin', 0);


$_SESSION['step'] = 1;
header('Location: http://localhost/Golden_Sinilog/index.php');
exit()
?>