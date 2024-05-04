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

$email = $_POST['Email'];
$password = $_POST['Password'];

echo $email;
echo $password;

// SQL query to check if username and password match in the database
$sql = "SELECT * FROM users WHERE Email='$email' AND Password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Authentication successful
    echo json_encode(array('status' => 'success', 'message' => 'Login successful'));
} else {
    // Authentication failed
    echo json_encode(array('status' => 'error', 'message' => 'Invalid username or password'));
}

// Close database connection
$conn->close();
?>
