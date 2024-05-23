
<html>
    <head>
        <title>Golden Sinilog - Sign In</title>
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

						$email = $_POST['Email'];
						$password = $_POST['Password'];

						// echo $email;
						// echo $password;

						// SQL query to check if username and password match in the database
						$sql = "SELECT * FROM users WHERE Email='$email' AND Password='$password'";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// Authentication successful
							// echo json_encode(array('status' => 'success', 'message' => 'Login successful'));
							echo 'Login Successful!';
							
							setcookie("loggedin", 1);
								
							$sqlid = $conn->query("SELECT * FROM users WHERE 1 AND Email='$email'");
							if($sqlid){
								$row = $sqlid->fetch_assoc();
								if ($row) {
									setcookie("FirstName", $row['FirstName']);
									setcookie("LastName", $row['LastName']);
								} else {
									echo "No user found.";
									echo '<br><br><button>Retry</button>';

								}
							}
							header("Location: index.php");

						} else {
							// Authentication failed
						// 	echo json_encode(array('status' => 'error', 'message' => 'Invalid username or password'
						// ));
							echo 'Invalid username or password.';
							echo '<br><br><button onclick="window.location.href=\'SignIn.php\';">Retry</button>';
								setcookie("loggedin", 0);
								setcookie("FirstName", "");
								setcookie("LastName", "");

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