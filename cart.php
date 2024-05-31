<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparefood</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to your CSS file for styling -->

    <?php include 'connection.php'?>
         

</head>
<div  class="logo">
            <a href="index.php"><h1>Sparefood</h1></a>

            <header>
        
        <nav class="nav_bar">
            <ul>
                <li><a href="addfood.php">Add Food</a></li>
                <li><a href="cart.php">Cart</a></li>
               <li><a href="about.php">About Us</a></li>
            </ul>
        </nav>
    </header>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            font-size: 18px;
        }
        th {
            border: 1px solid #ddd;
            padding: 16px; /* Increased padding for table cells */
            text-align: left;
            text-align: center; /* Center align text horizontally */
            vertical-align: middle; /* Center align text vertically */
        }
        td {
            border: 1px solid #ddd;
            padding: 30px auto; /* Increased padding for table cells */
            text-align: center;
            justify-content: center;
            text-align: center; /* Center align text horizontally */
            vertical-align: middle; /* Center align text vertically */
            height: 120px; /* Increased height for table cells */
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        }
        td {
            font-size: 14px;
        }
        th {
            font-size: 16px;
        }
        img {
            width: 100px; /* Set the desired width for all images */
            height: 100px; /* Set the desired height for all images */
            object-fit: cover; /* Ensures the image covers the specified dimensions without distortion */
            display: block; /* Makes the image a block element */
            margin: 0 auto; /* Centers the image horizontally */
        }
    </style>

</head>


<body>





    <div class="tb_container">
    <h2>Posted Food</h2>
    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Expiry</th>
                <th>Address</th>
                 <th>Action</th>
            </tr>
        </thead>
        <tbody>
    <?php
    $display_food = mysqli_query($conn, "Select * from foods" );

    if (mysqli_num_rows($display_food)>0) {
        while($row = mysqli_fetch_assoc($display_food)){
            ?> 
            <!--display table-->
            <tr>
                <td><img src="images/<?php echo $row['image']?>" alt = <?php echo $row['name']; ?>></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td>
                    <a href="checkout.php?checkout=<?= $row['id']?>" onclick = "return confirm('Checkout this food?');">Checkout</a>
                </td>
            </tr>
        </tbody>

 <?php
}

}else{
        echo "No food available";
} 

    ?>
   
    </div>
</body>
    
</body>
</html>
