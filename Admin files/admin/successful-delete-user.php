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

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

$prod_id = $_POST['prod_id'];


$foodidsql = "DELETE from users WHERE 1 AND ID = ?"; 

//$foodidsql = "UPDATE foods SET NAME = ? , Description = ? WHERE 1 and ID = ?";
$stmt = $conn->prepare($foodidsql);


$stmt->bind_param('i', $prod_id);

//$stmt->bind_param('ssi', $prod_name_sql, $prod_desc_sql, $prod_id);


$stmt->execute();

$stmt->close();
$conn->close();	
$_SESSION['step'] = 1;
header('Location: http://localhost/Golden_Sinilog/Admin%20Files/admin/users.php');
exit();
?>
