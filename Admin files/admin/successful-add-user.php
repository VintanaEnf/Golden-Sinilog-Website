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

$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Email = $_POST['Email'];
$ID = $_POST['ID'];
$Password = $_POST['Password'];
$IsAdmin = $_POST['IsAdmin'];


$foodidsql = "INSERT INTO users (ID, FirstName, LastName, Email, Password, IsAdmin) VALUES (?, ?, ?, ?, ?, ?)";

//$foodidsql = "UPDATE foods SET NAME = ? , Description = ? WHERE 1 and ID = ?";
$stmt = $conn->prepare($foodidsql);


$stmt->bind_param('issssi', $ID_SQL, $FirstNameSQL, $LastNameSQL, $EmailSQL, $PasswordSQL, $IsAdminSQL);

//$stmt->bind_param('ssi', $prod_name_sql, $prod_desc_sql, $prod_id);

$ID_SQL = $ID; 
$FirstNameSQL = $FirstName;
$LastNameSQL = $LastName;
$EmailSQL = $Email;
$PasswordSQL = $Password;
$IsAdminSQL = $IsAdmin;

$stmt->execute();

echo "RECORDED: " . $stmt->affected_rows;

$stmt->close();
$conn->close(); 
$_SESSION['step'] = 1;
header('Location: http://localhost/Golden_Sinilog/Admin%20Files/admin/users.php');
exit();
?>
