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

			$userInfo = $userlist;
			break;
		}
	}
}




 if($connection_passed == 1){


echo '<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../table-css.css">
    <link rel="stylesheet" href="../admin/products.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="images/x-icon" href="./../../IMAGES/general/Gred.png">
    <title>Golden Sinilog | Profile</title>
</head>

<body>
';
	include 'sidebar-profile.php';
 
echo '
    <div class="test">
        <header>
            <h2>
                <label for="">
                    <span class="material-symbols-outlined">menu</span>
                </label>
                User Profile Page
            </h2>

        </header>
    </div>

    <div class="main-content">
        <div class="main2">
            <div class="products-panel">
                <h3>Profile Page</h3>
                <div class="flex-row">
                    <div class="flex-row">
                        <div class="s">';
// DITO GAWA CODE 

 echo '<p> User Name:   <i>'; 
 echo $userlist[1]['FirstName'];
 echo ' ';
 echo $userlist[1]['LastName'];
 echo '</i></p>';


 echo '<p> User Email:   <i>'; 
 echo $userlist[1]['Email'];
 echo '</i></p>';


//  echo '<p> Is Admin: '; 
//  echo $userlist[1]['IsAdmin'];
//  echo '</p>';

 

// GEGE LODS


echo '       </div>
                    
                </div>

                    
            </div>
        </div>
    </div>
</body>

</html>
';





$conn->close();


 }else{
	$_SESSION['step'] = 1;
	header('Location: http://localhost/Golden_Sinilog/index.php');
	exit();

 }




 ?>




                           

              
