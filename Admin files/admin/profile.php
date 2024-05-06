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

$sql = "SELECT * FROM users WHERE 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $userlist = array();
    

    while($row = $result->fetch_assoc()) {
        array_push($userlist, $row);

    }
} else {
    echo "0 results";
}

foreach ($userlist as $key => $userlist[1]){

	if($userlist[1]["FirstName"] == $_COOKIE['FirstName']){	
		if($userlist[1]['LastName'] == $_COOKIE['LastName']){
			$connection_passed = 1;
		}
	}
}

$conn->close();



 if($connection_passed == 1){






 











 }else{
	$_SESSION['step'] = 1;
	header('Location: http://localhost/Golden_Sinilog/index.php');
	exit();

 }


 ?>