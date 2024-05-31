<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparefood</title>
    <link rel="stylesheet" href="style.css">
         

</head>


<body>
    <div  class="logo">
            <a href="index.php"><h1>Sparefood</h1></a>


</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <header>
        <h1>
        
    About Us</h1>
    </header>

    <main>
        <section>
            <h2>Our Mission</h2>
            <img src="unity.png" alt="unity" style="width:250px;height:150px; border:solid;"> 
            <p>We formed our group on 2024. We are a group of four members. We came up with this idea and decided to make a website based on spare foods where users can donate the spare foods for needy peoples.</p>
        </section>

        <section>
            <h2>Our Team</h2>
            <p>Meet our dedicated team members:</p>
            <ul class="absolute">
                <li>Mark</li>
                <li>Manoj Gurung</li>
                <li>Ali</li>
                <li>Utkrista</li>
            </ul>
        </section>

        <section>
            <h2>Company History</h2>
            <p>Our company was founded in 2024 with the vision of spare foods for needy peoples. Basically the one in needs can type available products in the box and search, once it comes in the box they get details on pickups and contact and location info.</p>
            <p>Since then, we have grown exponentially and have made some progress and helped peoples in need</p>
        </section>
    </main>

    <div class="form_container">
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
    </div>

    <footer>
        <p>&copy; 2024 Spare Foods. All rights reserved.</p>
    </footer>
</body>
</html>