<?php include 'connection.php';
if (isset($_POST['rego'])){

    $username = $_POST['username'];
    $password = $_POST['password'];


    $rego_query = mysqli_query($conn, "insert into log (username, password) values ('$username', '$password)")  or die("insert failed");

    if ($rego_query) {
    	header('location:cart.php');
    }else{
    	echo "Failed";
    }
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
            <h2>Register</h2>
    <form action="login.php" class="rego" method="post" enctype="multipart/form-data">
        <label for="username">Username:</label>
        <input type="text" class="input_field" name="username" required>
        <label for="password">Password:</label><br>
        <input type="text" class="input_field" name="password" required>
        <input type="submit" value="Register">
    </form>
    <input type="submit" name="login" class="login" value="Add Food" style="background-color: skyblue" onclick="location.href='login.php';">
</div>




</body>
</html>
