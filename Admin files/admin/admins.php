<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../table-css.css">
    <link rel="stylesheet" href="../admin/products.css">
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
                Admin Accounts Management
            </h2>

        </header>
    </div>

    <div class="main-content">
        <div class="main2">
            <div class="products-panel">
                <h3>Admins</h3>
                <a href="../admin/add-admin.php" class="button-24">New Admin</a>
                <!--<a href="../admin/add-product.php" class="button-24">Remove Admin</a> -->
                <br>
                <table class="projected-tbl">
                    <thead style="width: 100%;">
                        <tr>
                            <th>Admin ID</th>
                            <th>Admin Name</th>
                            <th>Admin Desc</th>
                            <th>Admin Price</th>
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
                            <td><a href='./edit-admin.php' class='btn-edit'><span class='material-symbols-outlined'>
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