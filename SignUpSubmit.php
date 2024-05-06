<html>
    <head>
        <title>Golden Sinilog - Sign Up</title>
        <link rel="icon" type="images/x-icon" href="./IMAGES/general/Gred.png">
        <link rel = "stylesheet" href = "./CSS/home.css">
        <?php include 'css.php' ?>
    </head>
    
    <body>

       <?php include 'navbar.php'?>



        <section class="main_container white-text">
                
            <div style="border-radius: 30px; justify-content: center; width: 30%;" class="container container-background white-text">
                <div>
                    <!--<img style="padding: 10px;" src="./IMAGES/aboutus/Golden-Sinilog.jpg" alt="Logo" width="412" height="256"> -->
                    <h1 style="padding: 20px; text-align: center; font-size: 50; font-family: univers; margin-bottom:5px;">Sign In</h1>
                    <p>
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

                        $firstname = $_POST['First'];
                        $lastname = $_POST['Last'];
                        $email = $_POST['Email'];
                        $pass = $_POST['Pass'];

                        // Validate input (e.g., check if username is not empty)
                        if (empty($email) || empty($pass) || empty($firstname) || empty($lastname)) {
                            echo json_encode(array('status' => 'error', 'message' => 'Please fill in all fields'));
                            exit;
                        }

                        // Check if username already exists in the database
                        $sql = "SELECT * FROM users WHERE Email='$email'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // Username already exists
                            // echo json_encode(array('status' => 'error', 'message' => 'Username already exists'));
                            echo 'Email Already Exists';
                            exit;
                        }

                        // Insert new user into the database
                        $sql = "INSERT INTO users (FirstName, LastName, Email, Password, IsAdmin) VALUES ('$firstname', '$lastname', '$email', '$pass', 0)";

                        if ($conn->query($sql) === TRUE) {
                            // User registration successful
                            echo json_encode(array('status' => 'success', 'message' => 'User registration successful, redirecting you back to Home.'));
                            header("Location: index.php");
                        } else {
                            // Error inserting user into database
                            // echo json_encode(array('status' => 'error', 'message' => 'Error registering user'));
                            echo 'Error Registering User';
                        }

                        // Close database connection
                        $conn->close();
                        $_SESSION['step'] = 1;
                        exit()
                        ?>
                    </p>
                </div>

                
            
            </div>
        </section>

        <?php include 'footer.php' ?>
        
    </body>

   

</html>