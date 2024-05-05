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

$sql = "SELECT * FROM foods";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $userlist = array();
    while($row = $result->fetch_assoc()) {
        array_push($userlist, $row);
    }

    //erase this line pag nagets na, for explanation lang to.
    print_r($userlist);
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
