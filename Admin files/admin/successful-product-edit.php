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

echo "Product ID: " . $prod_id . "<br>";
echo "Product Name: " . $prod_name . "<br>";
echo "Product Description: " . $prod_desc . "<br>";
echo "Image: " . $image . "<br>";
echo "Product Quantity: " . $prod_quantity . "<br>";
echo "Product Price: " . $prod_price . "<br>";

// $foodidsql = "UPDATE foods SET Name = ?, Description = ?, ImagePath = ?, quantity = ?, Price = ? WHERE 1 and ID = ?	"; 

// //$foodidsql = "UPDATE foods SET NAME = ? , Description = ? WHERE 1 and ID = ?";
// $stmt = $conn->prepare($foodidsql);


// $stmt->bind_param('isssdi', $prod_id_sql, $prod_name_sql, $prod_desc_sql, $image_sql, $prod_quantity_sql, $prod_price_sql);

$foodidsql = "UPDATE foods SET Name = ?, Description = ?, ImagePath = ?, quantity = ?, Price = ? WHERE ID = ?";
$stmt = $conn->prepare($foodidsql);
$stmt->bind_param('sssidi', $prod_name, $prod_desc, $image, $prod_quantity, $prod_price, $prod_id);

//$stmt->bind_param('ssi', $prod_name_sql, $prod_desc_sql, $prod_id);

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
