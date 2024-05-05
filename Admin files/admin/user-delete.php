

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../admin/products.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
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
                Edit Product
            </h2>
        </header>
    </div>
    <form action="successful-delete-user.php" method="POST" enctype="multipart/form-data">
        <div class="main-content">
            <div class="main2">
                <div class="flex-row">
                    <div class="flex-row">
                        <div class="s">
                            <p> User ID </p>
                            <input type="number" name="prod_id" id="" class="input-field" required>

                           
                    </div>
                    <div class="s">
                        
                        <!--<input type="file" name="image" id="" required accept=".jpeg,.png,.jpg">

                        -->
                        <p> Are you sure you wanna delete this user? </p>
                        <input type="submit" value="Delete User" name="edit-prod">
                    </div>
                </div>

            </div>
        </div>
    </div>
    </form>
</body>
</html>