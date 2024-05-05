<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../admin/products.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>

<body>
    <?php
    include 'sidebar.html';
    ?>
    <div class="test">
        <header>
            <h2>
                <label for="">
                    <span class="material-symbols-outlined">menu</span>
                </label>
                Edit Admin
            </h2>
        </header>
    </div>
    <form action="successful-user-edit.php" method="POST" enctype="multipart/form-data">
        <div class="main-content">
            <div class="main2">
                <div class="flex-row">
                    <div class="flex-row">
                        <div class="s">
                            <p>User ID</p>
                            <input type="text" name="ID" id="" class="input-field" required>
                            <p>User First Name</p>
                            <input type="text" name="FirstName" id="" class="input-field" required>
                            <p>User Last Name</p>
                            <input type="text" name="LastName" id="" class="input-field" required>
                            <p>User Email</p>
                            <input type="text" name="Email" id="" class="input-field" required>
                            <p>User Password</p>
                            <input type="text" name="Password" id="" class="input-field" required>
                            <p>User IsAdmin</p>
                            <input type="number" name="IsAdmin" id="" class="input-field" required>

                            <input type="submit" value="Edit User" name="add-prod">
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
    </form>
</body>
</html>