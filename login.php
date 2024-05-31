<?php   
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $db_username = "root";
        $db_password = "";
        $dbname = "food_list";

        // Create connection
        $conn = new mysqli($servername, $db_username, $db_password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT password FROM log WHERE username = ?";
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            die("Error preparing statement: " . $conn->error);
        }
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($hashed_password);
            $stmt->fetch();

            if (password_verify($password, $hashed_password)) {
                session_start();
                $_SESSION['username'] = $username;
                header("Location: addfood.php");
                exit();
            } else {
            	$message = "Invalid username or password";
                 echo "<script type='text/javascript'>alert('$message');</script>";
            }
        } else {
        	$message = "Invalid username or password";
             echo "<script type='text/javascript'>alert('$message');</script>";
        }

        $stmt->close();
        $conn->close();
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparefood</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to your CSS file for styling -->
         

</head>
	<body> <div class="form_container">
            <h2>Login</h2>
    <form action="login.php" class="rego" method="post" enctype="multipart/form-data">
        <label for="username">Username:</label>
        <input type="text" class="input_field" name="username" required>
        <label for="password">Password:</label>
        <input type="text" class="input_field" name="password" required>
        <input type="submit" value="Login">
    </form>



</body>
</html>
