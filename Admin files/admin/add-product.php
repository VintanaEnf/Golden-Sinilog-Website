

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
                    <span class="material-symbols-outlined">menu</span>
                </label>
                Add Product
            </h2>
        </header>
    </div>
    <form action="successful-add-product.php" method="POST" enctype="multipart/form-data">
        <div class="main-content">
            <div class="main2">
                <div class="flex-row">
                    <div class="flex-row">
                        <div class="s">
                            <p> Product ID </p>
                            <input type="number" name="prod_id" id="" class="input-field" required>

                            <p>Product Name</p>
                            <input type="text" name="prod_name" id="" class="input-field" required>


                            <p>Product Quantity</p>
                            <input type="number" name="prod_quantity" id="" class="input-field" required>
                            
                            <p>Product Description</p>
                            <textarea name="prod_desc" id="" cols="30" rows="10"></textarea required>
                    </div>
                    <div class="s">
                        
                    <p>Product Image</p>
                        <!--<input type="file" name="image" id="" required accept=".jpeg,.png,.jpg">

                        -->
                        <input type="text" name="image" id="" class="input-field" required>
                        
                        <p>Product Selling Price</p>
                        <input type="number" name="prod_price" id="" min="1" class="input-field" required>
                        <input type="submit" value="Add Product" name="edit-prod">
                    </div>
                </div>

            </div>
        </div>
    </div>
    </form>
</body>
</html>