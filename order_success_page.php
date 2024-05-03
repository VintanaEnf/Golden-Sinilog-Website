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
    <title>Order Successful</title>
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