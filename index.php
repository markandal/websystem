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

<main>
    <section>
        <h2 style="text-align: center;">Welcome to SpareFood</h2>
        <p>
            <b>Turning Surplus into Support</b></br>
<br><i>SpareFood</i> is a community-driven platform designed to connect those with excess food to those in need. Born from the innovative minds of students at Wentworth Institute of Higher Education in Sydney, our mission is to reduce food waste and combat hunger in our community.</br></p>
    </section>

    <section>
        <p><b>Why Join SpareFood?</b></br>
                        <ul class="absolute">
                <li>Reduce Waste: Help decrease the staggering amount of food that ends up in landfills.</li>
                <li>Support Your Community: Provide vital resources to those who need it most.</li>
                <li>Sustainable Living: Contribute to a more sustainable and responsible way of living.</li></p>
            </ul>
    </section>

    <section>
        <p><b>Get Involved</b></br>
Join us in making a difference. Whether you're a student, a local resident, or a business owner, your participation matters. Together, we can turn surplus into support and build a stronger, more connected community.</br></br>

<b>Sign Up Today</b> and start sharing your spare food!</p>
    </section>
</main>
    
    
<br><div class="form_container">
            <h3 class="heading">Feedback</h3>
            <form action="" class="add_food">
                <input type="text" placeholder="First Name" class="input_field" required>
                <input type="text" placeholder="Last Name" class="input_field" required>
                <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
                <input type="text" placeholder="Please write a feedback..." class="input_field" required>

                <input type="submit" class="submit" value="Submit">
            </form>
    </div></br>

    <footer>
        <p>&copy; 2024 Spare Foods. All rights reserved.</p>
    </footer>

</body>
</html>
