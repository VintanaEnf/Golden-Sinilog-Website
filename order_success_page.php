<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .chest {
            background-color: white;
            margin-top: 150px;
            display: flex;
            width: 600px;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-left: auto;
            margin-right: auto;
            height: 400px;
            border-radius: 10px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);

        }

        .check-symbol {
            width: 100px;
            object-fit: contain;
        }

        .check-btn {

            text-decoration: none;
            width: 300px;
            background-color: #d92424;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 10px;
            padding: 10px 0px 10px 0px;
            transition: background 0.5s;
            text-align: center;
        }

        .check-btn:hover {
            background-color: rgb(255, 118, 118);
            color: white;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./CSS/home.css">
    <link rel="icon" type="images/x-icon" href="./IMAGES/general/Gred.png">
    <title>Golden Sinilog | Thank you!</title>
</head>

<body>
    <?php
    include './navbar.php';
    ?>
    <div class="chest">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3b/Eo_circle_green_checkmark.svg/2048px-Eo_circle_green_checkmark.svg.png" alt="" class="check-symbol">
        <h3>Order Successful</h3>
        <p>Thank you so much for your order</p>
        <a href="./index.php" class="check-btn">Back to Home Page</a>
    </div>
</body>

</html>
[]
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


$cartItems = json_decode($_COOKIE['cart'], true);

if ($cartItems === null){
    $_SESSION['step'] = 1;
    header('Location: http://localhost/golden-sinilog-website/checkout_page.php');
    exit();
}

$foodidsql = "INSERT INTO transactions (UserID ,TotalAmount, PurchasedItems) VALUES (?, ?, ?)";


$stmt = $conn->prepare($foodidsql);


$stmt->bind_param("iis", $useridsql, $totalamountsql, $purchaseditemssql);



$sqluser = "SELECT * FROM users";
$resultuser = $conn->query($sqluser);

if ($resultuser->num_rows > 0) {
    $userlist = array();
    

    while($row = $resultuser->fetch_assoc()) {
        array_push($userlist, $row);

    }
} else {
    echo "0 results";
}






if ($_COOKIE['FirstName'] == null){
    header('Location: http://localhost/golden-sinilog-website/SignIn.php');
    exit();
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


    $sqlfoodquantity = "SELECT * FROM foods Where 1";
    $sqlfoodresult = $conn->query($sqlfoodquantity);

    $sqlquantitylist = array();
        

    while($row = $sqlfoodresult->fetch_assoc()) {
            array_push($sqlquantitylist, $row);
    }



if($_COOKIE['FirstName'] == $userlist[1]['FirstName'] and $_COOKIE['LastName'] == $userlist[1]['LastName']){
    $useridsql = $userlist[1]["ID"];
}
$purchaseditemssql = "";
foreach ($cartItems as $item) {

    $foodidsql = "UPDATE foods SET quantity = ? WHERE ID = ?";
    $stmtfood = $conn->prepare($foodidsql);
    $stmtfood->bind_param('ii', $foodidquantitysql, $foodididsql);


    $cartitemid = (int) $item['true_id'];



    $num1 = (int) $item['quantity'];

    $num2 = (int) $item['price'];

    
    foreach ($sqlquantitylist as $key => $sqlquantitylist[1]){
        if($sqlquantitylist[1]["ID"]   == $cartitemid){
            $foodididsql = $cartitemid;
            $foodidquantitysql = $sqlquantitylist[1]["quantity"] - $num1;    
            
            echo "<br>";        echo "<br>";        echo "<br>";echo "<br>";
            echo $foodidquantitysql;
            echo "</br>";echo "</br>";echo "</br>";echo "</br>";
            
            $stmtfood->execute();
        }
    }



//    $totalamountsql += (int) $item['quantity' * (int) $item['price']];
    $totalamountsql += $num1 * $num2;

    $purchaseditemssql = $purchaseditemssql . " 
    " . $item['product_id'] . "| quantity: " . $item['quantity'] . "| Price: " . $item['price'];


};




//$TransactionDatesql = "Today is " . date('Y-m-d H:i:s') . "<br>";

$stmt->execute();
echo "RECORDED: " . $stmt->affected_rows;

$stmt->close();
$stmtfood->close();
$conn->close(); 
$_SESSION['step'] = 1;
//header('Location: http://localhost/golden-sinilog-website/checkout_page.php');
exit();
?>
