<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../admin/products.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>

<body>
    <?php
    include 'sidebar.html';
    ?>
    <div class="test">
        <header>
            <h2>
                <label for="">
                    <span class="material-symbols-outlined"></span>
                </label>
                Add Admin Form
            </h2>
        </header>
    </div>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="main-content">
            <div class="main2">
                <div class="flex-row">
                    <div class="flex-row">
                        <div class="s">
                            <p>Admin Name</p>
                            <input type="text" name="prod_name" id="" class="input-field" required>
                            <p>Admin Password</p>
                            <input type="text" name="prod_name" id="" class="input-field" required>
                            <p>Admin Ewan</p>
                            <input type="text" name="prod_name" id="" class="input-field" required>


                        <input type="submit" value="Add Admin" name="add-prod">
                    </div>
                </div>

            </div>
        </div>
    </div>
    </form>
</body>
</html>