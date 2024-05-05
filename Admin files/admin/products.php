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


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../table-css.css">
    <link rel="stylesheet" href="../admin/products.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
</head>

<body>
    <?php
    include '../admin/sidebar.html';

    ?>
    <div class="test">
        <header>
            <h2>
                <label for="">
                    <span class="material-symbols-outlined">menu</span>
                </label>
                Product Management
            </h2>

        </header>
    </div>

    <div class="main-content">
        <div class="main2">
            <div class="products-panel">
                <h3>Products</h3>
                <a href="../admin/add-product.php" class="button-24">New Product</a>
                <br>
                <table class="projected-tbl">
                    <thead style="width: 100%;">
                        <tr>
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Product Desc</th>
                            <th>Product Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody style="width: 100%;">
                        <tr>
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>