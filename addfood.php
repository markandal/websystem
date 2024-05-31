<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparefood</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to your CSS file for styling -->
         

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
            <form action="" class="add_food">
                <input type="text" placeholder="Enter food name" class="input_field" required>
                <input type="number" min= "0"placeholder="Days until expiry" class="input_field" required>
                <input type="file" class="input_field" required>
                <input type="submit" class="submit" value="Add Food">
            </form>
    </div>

</body>
</html>