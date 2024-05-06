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

$prod_id = $_POST['prod_id'];
$prod_name = $_POST['prod_name'];
$prod_desc = $_POST['prod_desc'];
$image = $_POST['image'];
$prod_quantity = $_POST['prod_quantity'];
$prod_price = $_POST['prod_price'];


$foodidsql = "INSERT INTO foods (ID, Name, Price, Description, ImagePath, quantity) VALUES (?, ?, ?, ?, ?, ?)";

//$foodidsql = "UPDATE foods SET NAME = ? , Description = ? WHERE 1 and ID = ?";
$stmt = $conn->prepare($foodidsql);


$stmt->bind_param('sssiii', $prod_name_sql, $prod_desc_sql, $image_sql, $prod_quantity_sql, $prod_price_sql, $prod_id_sql);

//$stmt->bind_param('ssi', $prod_name_sql, $prod_desc_sql, $prod_id);

$prod_id_sql = $prod_id; 
$prod_name_sql = $prod_name;
$prod_desc_sql = $prod_desc;
$image_sql = $image;
$prod_quantity_sql = $prod_quantity;
$prod_price_sql = $prod_price;

$stmt->execute();

echo "RECORDED: " . $stmt->affected_rows;

$stmt->close();
$conn->close(); 
$_SESSION['step'] = 1;
header('Location: http://localhost/golden-sinilog-website/Admin%20Files/admin/products.php');
exit();
?>
