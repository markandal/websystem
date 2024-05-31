<?php include 'connection.php';
if (isset($_POST['add_food'])){

    $food_name = $_POST['food_name'];
    $expiry_date = $_POST['expiry_date'];
    $address = $_POST['address'];
    $file_name = $_FILES['file_name']['name'];
    $temp_name = $_FILES['file_name']['tmp_name'];
    $file_name_folder = 'images/'.$file_name;


    $insert_query = mysqli_query($conn, "insert into foods (name, date, address, image) values ('$food_name', '$expiry_date', '$address', '$file_name')")  or die("insert failed");


   if ($insert_query){
    move_uploaded_file($temp_name, $file_name_folder);

if ($insert_query) {
    $message = "Operation was successful!";
    echo "<script type='text/javascript'>alert('$message');</script>";
} else {
    $message = "Operation failed!";
    echo "<script type='text/javascript'>alert('$message');</script>";
}

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

    <?php include 'connection.php' ?>
         

</head>
<div  class="logo">
            <a href="index.php"><h1>Sparefood</h1></a>

<body>

    

    
    </div>

    <div class="about">
        
    </div>

    <header>
        
        <nav class="nav_bar">
            <ul>
                <li><a href="addfood.php">Add Food</a></li>
                <li><a href="cart.php">Cart</a></li>
               <li><a href="about.php">About Us</a></li>
            </ul>
        </nav>
    </header>

    <div class="form_container">
            <h3 class="heading">Add Food</h3>
            <form action="" class="add_food" method="post" enctype="multipart/form-data">
                <input type="text" name="food_name" placeholder="Enter food name" class="input_field" required>
                <input type="number" name="expiry_date" min= "0"placeholder="Days until expiry" class="input_field" required>
                <input type="text" name="address" placeholder="Enter your address" class="input_field" required>
                <input type="file" name="file_name" class="input_field">
                <input type="submit" name="add_food" class="submit" value="Add Food">
            </form>
    </div>

</body>
</html>