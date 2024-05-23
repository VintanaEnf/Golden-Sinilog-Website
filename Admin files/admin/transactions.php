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
$useriddd = 0;
foreach ($userlist as $key => $userlist[1]){

	if($userlist[1]["FirstName"] == $_COOKIE['FirstName']){	
		if($userlist[1]['LastName'] == $_COOKIE['LastName']){
			$connection_passed = 1;
            $useriddd = $userlist[1]['ID'];
            break;
		}
	}
}

$sqltransactionlist = "";

$sqltransID = "";

$sqltransUserID = "";

$sqltransTransactionDate = "";

$sqltransTotalAmount = "";

$sqltransPurchasedItems = "";


$sqltransaction = "SELECT * FROM transactions WHERE 1 AND UserID = ?";
$stmt = $conn->prepare($sqltransaction);

$stmt->bind_param("i", $useriddd);

$stmt->execute();

$stmt->bind_result($sqltransID, $sqltransUserID, $sqltransTransactionDate, $sqltransTotalAmount, $sqltransPurchasedItems );






 if($connection_passed == 1){

echo'

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../table-css.css">
    <link rel="stylesheet" href="../admin/products.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="images/x-icon" href="./../../IMAGES/general/Gred.png">
    <title>Golden Sinilog | Transactions</title>
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
                User Transactions
            </h2>

        </header>
    </div>

    <div class="main-content">
        <div class="main2">
            <div class="products-panel">
                <h3>Transaction Table</h3>
                <br>
                <table class="projected-tbl">
                    <thead style="width: 100%;">
                        <tr>
                            <th>Transaction ID</th>
                            <th>User ID</th>
                            <th>Transaction Date</th>
                            <th>Total Amount</th>
                            <th>Purchased Items</th>
                        </tr>
                    </thead>
                    <tbody style="width: 100%;">


                    
                        
                    ';
                        
                            while($stmt->fetch()){


                                    echo '<tr>';
                                    echo '<tr>';

                                    echo '<td>';
                                    echo $sqltransID; 
                                    echo '</td>';

                                    echo '<td>';
                                    echo $sqltransUserID; 
                                    echo '</td>';

                                    echo '<td>';
                                    echo $sqltransTransactionDate; 
                                    echo '</td>';

                                    echo '<td>';
                                    echo $sqltransTotalAmount; 
                                    echo '</td>';

                                    echo '<td>';
                                    echo $sqltransPurchasedItems; 
                                    echo '</td>';

                                  
                                echo '</tr>';
                                echo '</tr>';

                            }
                        echo '

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>';








$conn->close();

 }else{
	$_SESSION['step'] = 1;
	header('Location: http://localhost/Golden_Sinilog/index.php');
	exit();

 }


 ?>



