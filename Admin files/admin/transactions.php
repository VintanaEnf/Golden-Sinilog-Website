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


$sqltransaction = "SELECT * FROM transactions WHERE 1";
$transresult = $conn->query($sqltransaction);

if ($transresult->num_rows > 0) {
    $transactionlist = array();
    

    while($row = $transresult->fetch_assoc()) {
        array_push($transactionlist, $row);

    }
} else {
    echo "0 results";
}

echo $transactionlist;

echo $transactionlist;
echo $transactionlist;
echo $transactionlist;
echo $transactionlist;
echo $transactionlist;
echo $transactionlist;
echo $transactionlist;
echo $transactionlist;
echo $transactionlist;
echo $transactionlist;
print_r($transactionlist);
$conn->close();



 if($connection_passed == 1){








 }else{
	$_SESSION['step'] = 1;
	header('Location: http://localhost/Golden_Sinilog/index.php');
	exit();

 }


 ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../table-css.css">
    <link rel="stylesheet" href="../admin/products.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
</head>

<body>

	<?php include 'sidebar-profile.php' ?>
    <div class="test">
        <header>
            <h2>
                <label for="">
                    <span class="material-symbols-outlined">menu</span>
                </label>
                Transactions
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


                      <!--  <tr>
                        <tr>
                            <td>DATA HERE</td>
                            <td>DATA HERE</td>
                            <td>DATA HERE</td>
                            <td>DATA HERE</td>
                            <td><a href='./edit-product.php' class='btn-edit'><span class='material-symbols-outlined'>
                                        edit
                                    </span></a><a href='' class='btn-remove'><span class='material-symbols-outlined'>
                                        delete
                                    </span></a></td>
                        </tr>
                        </tr>
                        
                        -->

                        <?php
                            foreach ($userlist as $key => $userlist[1]){

                                echo '<tr>';
                                echo '<tr>';

                                    echo '<td>';
                                    echo $transactionlist[1]["ID"]; 

                                    echo '</td>';

                                    echo '<td>';
                                    echo $transactionlist[1]["UserID"]; 
                                    echo '</td>';

                                    echo '<td>';
                                    echo $transactionlist[1]["TransacionDate"]; 
                                    echo '</td>';

                                    echo '<td>';
                                    echo $transactionlist[1]["TotalAmount"]; 
                                    echo '</td>';

                                    echo '<td>';
                                    echo $transactionlist[1]["PurchasedItems"]; 
                                    echo '</td>';

                                  
                                echo '</tr>';
                                echo '</tr>';

                            }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
