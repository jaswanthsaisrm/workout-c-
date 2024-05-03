<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weight Goals</title>
    <style>
        /* CSS to style the headings container and the headings */
        .headings-container {
            display: flex;
            justify-content: space-between;
        }

        .headings-container h2 {
            margin: 0;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="home.css">
    <script src="home.js"></script>
    
</head>
<body>
    <!---header-->
    <header class="header">
        <a href="#" class="logo">fit-HUB </a>

        <i class="fa-solid fa-bars" id="menu-icon"></i>
        <nav class="navbar">


            <a href="#home" class="active">Home</a>
            <a href="#workouts">workouts</a>
            <a href="#reports">reports</a>
            <a href="#contact">contact</a>
        </nav>
    </header>
 <!---home section design-->
<section class="home" id="home">
    <div class="home-content">
        <h3>fit-HUB</h3>
        <span><h1>"Embark on Your Fitness Journey with Fit Hub!"</h1></span>
        <p>At Fit Hub, we believe that every step counts on your fitness journey. Whether you're a beginner looking to kickstart a healthier lifestyle or a seasoned fitness enthusiast aiming to level up your workouts, we've got you covered.</p>
    </div>
    <div class="home-img">
      <img src="home-img.png" alt="">
    </div>
</section>
 <!---wokrouts-->
 <section class="services" id="workouts">
    <h2 class="headinng"><span>Workouts</span></h2>
    <div class="services-container">
        <div class="services-box">
            <h3>beginner</h3>
            <p>8-10 reps <br>10kgs<br> 3plates</p>
            <a href="./abs/abs.html" class="btn">start</a>
        </div>
        <div class="services-box">
            <h3>Intermediate</h3>
            <p>13-17 reps <br>15kgs<br> 5plates</p>
            <a href="./chest/chest.html" class="btn">start</a>
        </div>
        <div class="services-box">
            <h3>Expert</h3>=
            <p>20-25 reps <br>25kgs<br> 10plates</p>
            <a href="./leg/leg.html" class="btn">start</a>
        </div>
    </div>
 </section>
 <section class="reports" id="reports">
    <h2>Reports</h2>
    <br>
    <table class="reports-table">
        <thead>
            <tr>
                <th>Day</th>
                <th>Weight</th>
                <th>Calories Burned</th>
               
            </tr>
        </thead>
        <tbody>
           
            <tr>
                <td>Day 1</td>
                <td></td>
                <td></td>
              
            </tr>
            <tr>
                <td>Day 2</td>
                <td></td>
                <td></td>
                
            </tr>
            <tr>
                <td>Day 3</td>
                <td></td>
                <td></td>
                
            </tr>
            <tr>
                <td>Day 4</td>
                <td></td>
                <td></td>
                
            </tr>
            <tr>
                <td>Day 5</td>
                <td></td>
                <td></td>
                
            </tr>
            <tr>
                <td>Day 6</td>
                <td></td>
                <td></td>
                
            </tr>

            <tr>
                <td>Day 7</td>
                <td></td>
                <td></td>
                
            </tr>
           
        </tbody>
    </table>
</section>

<!-- contact -->
<!-- contact section -->
<section class="contact" id="contact">
    <h2>Contact Me</h2>
    <form action="#" method="POST" class="contact-form">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn">Send Message</button>
    </form>
</section>

   
</body>
</html>
