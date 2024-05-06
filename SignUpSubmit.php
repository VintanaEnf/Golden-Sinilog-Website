<!DOCTYPE html>
<html>
<body>

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

$firstname = $_POST['First'];
$lastname = $_POST['Last'];
$email = $_POST['Email'];
$pass = $_POST['Pass'];

// Validate input (e.g., check if username is not empty)
if (empty($email) || empty($pass) || empty($firstname) || empty($lastname)) {
    echo json_encode(array('status' => 'error', 'message' => 'Please fill in all fields'));
    exit;
}

// Check if username already exists in the database
$sql = "SELECT * FROM users WHERE Email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Username already exists
    echo json_encode(array('status' => 'error', 'message' => 'Username already exists'));
    exit;
}

// Insert new user into the database
$sql = "INSERT INTO users (FirstName, LastName, Email, Password, IsAdmin) VALUES ('$firstname', '$lastname', '$email', '$pass', 0)";

if ($conn->query($sql) === TRUE) {
    // User registration successful
    echo json_encode(array('status' => 'success', 'message' => 'User registration successful'));
} else {
    // Error inserting user into database
    echo json_encode(array('status' => 'error', 'message' => 'Error registering user'));
}

// Close database connection
$conn->close();
$_SESSION['step'] = 1;
header('Location: http://localhost/Golden_Sinilog/index.php');
exit()
?>