
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

if ($result->num_rows > 0) {
    $userlist = array();
    

    while($row = $result->fetch_assoc()) {
        array_push($userlist, $row);

    }
    //print_r($userlist[1]["ID"]);

    //erase this line pag nagets na, for explanation lang to.
    //print_r($userlist);
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
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
                Users Accounts Management
            </h2>

        </header>
    </div>

    <div class="main-content">
        <div class="main2">
            <div class="products-panel">
                <h3>Users</h3>
                <a href="../admin/add-user.php" class="button-24">New Users</a>
                <!--<a href="../admin/add-product.php" class="button-24">Remove Admin</a> -->
                <br>
                <table class="projected-tbl">
                    <thead style="width: 100%;">
                        <tr>
                            <th>User ID</th>
                            <th>User FirstName</th>
                            <th>User LastName</th>
                            <th>User Email</th>
                            <th>User Password</th>
                            <th>User IsAdmin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody style="width: 100%;">
                        <tr>
                        <?php
                            foreach ($userlist as $key => $userlist[1]){

                                echo '<tr>';
                                echo '<tr>';

                                    echo '<td>';
                                    echo $userlist[1]["ID"]; 

                                    echo '</td>';

                                    echo '<td>';
                                    echo $userlist[1]["FirstName"]; 
                                    echo '</td>';

                                    echo '<td>';
                                    echo $userlist[1]["LastName"]; 
                                    echo '</td>';

                                    echo '<td>';
                                    echo $userlist[1]["Email"]; 
                                    echo '</td>';

                                    echo '<td>';
                                    echo $userlist[1]["Password"]; 
                                    echo '</td>';

                                    echo '<td>';
                                    echo $userlist[1]["IsAdmin"]; 
                                    echo '</td>';

                                    echo "<td><a href='./edit-user.php' class='btn-edit'><span class='material-symbols-outlined'>
                                        edit
                                    </span></a><a href='user-delete.php' class='btn-remove'><span class='material-symbols-outlined'>
                                        delete
                                    </span></a></td>";

                                echo '</tr>';
                                echo '</tr>';

                            }
                        ?>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>